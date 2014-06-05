<?php 

class AdminRightsController extends BaseController {

	protected $layout = 'admin.layout';

    public function Home() {
    	$rights = Right::all();
    	$this->layout->content = View::make('rights.admin.home')->with('rights', $rights);
    }

    public function AddRight() {
    	$this->layout->content = View::make('rights.admin.add');
    }

    public function EditRight($id) {
    	$right = Right::find($id);

    	if($right != null) {
    		$this->layout->content = View::make('rights.admin.edit')->with('right', $right);
    	}
    	else {
    		// 404
    	}
    }

    public function SearchRights() {
    	$textSearched = Input::get('searchedText');

    	if($textSearched == '') {
			return Redirect::to('/admin/rights/');
    	}

    	$rights = Right::where('category', 'like', '%'.$textSearched.'%')
    	->orWhere('value', 'like', '%'.$textSearched.'%')
    	->orWhere('label', 'like', '%'.$textSearched.'%')
    	->get();
    	$this->layout->content = View::make('rights.admin.home')->with('rights', $rights)->with('textSearched', $textSearched);
    }

    public function AddRightValidation() {
	    $validator = Validator::make(
		    Input::all(),
		    Right::$Rules,
		    Right::$RulesMsg
		);

		if ($validator->fails())
		{
		    return Redirect::to('/admin/rights/add')->withInput()->withErrors($validator);
		}
		else {
			$right = new Right();
			$right->category = Input::get('category');
			$right->value = Input::get('value');
			$right->label = Input::get('label');

			$right->save();

			Session::flash('success', 'Droit <a href="' . route('AdminEditRight', $right->id ) . '">#' . $right->id . '</a> créé avec succès.');
			return Redirect::to('/admin/rights/');
		}
    }

    public function EditRightValidation() {
    	$Rules = Right::$Rules;
    	$Rules['value'] = 'required|min:3|unique:rights,value,'.Input::get('id');

	    $validator = Validator::make(
		    Input::all(),
		    $Rules,
		    Right::$RulesMsg
		);

		$right = Right::find(Input::get('id'));

		if ($validator->fails() || $right == null) {
		    return Redirect::to('/admin/rights/edit/'.Input::get('id'))->withInput()->withErrors($validator);
		}
		else {
			$right->category = Input::get('category');
			$right->value = Input::get('value');
			$right->label = Input::get('label');

			$right->save();

			Session::flash('success', 'Droit <a href="' . route('AdminEditRight', $right->id ) . '">#' . $right->id . '</a> édité avec succès.');
			return Redirect::to('/admin/rights/');
		}
    }

}

?>