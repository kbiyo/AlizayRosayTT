<?php 

class NewsController extends BaseController {

	protected $layout = 'layout';

    public function ShowNews($id, $title) {
    	$news = News::find($id);

    	if(Str::slug($news->title) == $title) {
    		$this->layout->content = View::make('news/read')->with('news', $news);
    	}
    	else echo 'pascoucou';
    }

    public function Home() {
    	$news = News::all();

    	$newsjh = News::orderBy('published_at', 'desc')->paginate(10);
    	
    	$this->layout->content = View::make('news/home')->with('listNews', $newsjh);
    }

}

?>