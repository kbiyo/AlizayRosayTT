<?php

class Club extends Eloquent {

	protected $table = 'clubs';

	public static $Rules = array(
		'nom' => 'required',
		'abreviation' => 'required|max:9',
		'numero_affiliation' => 'required|unique:clubs',
		);

	public static $RulesMsg = array(
		'required' => 'Ce champ  est requis.',
		'min' => 'Ce champ doit contenir :min caractères minimum.',
		'max' => 'Ce champ doit contenir :min caractères maximum.',
		'numero_affiliation.unique' => 'Il existe déjà un club avec ce numéro d\'affiliation.',
		);

	public function Equipes() { return $this->hasMany('Equipe', 'id_club'); }

}

?>