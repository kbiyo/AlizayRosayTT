<?php

class HomeController extends BaseController {

	protected $layout = 'layout';

	public function home()
	{
		$news = News::orderBy('published_at', 'desc')->get();

		//$this->layout->title = 'HomeController@Home';
		$this->layout->content = View::make('home/home')
		->with('news', $news);
	}

}