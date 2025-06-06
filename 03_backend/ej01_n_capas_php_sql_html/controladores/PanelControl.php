<?php

    class PanelControl{

        public function main(){
            $sesion = $_SESSION['session'];            
            require_once "vistas/roles/admin/admin.vista.php";            
        }
    }

?>