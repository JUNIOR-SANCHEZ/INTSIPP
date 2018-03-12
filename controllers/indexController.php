<?php

class indexController extends Controller {


    public function __construct() {
        parent::__construct();
    }

    public function index() {
        
//        print_r($this->_view->getLayoutPosition());
        $this->_view->assign("titulo","INTSIPP");
        
        $this->_view->renderizar('index',"inicio");
    }

}
