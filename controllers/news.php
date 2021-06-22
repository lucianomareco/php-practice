<?php

class News extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('news/index');
    }

    function registerStudent(){
        $enrollment = $_POST['enrollment'];
        $name = $_POST['name'];
        $lastName = $_POST['lastName'];

        $this->model->insert(['enrollment'=>$enrollment, 'name'=>$name, 'lastName'=>$lastName]);
        echo 'student created';
    }
}

?>