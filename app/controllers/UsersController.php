<?php 

class UsersController extends BaseController {

	public function LoginUser() {
		if(Auth::guest()) {
			$username = null;
			$message = null;
			if(Input::has('username') && Input::has('password')) {
				$username = Input::get('username');
				$password = Input::get('password');

				if(Auth::attempt(array('email' => $username, 'password' => $password))) {
					$user = Auth::user();
					$user->last_user_agent = Request::server('HTTP_USER_AGENT');
					$user->last_ip = Request::server('REMOTE_ADDR');
					$user->previous_connection = $user->last_connection;
					$datetime = new Datetime();
					$user->last_connection = $datetime->format('Y-m-d H:i:s');
					$user->save();

					Session::flash('message', 'Bonjour ' . $user->surname . ',');
					return Redirect::intended('/');
				}
				else {
					$message = 'Echec de l\'identification, veuillez réessayer.';
				}
			}
			Session::keep('asked_uri');
			return View::make('login')->with('message', $message)->with('username', $username);			
		}
		Session::flash('alerte', 'Vous êtes déjà connecté.');
		return Redirect::to('/');
	}

	public function LogoutUser() {
		Auth::logout();
		return Redirect::to('/');
	}

	public function MyAccount() {
		var_dump(Auth::user());
	}
}

?>