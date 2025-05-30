<?php
    require_once "modelos/Usuario.php";
    class IniciarSesion {
        public function main(){
            // if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            //     require_once "vistas/empresa/iniciar_sesion.vista.php";
            // }
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                // Crear Objeto Uno
                $usuario = new Usuario;
                $usuario->setRolCodigo(1);                
                $usuario->setRolNombre("admin");
                $usuario->setUsuarioCodigo(15);
                $usuario->setUsuarioNombres("Albeiro");
                $usuario->setUsuarioApellidos("Ramos Villamil");
                $usuario->setUsuarioIdentificacion("1234567890");
                $usuario->setUsuarioEmail("correo@soysena.edu.co");
                $usuario->setUsuarioPass(sha1("12345"));
                $usuario->setUsuarioEstado(1);

                echo "<br>Código Rol:" . $usuario->getRolCodigo();
                echo "<br>Nombre Rol:" . $usuario->getRolNombre();
                echo "<br>Código Usuario:" . $usuario->getUsuarioCodigo();
                echo "<br>Nombres Usuario:" . $usuario->getUsuarioNombres();
                echo "<br>Apellidos Usuario:" . $usuario->getUsuarioApellidos();
                echo "<br>Identificacion Usuario:" . $usuario->getUsuarioIdentificacion();
                echo "<br>Email Usuario:" . $usuario->getUsuarioEmail();
                echo "<br>Pass Usuario:" . $usuario->getUsuarioPass();
                echo "<br>Estado Usuario:" . $usuario->getUsuarioEstado();
            }
        }
    }
?>