<?php
require_once "modelos/Usuario.php";
class Usuarios{
    
    private $sesion;
    public function __construct(){
        $this->sesion = $_SESSION['sesion'];
    }
    
    public function main(){        
        if (!empty($_SESSION['sesion'])) {
            header("Location: ?c=PanelControl");
        } else {
            header("Location: ?");
        }
    }
    
    public function rolRegistrar(){        
        if ($this->sesion == 'admin') {            
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "vistas/modulos/usuarios/registrar_rol.vista.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $rol = new Usuario;
                $rol->setRolCodigo(null);
                $rol->setRolNombre($_POST['rol_nombre']);
                $rol->registrarRol();
                header("Location: ?c=Usuarios&a=rolConsultar");
            }
        } else {
            header("Location: ?c=PanelControl");
        }        
    }
    
    public function rolConsultar(){
        if ($this->sesion == 'admin') {
            $roles = new Usuario;
            $roles = $roles->readRoles();
            require_once "vistas/modulos/usuarios/consultar_roles.vista.php";
        } else {
            header("Location: ?c=PanelControl");
        }
    }
    
    public function rolActualizar() {
        if ($this->sesion == 'admin' && !empty($_GET["idRol"])) {
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                $rolId = new Usuario;
                $rolId = $rolId->getRolById($_GET["idRol"]);
                require_once "vistas/modulos/usuarios/actualizar_rol.vista.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {            
                    $rolAct = new Usuario;
                    $rolAct->setRolCodigo($_POST['rol_codigo']);
                    $rolAct->setRolNombre($_POST['rol_nombre']);
                    $rolAct->actualizarRol();
                    header("Location: ?c=Usuarios&a=rolConsultar");
            }        
        } else {
            header("Location: ?c=PanelControl");
        }
    }

    public function rolEliminar() {
        if ($this->sesion == 'admin') {
            $rol = new Usuario;
            $rol->eliminarRol($_GET['idRol']);
            header("Location: ?c=Usuarios&a=rolConsultar");
        } else {
            header("Location: ?c=PanelControl");
        }
    }
}
