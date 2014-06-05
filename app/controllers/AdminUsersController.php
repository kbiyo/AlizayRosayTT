<?php 

class AdminUsersController extends BaseController {

	protected $layout = 'admin.layout';

    public function Home() {
    	$users = User::all();
    	$this->layout->content = View::make('users.admin.home')->with('users', $users);
    }

    public function AddUser() {
    	$this->layout->content = View::make('users.admin.add');
    }

    public function EditUser($id) {
    	$user = User::find($id);

    	if($user != null) {
    		$this->layout->content = View::make('users.admin.edit')->with('user', $user);
    	}
    	else {
    		// 404
    	}
    }

    public function SearchUsers() {
    	$textSearched = Input::get('searchedText');

    	if($textSearched == '') {
			return Redirect::to('/admin/users/');
    	}

    	$users = User::where('lastname', 'like', '%'.$textSearched.'%')
    	->orWhere('firstname', 'like', '%'.$textSearched.'%')
    	->orWhere('surname', 'like', '%'.$textSearched.'%')
    	->orWhere('email', 'like', '%'.$textSearched.'%')
    	->get();
    	//var_dump($users);
    	$this->layout->content = View::make('users.admin.home')->with('users', $users)->with('textSearched', $textSearched);
    }

    public function AddUserValidation() {

	    $validator = Validator::make(
		    Input::all(),
		    User::$Rules,
		    User::$RulesMsg
		);

		if ($validator->fails())
		{
		    return Redirect::to('/admin/users/add')->withInput()->withErrors($validator);
		}
		else {
			$user = new User();
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->surname = Input::get('surname');
			$user->email = Input::get('email');

			$user->save();

			if(Input::get('groups') != null) {
				$user->Groups()->sync(Input::get('groups'));				
			}
			else {
				$user->Groups()->sync(array());
			}

			$user->save();

			Session::flash('success', 'Utilisateur <a href="'.route('AdminEditUser', $user->id ).'">#' . $user->id . '</a> créé avec succès.');
			return Redirect::to('/admin/users/');
		}
    }

    public function EditUserValidation() {
    	$Rules = User::$Rules;
    	$Rules['surname'] = 'required|min:3|unique:users,surname,'.Input::get('id');
		$Rules['email'] = 'email|required|min:10|unique:users,email,'.Input::get('id');

	    $validator = Validator::make(
		    Input::all(),
		    $Rules,
		    User::$RulesMsg
		);

		$user = User::find(Input::get('id'));

		if ($validator->fails() || $user == null) {
		    return Redirect::to('/admin/users/edit/'.Input::get('id'))->withInput()->withErrors($validator);
		}
		else {
			$user->firstname = Input::get('firstname');
			$user->lastname = Input::get('lastname');
			$user->surname = Input::get('surname');
			$user->email = Input::get('email');

			if(Input::get('groups') != null) {
				$user->Groups()->sync(Input::get('groups'));				
			}
			else {
				$user->Groups()->sync(array());
			}

			$user->save();

			Session::flash('success', 'Utilisateur <a href="'.route('AdminEditUser', $user->id ).'">#' . $user->id . '</a> édité avec succès.');
			return Redirect::to('/admin/users/');
		}
    }

}

?>