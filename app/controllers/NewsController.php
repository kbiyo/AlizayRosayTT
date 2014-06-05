<?php 

class NewsController extends BaseController {

    public function ShowNews($id, $title) {
    	return 'ID = '.$id.'; TITLE = '.$title.'; STR = '.Str::slug('Un title complétement aléatoire!', '-').';';
    }

    public function AddNews() {

    }

    public function EditNews($id) {
    	return 'LA';
    }

}

?>