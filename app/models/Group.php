<?php

class Group extends Eloquent {

	protected $table = 'groups';

	public static $Rules = array(
		    	'title' => 'required|min:3|unique:groups',
		    	'description' => 'required|min:3',
		    );

	public static $RulesMsg = array(
		    'required' => 'Ce champ  est requis.',
		    'min' => 'Ce champ doit contenir :min caractères minimum.',
		    'description.unique' => 'Il existe déjà un groupe avec ce titre.',
		);

	public function Users() { return $this->belongsToMany('User', 'user_group', 'id_group', 'id_user'); }

	public function Rights() { return $this->belongsToMany('Right', 'group_right', 'id_group', 'id_right'); }
}

?>