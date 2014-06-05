<?php

class Match extends Eloquent {

	protected $table = 'matchs';

	public function Journee() { return $this->belongsTo('Journee', 'id_journee'); }
	public function EquipeD() { return $this->belongsTo('Config_Championnat', 'id_equipe_d'); }
	public function EquipeE() { return $this->belongsTo('Config_Championnat', 'id_equipe_e'); }

}

?>