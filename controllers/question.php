<?php

class Question extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->render('question/index');
    }
}

?>