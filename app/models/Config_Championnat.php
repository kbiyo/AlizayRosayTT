<?php

class Config_Championnat extends Eloquent {

	protected $table = 'config_championnats';

	public function Club() { return $this->belongsTo('Club', 'id_club'); }
	public function Championnat() { return $this->hasOne('Championnat', 'id_championat'); }

}

?>