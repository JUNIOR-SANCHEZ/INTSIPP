<?php

class tarjetasController extends Controller {

    private $_pdf;

    public function __construct() {
        parent::__construct();
        $this->getLibreria("fpdf");
        $this->getLibreria("PHPExcel/IOFactory");
    }

    public function index() {
        $this->_view->assign("titulo", "Tarjetas");
        $this->_view->setJs(array("addElements", "global"));

        if ($this->getInt("enviar") == 1) {
            $this->_view->assign("datos", $_POST);
            if (!$this->getInt("ancho") && !$this->getInt("alto")) {
                if (!$this->getText("formato")) {
                    $this->_view->assign("_error", "Escoja un formato");
                    $this->_view->renderizar("index", "tarjeta");
                    exit;
                }
            }

            if (!$this->getFile("source")) {
                $this->_view->assign("_error", "Escoja un archivo .txt");
                $this->_view->renderizar("index", "tarjeta");
                exit;
            }

            if (!$this->getFile("bg")) {
                $this->_view->assign("_error", "Escoja un archivo .jpg");
                $this->_view->renderizar("index", "tarjeta");
                exit;
            }

            if (!$this->getText("destino")) {
                $this->_view->assign("_error", "Ingrese La ruta");
                $this->_view->renderizar("index", "tarjeta");
                exit;
            }

            if (!$this->getText("fontFamily")) {
                $this->_view->assign("_error", "Escoja una fuente");
                $this->_view->renderizar("index", "tarjeta");
                exit;
            }

            if (!$this->getInt("fontSize")) {
                $this->_view->assign("_error", "Escoja el tamano de la fuente");
                $this->_view->renderizar("index", "tarjeta");
                exit;
            }
            if (!$this->getInt("posx")) {
                $this->_view->assign("_error", "Ingrese La posision en  X");
                $this->_view->renderizar("index", "tarjeta");
                exit;
            }
            if (!$this->getInt("posx")) {
                $this->_view->assign("_error", "Ingrese La posision en  Y");
                $this->_view->renderizar("index", "tarjeta");
                exit;
            }
            $folder = $this->getAlphaNum("destino") . "/";
            $source = $this->_processFile($_FILES['source']);
            $bg = $this->_processFile($_FILES['bg']);
            $dir = CERTIFICADO_RESULT . $folder . '';
            $formato = array($this->getInt("ancho"),$this->getInt("alto"));
            $archivos = array();

            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }

            $arr = $this->_getNombres($source);
            
            $cont = 0;

            $pos = array(
                'x' => $this->getInt("posx") ? $this->getInt("posx") : 40,
                'y' => $this->getInt("posy") ? $this->getInt("posy") - 10 : 40
            );

            switch ($_POST['textAlign']) {
                case 'C':
                    $pos['x'] = $pos['x'] - 20;
                    break;
                case 'R':
                    $pos['x'] = $pos['x'] - 40;
                    break;
            }

            foreach ($arr as $file) {

                $file = trim($file);
                if ($file == '')
                    continue;

                $filename = str_replace(array('.', ','), '', $file);
                $filename = strtolower($file);

                if ($_POST['unArchivo'] == 0 || $cont == 0) {

                    $this->_pdf = new FPDF("L", "mm", $formato);
                }
                $this->_pdf->AddPage();
                $this->_pdf->SetMargins(0, 0, 0);
                $this->_pdf->Image($bg, 0, 0, $_POST['ancho'], $_POST['alto']);
                $this->_pdf->SetFont($_POST['fontFamily'], 'B', $_POST['fontSize']);
                $this->_pdf->SetXY($pos['x'], $pos['y']);
                $this->_pdf->Cell(40, 10, $file, 0, 0, $_POST['textAlign']);

                if ($this->getInt("unArchivo") == 0) {
                    $filename = $dir . $filename . ".pdf";
                    $this->_pdf->Output($filename, "F");
                    $archivos[] = $filename;
                }
                $cont++;
            }

            if ($this->getInt("unArchivo") == 1) {
                $this->_pdf->Output($dir . "/certificados.pdf", "F");
                $archivos[] = $dir . "/certificados.pdf";
            }
            unlink(CERTIFICADOS_TEMP . $_FILES['source']['name']);
            unlink(CERTIFICADOS_TEMP . $_FILES['bg']['name']);
            
            $this->_view->assign("datos",array());
            $this->_view->assign("_mensaje","Certificado creado correctamente");
            $this->_view->renderizar("index", "tarjetas");
            exit();
        }
        $this->_view->renderizar("index", "tarjetas");
    }

    private function _getNombres($file) {

        $arr = array();
        $this->_exel = PHPEXCEL_IOFactory::load($file);

        $this->_exel->setActiveSheetIndex(0);

        $numRows = $this->_exel->setActiveSheetIndex(0)->getHighestRow();
         for ($i = 2; $i <= $numRows; $i++) {

            $arr[] = $this->_exel->getActiveSheet()->getCell('A' . $i)->getCalculatedValue();
//            $precio = $this->_exel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
//            $existencia = $this->_exel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
         }
        return $arr;
    }

    private function _processFile($myFile) {

        if (!empty($myFile)) {

            if ($myFile["error"] !== UPLOAD_ERR_OK) {
                echo "<p>An error occurred.</p>";
                exit;
            }

            // ensure a safe filename
            $name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
            
            // don't overwrite an existing file
            $i = 0;
            $parts = pathinfo($name);
            //valida si el archivo exite si exite cambia el nombre del archivo para guardarlo
            while (file_exists(CERTIFICADOS_TEMP . $name)) {
                $i++;
                $name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
            }

            $carpeta = CERTIFICADOS_TEMP;
            if (!file_exists($carpeta)) {
                mkdir($carpeta, 0777, true);
            }

            // preserve file from temporary directory
            $success = move_uploaded_file($myFile["tmp_name"], CERTIFICADOS_TEMP . $name);
            if (!$success) {
                echo "<p>Unable to save file.</p>";
                exit;
            }

            // set proper permissions on the new file
            //chmod(UPLOAD_DIR . $name, 0644);
            return CERTIFICADOS_TEMP . $name;
        }
    }

    function _create_zip($files = array(), $destination = '', $overwrite = false) {

        if (file_exists($destination) && !$overwrite) {
            return false;
        }

        $valid_files = array();
        if (is_array($files)) {
            foreach ($files as $file) {
                if (file_exists($file)) {
                    $valid_files[] = $file;
                }
            }
        }
        //if we have good files...
        if (count($valid_files)) {
            $zip = new ZipArchive();
            if ($zip->open($destination, $overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
                return false;
            }
            foreach ($valid_files as $file) {
                $zip->addFile($file, ($file));
            }
            //debug
            //echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;

            $zip->close();

            return file_exists($destination);
        } else {
            return false;
        }
    }

}
