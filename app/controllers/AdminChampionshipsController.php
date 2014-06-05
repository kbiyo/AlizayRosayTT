<?php 

class AdminChampionshipsController extends BaseController {

	protected $layout = 'admin.layout';

    public function Home() {
    	$championnats = Championnat::all();
    	$this->layout->content = View::make('championships.admin.home')->with('championships', $championnats);
    }

    public function AddChampionship() {
    	$this->layout->content = View::make('championships.admin.add');
    }

    public function EditChampionship($id) {
    	$championship = Championnat::find($id);

    	if($championship != null) {
    		$this->layout->content = View::make('championships.admin.edit')->with('championship', $championship);
    	}
    	else {
    		// 404
    	}
    }

    public function AddChampionshipValidation() {
	    $validator = Validator::make(
		    Input::all(),
		    Championnat::$Rules,
		    Championnat::$RulesMsg
		);

		if ($validator->fails())
		{
		    return Redirect::to('/admin/championships/add')->withInput()->withErrors($validator);
		}
		else {
			$championnat = new Championnat();

			$championnat->saison = Input::get('saison');
			$championnat->niveau = Input::get('niveau');
			$championnat->division = Input::get('division');
			$championnat->poule = Input::get('poule');
			$championnat->nbEquipe = Input::get('nbEquipe');
			$championnat->nbPhase = Input::get('nbPhase');
			$championnat->phaseStart = Input::get('phaseStart');

			$championnat->save();

			Session::flash('success', 'Championnat <a href="' . route('AdminEditChampionship', $championnat->id ) . '">#' . $championnat->id . '</a> créé avec succès.');
			return Redirect::to('/admin/championships/');
		}
    }

    public function EditChampionshipValidation() {
	    $validator = Validator::make(
		    Input::all(),
		    Championnat::$Rules,
		    Championnat::$RulesMsg
		);

		$championnat = Championnat::find(Input::get('id'));

		if ($validator->fails() || $championnat == null) {
		    return Redirect::to('/admin/championships/edit/'.Input::get('id'))->withInput()->withErrors($validator);
		}
		else {
			$championnat->saison = Input::get('saison');
			$championnat->niveau = Input::get('niveau');
			$championnat->division = Input::get('division');
			$championnat->poule = Input::get('poule');
			$championnat->nbEquipe = Input::get('nbEquipe');
			$championnat->nbPhase = Input::get('nbPhase');
			$championnat->phaseStart = Input::get('phaseStart');

			$championnat->save();

			Session::flash('success', 'Championnat <a href="' . route('AdminEditChampionship', $championnat->id ) . '">#' . $championnat->id . '</a> édité avec succès.');
			return Redirect::to('/admin/championships/');
		}
    }

    public function AssociateTeams($id)
    {
    	$championship = Championnat::find($id);
    	$clubs = Club::all();

    	if($championship != null) {
    		//$jsonStr = file_get_contents("http://localhost/DCX/champ-".$championship->nbEquipe."-AR.json");
    		//$previsionMatch = json_decode($jsonStr, true);

    		$this->layout->content = View::make('championships.admin.AssociateTeams')
	    		->with('championship', $championship)
	    		->with('clubs', $clubs)
	    		//->with('previsionMatchs', $previsionMatch)
    		;
    	}
    	else {
    		// 404
    	}
    }

}

?>