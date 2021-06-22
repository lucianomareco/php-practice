<?php

class News extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('news/index');
    }

    function registerStudent(){
        echo 'student created';
        $this->model->insert();
    }
}

?>