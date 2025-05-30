<?php
    require_once "modelos/Usuario.php";
    class IniciarSesion {
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                require_once "vistas/empresa/iniciar_sesion.vista.php";
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                
                // Crear Objeto Uno
                $usuario1 = new Usuario;
                $usuario1->setRolCodigo(1);                
                $usuario1->setRolNombre("admin");
                $usuario1->setUsuarioCodigo(15);
                $usuario1->setUsuarioNombres("Albeiro");
                $usuario1->setUsuarioApellidos("Ramos Villamil");
                $usuario1->setUsuarioIdentificacion("1234567890");
                $usuario1->setUsuarioEmail("correo@soysena.edu.co");
                $usuario1->setUsuarioPass(sha1("12345"));
                $usuario1->setUsuarioEstado(1);

                // Crear Objeto Dos
                $usuario2 = new Usuario(
                    2,
                    "vendedor",
                    3,
                    "Pepito",
                    "Perez",
                    "9876543210",
                    "pepito@perez.com",
                    sha1("54321"),
                    0
                );
                
                // Crear Objeto Tres
                $usuario3 = new Usuario("correo@prueba.com", sha1("12345"));                
                
                // Crear Objeto Cuatro
                $usuario4 = new Usuario($_POST['usuario_email'], sha1($_POST["usuario_pass"]));                
                
                print_r($usuario1);
                echo "<br><br>";
                print_r($usuario2);
                echo "<br><br>";
                print_r($usuario3);
                echo "<br><br>";
                print_r($usuario4);
                
                
            }
        }
    }
?>