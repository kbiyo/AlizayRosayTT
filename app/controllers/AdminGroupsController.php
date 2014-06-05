<?php 

class AdminGroupsController extends BaseController {

	protected $layout = 'admin.layout';

    public function Home() {
    	$groups = Group::all();
    	$this->layout->content = View::make('groups.admin.home')->with('groups', $groups);
    }

    public function AddGroup() {
    	$this->layout->content = View::make('groups.admin.add');
    }

    public function EditGroup($id) {
    	$group = Group::find($id);

    	if($group != null) {
    		$this->layout->content = View::make('groups.admin.edit')->with('group', $group);
    	}
    	else {
    		// 404
    	}
    }

    public function SearchGroups() {
    	$textSearched = Input::get('searchedText');

    	if($textSearched == '') {
			return Redirect::to('/admin/groups/');
    	}

    	$groups = Group::where('title', 'like', '%'.$textSearched.'%')
    	->orWhere('description', 'like', '%'.$textSearched.'%')
    	->get();
    	$this->layout->content = View::make('groups.admin.home')->with('groups', $groups)->with('textSearched', $textSearched);
    }

    public function AddGroupValidation() {
	    $validator = Validator::make(
		    Input::all(),
		    Group::$Rules,
		    Group::$RulesMsg
		);

		if ($validator->fails())
		{
		    return Redirect::to('/admin/groups/add')->withInput()->withErrors($validator);
		}
		else {
			$group = new Group();
			$group->title = Input::get('title');
			$group->description = Input::get('description');

			$group->save();

			if(Input::get('rigths') != null) {
				$group->Rights()->sync(Input::get('rights'));				
			}
			else {
				$group->Rights()->sync(array());
			}

			if(Input::get('users') != null) {
				$group->Users()->sync(Input::get('users'));				
			}
			else {
				$group->Users()->sync(array());
			}

			$group->save();

			Session::flash('success', 'Groupe <a href="' . route('AdminEditGroup', $group->id ) . '">#' . $group->id . '</a> créé avec succès.');
			return Redirect::to('/admin/groups/');
		}
    }

    public function EditGroupValidation() {
    	$Rules = Group::$Rules;
    	$Rules['title'] = 'required|min:3|unique:groups,title,'.Input::get('id');

	    $validator = Validator::make(
		    Input::all(),
		    $Rules,
		    Group::$RulesMsg
		);

		$group = Group::find(Input::get('id'));

		if ($validator->fails() || $group == null) {
		    return Redirect::to('/admin/groups/edit/'.Input::get('id'))->withInput()->withErrors($validator);
		}
		else {
			$group->title = Input::get('title');
			$group->description = Input::get('description');

			if(Input::has('rights')) {
				$group->Rights()->sync(Input::get('rights'));				
			}
			else {
				$group->Rights()->sync(array());
			}

			if(Input::has('users')) {
				$group->Users()->sync(Input::get('users'));				
			}
			else {
				$group->Users()->sync(array());
			}

			$group->save();

			Session::flash('success', 'Groupe <a href="' . route('AdminEditGroup', $group->id ) . '">#' . $group->id . '</a> édité avec succès.');
			return Redirect::to('/admin/groups/');
		}
    }

}

?>