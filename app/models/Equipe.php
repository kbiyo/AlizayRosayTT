<?php

class Equipe extends Eloquent {

	protected $table = 'equipes';

	public function Club() { return $this->belongsTo('Club', 'id_club'); }
	public function MatchsD() { return $this->hasMany('Match', 'id_equipe_d'); }
	public function MatchsE() { return $this->hasMany('Match', 'id_equipe_e'); }

}

?>