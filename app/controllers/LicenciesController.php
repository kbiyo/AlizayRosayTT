<?php

class LicenciesController extends BaseController {

	protected $layout = 'layout';
	
	public function home()
	{
		$this->layout->content = View::make('licencies/home');
	}

}