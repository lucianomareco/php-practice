<? 
    class Error extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->message = "Request error or non-existent page.";
            $this->view->render('error/index');
        }
    }

?>