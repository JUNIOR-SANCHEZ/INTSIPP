<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class blogController extends Controller
{
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->_view->assign("titulo","Blog");
        $this->_view->renderizar("index","blog");
    }
    public function nuevo(){
        $this->_view->assign("titulo","Blog");
        $this->_view->renderizar("nuevo","blog");
        
    }
}
