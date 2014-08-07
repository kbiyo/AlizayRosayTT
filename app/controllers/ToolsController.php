<?php 

class ToolsController extends BaseController {

    public function FroalaUpload() {
		// Allowed extentions.
		$allowedExts = array("gif", "jpeg", "jpg", "png");

		// Get filename.
		$temp = explode(".", $_FILES["file"]["name"]);

		// Get extension.
		$extension = end($temp);

		// An image check is being done in the editor but it is best to
		// check that again on the server side.
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& in_array($extension, $allowedExts)) { 
		    // Generate new random name.
		    $name = sha1(microtime()) . "." . $extension;
		    
		    // Save file in the uploads folder.
		    move_uploaded_file($_FILES["file"]["tmp_name"], public_path("assets/uploads/images/".$name));
		    
		    // Generate response.
		    $response = new StdClass;
		    $response->link = asset("assets/uploads/images/".$name);
		    echo stripslashes(json_encode($response));
		}
    }

    public function RedirectPermaLinks($link)
    {
    	$perma = Permalink::where('link', '=',$link)->first();

    	if($perma == null)
    		return Redirect::to('404');

    	$table = $perma->table;
    	$id = $perma->table_id;

    	$obj = $table::find($id);

    	if($obj == null)
    		return Redirect::to('404');

    	$perma->count++;
    	$perma->save();

    	return Redirect::route('ReadNews', array($obj->id, Str::slug($obj->title)));
    }

}

?>