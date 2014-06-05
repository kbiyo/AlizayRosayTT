<?php

class Menu extends Eloquent {

	protected $table = 'menus';

	public function SubMenus() { return $this->hasMany('Menu', 'id_supmenu'); }

}

?>