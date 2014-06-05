<?php

class Championnat extends Eloquent {

	protected $table = 'championnats';

	public static $Rules = array(
		'saison' => 'required',
		'niveau' => 'required',
		'division' => 'required',
		'poule' => 'required',
		'nbEquipe' => 'required',
		'nbPhase' => 'required',
		'phaseStart' => 'required'
    );

	public static $RulesMsg = array(
		'required' => 'Ce champ est requis.'
	);

	public function Journees() { return $this->hasMany('Journee', 'id_championnat'); }
	public function Config() { return $this->belongsTo('Config_Championnat', 'id_championnat'); }

	public function Classement($nbJournees = null) {
		$equipes = $this->Config()->Equipes();
		var_dump($equipes);
	}

}

?>