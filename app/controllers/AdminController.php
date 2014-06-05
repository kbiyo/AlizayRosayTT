<?php 

class AdminController extends BaseController {
	
	/**
     * The layout that should be used for responses.
     */
    protected $layout = 'admin.layout';


    public function Home() {
    	$data['count']['users'] = User::count();
    	$data['count']['groups'] = Group::count();
    	$data['count']['rights'] = Right::count();
        $data['count']['news'] = News::count();
        $data['count']['comments'] = Comment::count();
    	$data['count']['clubs'] = Club::count();
    	$data['count']['equipes'] = Equipe::count();
    	$data['count']['championnats'] = Championnat::count();
    	$data['count']['menus'] = Menu::count();

    	$this->layout->content = View::make('admin.dashboard')->with('data', $data);
    }
}

?>