<?php
require_once "modelos/Usuario.php";
class Usuarios{
    public function main()    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "vistas/roles/admin/admin.vista.php";
        }
    }
    
    public function rolRegistrar(){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            require_once "vistas/modulos/usuarios/registrar_rol.vista.php";
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $rol = new Usuario;
            $rol->setRolCodigo(null);
            $rol->setRolNombre($_POST['rol_nombre']);
            $rol->registrarRol();  
            header("Location: ?");         
        }
    }
        
        
        
}
