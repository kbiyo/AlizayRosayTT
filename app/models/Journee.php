<?php

class Journee extends Eloquent {

	protected $table = 'journees';

	public function Matchs() { return $this->hasMany('Match', 'id_journee'); }
	public function Championnat() { return $this->belongsTo('Championnat', 'id_championnat'); }

}

?>