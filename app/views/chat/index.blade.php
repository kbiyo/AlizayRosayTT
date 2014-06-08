<!doctype html>
<html>
<head>
	<title>Socket.IO chat</title>
	<style>
		* { margin: 0; padding: 0; box-sizing: border-box; }
		body { font: 13px Helvetica, Arial; }
		form { background: #000; padding: 3px; position: fixed; bottom: 0; width: 100%; }
		form input { border: 0; padding: 10px; width: 90%; margin-right: .5%; }
		form button { width: 9%; background: rgb(130, 224, 255); border: none; padding: 10px; }
		#messages { list-style-type: none; margin: 0; padding: 0; }
		#messages li { padding: 5px 10px; }
		#messages li:nth-child(odd) { background: #eee; }
	</style>
</head>
<body>
	<ul id="messages"></ul>
	<form action="">
		<input id="m" autocomplete="off" /><button>Send</button>
	</form>
	<script src="{{asset('assets/js/socket.io.js')}}"></script>
	<script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
	<script>
		var socket = io('http://localhost:3000/');

		var userName = prompt("Entrez votre nom d'utilisateur");
		socket.emit('newConnection', userName);

		$('form').submit(function(){
			var msg = $('#m').val();
			if(msg != "")
				sendMsg(msg);
			return false;
		});

		socket.on('newMessage', function(user, msg){
			$('#messages').append($('<li>').text(user+" : "+msg));
		});

		socket.on('connectionSucceed', function(msg) {
			$('#messages').append($('<li>').text('Vous êtes maintenant connecté au chat.'));
		});

		socket.on('serverMessage', function(text) {
			$('#messages').append($('<li>').text(text));
		});

		socket.on('userListChanged', function(newUserList) {
			for (var user in newUserList) {
				if (newUserList.hasOwnProperty(user))
					$('#messages').append($('<li>').text("-"+newUserList[user]));
			}
		});

		function sendMsg(msg) {
			$('#messages').append($('<li>').text("Moi : "+msg));
			socket.emit('newMessage', msg);
			$('#m').val('');
		}
	</script>
</body>
</html>