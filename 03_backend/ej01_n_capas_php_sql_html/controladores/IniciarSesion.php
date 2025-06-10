<?php
    require_once "modelos/Usuario.php";
    class IniciarSesion {
        public function main(){
            if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                if (empty($_SESSION['sesion'])) {
                require_once "vistas/empresa/header.vista.php";
                require_once "vistas/empresa/iniciar_sesion.vista.php";
                require_once "vistas/empresa/footer.vista.php";
            } else {
                    header("Location: ?c=PanelControl");
                }                
            }
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $profile = new Usuario(
                    $_POST['usuario_email'],
                    $_POST['usuario_pass']
                );
                $profile = $profile->login();                
                if ($profile) {
                    $activo = $profile->getUsuarioEstado();
                    if ($activo != 0) {
                        $sesion = $profile->getRolCodigo();
                        if ($sesion == 1) {
                            $_SESSION['sesion'] = 'admin';                            
                        } elseif ($sesion == 2) {
                            $_SESSION['sesion'] = 'customer';                            
                        } elseif ($sesion == 3) {
                            $_SESSION['sesion'] = 'seller';
                        }
                        $profile = serialize($profile);
                        $_SESSION['profile'] = $profile; 
                        header("Location:?c=PanelControl");                    
                    } else {
                        require_once "vistas/empresa/iniciar_sesion.vista.php";
                        echo "EL USUARIO NO ESTÁ ACTIVO";
                    }                    
                } else {
                    require_once "vistas/empresa/iniciar_sesion.vista.php";
                    echo "EL USUARIO NO EXISTE";                    
                }
            }
        }
    }
?>