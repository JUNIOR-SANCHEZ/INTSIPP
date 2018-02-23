<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class pruebasController extends Controller {

    private $_exel;

    public function __construct() {
        parent::__construct();
        $this->getLibreria("PHPExcel/IOFactory");
    }

    public function index() {
        $nombreArchivo = ROOT . 'public' . DS . 'xlsx' . DS . 'ejemplo.xlsx';

        $this->_exel = PHPEXCEL_IOFactory::load($nombreArchivo);

        $this->_exel->setActiveSheetIndex(0);

        $numRows = $this->_exel->setActiveSheetIndex(0)->getHighestRow();

        echo '<table border=1><tr><td>Producto</td><td>Precio</td><td>Existencia</td></tr>';

        for ($i = 2; $i <= $numRows; $i++) {

            $nombre = $this->_exel->getActiveSheet()->getCell('A' . $i)->getCalculatedValue();
            $precio = $this->_exel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
            $existencia = $this->_exel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();

            echo '<tr>';
            echo '<td>' . $nombre . '</td>';
            echo '<td>' . $precio . '</td>';
            echo '<td>' . $existencia . '</td>';
            echo '</tr>';
        }
    }

}
