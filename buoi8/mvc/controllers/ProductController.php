<?php
    $dir = __DIR__; //Library/Webserver/Documents/php47/buoi8/mvc/controllers ->magic constant
    require_once $dir.'/Controller.php';
    require_once $dir.'./../models/ProductDal.php';
    class ProductController extends Controller
    {
        public function list(){
            $productDal = new ProductDal();
            $list = $productDal->getAll();
            $this->view('fe/product/list', ['list' => $list, 'title'=>'Danh sách sản phẩm']);
        }
    }
?>