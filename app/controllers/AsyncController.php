<?php 

class AsyncController extends BaseController {

    public function GetJsons() {
        var_dump(User::all()->toArray());
        var_dump(Right::all()->toArray());
    }
}

?>