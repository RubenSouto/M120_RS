<?php

class Controller
{
    public function view($view, $data = [])
    {
        //Load header
        require_once('../app/views/_style/header.php');

        //Load body
        require_once('../app/views/'.$view.'.php');

        //Load footer
        require_once('../app/views/_style/footer.php');
    }

    public function model($model)
    {
        require_once('../app/models/'.$model.'.php');
        return new $model();
    }
}

?>