<?php 

class AdminClubsController extends BaseController {

	protected $layout = 'admin.layout';

    public function Home() {
    	$clubs = Club::all();
    	$this->layout->content = View::make('clubs.admin.home')->with('clubs', $clubs);
    }

    public function AddClub() {
    	$this->layout->content = View::make('clubs.admin.add');
    }

    public function EditClub($id) {
    	$club = Club::find($id);

    	if($club != null) {
    		$this->layout->content = View::make('clubs.admin.edit')->with('club', $club);
    	}
    	else {
    		// 404
    	}
    }

    public function SearchClubs() {
    	$textSearched = Input::get('searchedText');

    	if($textSearched == '') {
			return Redirect::to('/admin/clubs/');
    	}

    	$clubs = Club::where('nom', 'like', '%'.$textSearched.'%')
    	->orWhere('abreviation', 'like', '%'.$textSearched.'%')
    	->orWhere('numero_affiliation', 'like', '%'.$textSearched.'%')
    	->get();
    	$this->layout->content = View::make('clubs.admin.home')->with('clubs', $clubs)->with('textSearched', $textSearched);
    }

    public function AddClubValidation() {
	    $validator = Validator::make(
		    Input::all(),
		    Club::$Rules,
		    Club::$RulesMsg
		);

		if ($validator->fails())
		{
		    return Redirect::to('/admin/clubs/add')->withInput()->withErrors($validator);
		}
		else {
			$club = new Club();
			$club->nom = Input::get('nom');
			$club->abreviation = Input::get('abreviation');
			$club->numero_affiliation = Input::get('numero_affiliation');

			$club->save();

			Session::flash('success', 'Club <a href="' . route('AdminEditClub', $club->id ) . '">#' . $club->id . '</a> créé avec succès.');
			return Redirect::to('/admin/clubs/');
		}
    }

    public function EditClubValidation() {
    	$Rules = Club::$Rules;
    	$Rules['numero_affiliation'] = 'required|min:3|unique:clubs,numero_affiliation,'.Input::get('numero_affiliation');

	    $validator = Validator::make(
		    Input::all(),
		    $Rules,
		    Club::$RulesMsg
		);

		$club = Club::find(Input::get('id'));

		if ($validator->fails() || $club == null) {
		    return Redirect::to('/admin/clubs/edit/'.Input::get('id'))->withInput()->withErrors($validator);
		}
		else {
			$club->nom = Input::get('nom');
			$club->abreviation = Input::get('abreviation');
			$club->numero_affiliation = Input::get('numero_affiliation');

			$club->save();

			Session::flash('success', 'Club <a href="' . route('AdminEditClub', $club->id ) . '">#' . $club->id . '</a> édité avec succès.');
			return Redirect::to('/admin/clubs/');
		}
    }

}

?>