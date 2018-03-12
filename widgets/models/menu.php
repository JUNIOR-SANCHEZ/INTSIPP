<?php

class menuModelWidget extends Model{
    public function __construct() {
        parent::__construct();
    }
    public function getmenu($menu){
       $menus["sidebar"]= array(
            array(
                "id"=>"usuarios",
                "titulo"=>"Usuarios",
                "enlace"=>BASE_URL."Usuarios"
            ),
            array(
                "id"=>"acl",
                "titulo"=>"Lista de control de acceso",
                "enlace"=>BASE_URL."acl"
            ),
            array(
                "id"=>"pruebas",
                "titulo"=>"Pruebas",
                "enlace"=>BASE_URL."pruebas"
            ),
           array(
            'id' => 'tarjetas',
            'titulo' => 'crear tarjetas',
            'enlace' => BASE_URL . 'tarjetas'
        )
            
        );
       
       
       $menus["top"]=array(
           array(
                'id' => 'home',
                'titulo' => 'home',
                'enlace' => BASE_URL
            ),
            array(
                'id' => 'galeria',
                'titulo' => 'galeria',
                'enlace' => BASE_URL
            ),
            array(
                'id' => 'blog',
                'titulo' => 'blog',
                'enlace' => BASE_URL . "blog"
            ),
            array(
                'id' => 'contactos',
                'titulo' => 'contactos',
                'enlace' => BASE_URL
            )
           
       );
       
        if (Session::get('autenticado')) {
            $menus["top"][] = array(
                'id' => 'login',
                'titulo' => 'Cerrar Session',
                'enlace' => BASE_URL . 'usuarios/login/cerrar'
            );
        } else {
            $menus["top"][] = array(
                'id' => 'login',
                'titulo' => 'Iniciar Session',
                'enlace' => BASE_URL . 'usuarios/login'
            );
            $menus["top"][] = array(
                'id' => 'registro',
                'titulo' => 'registrarse',
                'enlace' => BASE_URL . 'usuarios/registro'
            );
        }
        
        return $menus[$menu];
    }
}
