<?php
    $dir = __DIR__; //Library/Webserver/Documents/php47/buoi8/mvc/controllers ->magic constant
    require_once $dir.'/Controller.php';
    class HomeController extends Controller
    {

        // mỗi phương thức là 1 action
        public function index(){
            echo "Home Controller";
        }

        public function about(){
            $this->view('fe/about');
        }

        public function contact(){
            echo "Contact Controller";
        }
    }
?>