<?php

class Right extends Eloquent {

	protected $table = 'rights';

	public static $Rules = array(
		    	'category' => 'required|min:3',
		    	'value' => 'required|min:3|unique:rights',
		    	'label' => 'required|min:3',
		    );

	public static $RulesMsg = array(
		    'required' => 'Ce champ  est requis.',
		    'min' => 'Ce champ doit contenir :min caractères minimum.',
		    'value.unique' => 'Il existe déjà un droit avec cette valeur.',
		);

	public function Groups() { return $this->belongsToMany('Group', 'group_right', 'id_group', 'id_right'); }

}

?>