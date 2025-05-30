<?php
    require_once "modelos/Usuario.php";
    class IniciarSesion {
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "vistas/empresa/iniciar_sesion.vista.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {                
                // Crear Objeto Uno
                $usuario = new Usuario;
                $usuario->setUsuarioEmail($_POST['user_email']);
                echo "Captura Email: " . $usuario->getUsuarioEmail();
                echo "<br>";
                $usuario->setUsuarioPass($_POST['user_pass']);
                echo "<br>";
                echo "Captura Password: " . $usuario->getUsuarioPass();
            }
        }
    }
?>