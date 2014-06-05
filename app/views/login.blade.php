{{ $message }}

{{ Form::open(array('action' => 'UsersController@LoginUser')) }}

{{ Form::input('text', 'username', Input::get('username', $username)) }}
{{ Form::password('password') }}
{{ Form::submit('Login') }}

{{ Form::close() }}