<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class usuariosController extends Controller{
    
    private $_template="startBootstrap";
    public function __construct() {
        parent::__construct();
        $this->_view->setTemplate($this->_template);
    }
    public function index() {}
}