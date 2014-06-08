<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Blank Page - SB Admin</title>

	<!-- Bootstrap core CSS -->
	<link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">

	<!-- Add custom CSS here -->
	<link href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/css/flipper.css')}}">
	@yield('css')
</head>

<body>

	<div id="wrapper">
		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					@yield('content')
				</div>
			</div>
		</div>
	</div>

	<!-- JavaScript -->
	<script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script>var var_url = "{{ url('/') }}";</script>
	@yield('js')
</body>
</html>