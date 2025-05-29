<?php
    class IniciarSesion {
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "vistas/empresa/iniciar_sesion.vista.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $user_email = $_POST['user_email'];
                $user_pass = $_POST['user_pass'];
                echo "<br>Captura Email POST: " . $user_email;                
                echo "<br>Captura Constraseña POST: " . $user_pass;                
            }
        }
    }
?>