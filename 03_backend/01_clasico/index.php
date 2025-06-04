<?php
    require_once "modelos/DataBase.php";    
    if (!isset($_REQUEST['c'])) {
        require_once "controladores/Usuarios.php";
        $controlador = new Usuarios;
        $controlador->rolConsultar();        
    } else {        
        $controlador = $_REQUEST['c'];        
        require_once "controladores/" . $controlador . ".php";        
        $controlador = new $controlador;        
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';
        call_user_func(array($controlador, $accion));
    }
?>