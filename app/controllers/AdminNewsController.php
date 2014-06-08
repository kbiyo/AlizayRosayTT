<?php 

class AdminNewsController extends BaseController {

	protected $layout = 'admin.layout';

    public function Home() {
    	$news = News::all();
    	$this->layout->content = View::make('news.admin.home')->with('news', $news);
    }

    public function AddNews() {
    	$this->layout->content = View::make('news.admin.add');
    }

    public function EditNews($id) {
    	$news = News::find($id);

    	if($news != null) {
    		$this->layout->content = View::make('news.admin.edit')->with('news', $news);
    	}
    	else {
    		// 404
    	}
    }

    public function AddNewsValidation() {
	    $validator = Validator::make(
		    Input::all(),
		    News::$Rules,
		    News::$RulesMsg
		);

		if ($validator->fails())
		{
			var_dump(Input::get('shortContent'));
		    return Redirect::to('/admin/news/add')->withInput()->withErrors($validator);
		}
		else {
			$news = new News();
			$news->title = Input::get('title');
			
			$published_at = Input::get('published_at');
			if($published_at != "") {
				$news->published_at = strtotime($published_at);
			}
			else {
				$news->published_at = time();
			}

			$news->shortContent = Input::get('shortContent');
			$news->content = Input::get('content');

			$news->id_author = Auth::user()->id;

			$news->save();

			Session::flash('success', 'News <a href="' . route('AdminEditNews', $news->id ) . '">#' . $news->id . '</a> créé avec succès.');
			return Redirect::to('/admin/news/');
		}
    }

    public function EditNewsValidation() {
	    $validator = Validator::make(
		    Input::all(),
		    News::$Rules,
		    News::$RulesMsg
		);

		$news = News::find(Input::get('id'));
		if ($validator->fails() || $news == null)
		{
			var_dump(Input::get('shortContent'));
		    return Redirect::to('/admin/news/edit/'.Input::get('id'))->withInput()->withErrors($validator);
		}
		else {
			$news->title = Input::get('title');
			
			$published_at = new DateTime(Input::get('published_at'));
			$news->published_at = $published_at;

			$news->shortContent = Input::get('shortContent');
			$news->content = Input::get('content');

			$news->save();

			Session::flash('success', 'News <a href="' . route('AdminEditNews', $news->id ) . '">#' . $news->id . '</a> éditée avec succès.');
			return Redirect::to('/admin/news/');
		}
    }

    public function SearchNews() {
    	$textSearched = Input::get('searchedText');

    	if($textSearched == '') {
			return Redirect::to('/admin/news/');
    	}

    	$news = News::where('title', 'like', '%'.$textSearched.'%')
    	->orWhere('shortContent', 'like', '%'.$textSearched.'%')
    	->get();
    	$this->layout->content = View::make('news.admin.home')->with('news', $news)->with('textSearched', $textSearched);
    }
}

?>