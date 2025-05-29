<?php
    class Usuario{

        /* Atributos */
        private $rolCodigo;
        private $rolNombre;        
        private $UsuarioCodigo;
        private $UsuarioNombres;
        private $UsuarioApellidos;
        private $UsuarioIdentificacion;
        private $UsuarioEmail;
        private $UsuarioPass;
        private $UsuarioEstado;
        
        /* Métodos: Sobrecarga de Constructores */
        
        /* Métodos: Setter y Getter */
        
        // $rolCodigo
        public function setRolCodigo($rolCodigo){
            $this->rolCodigo = $rolCodigo;
        }
        public function getRolCodigo(){
            return $this->rolCodigo;
        }
        // $rolNombre
        public function setRolNombre($rolNombre){
            $this->rolNombre = $rolNombre;
        }
        public function getRolNombre(){
            return $this->rolNombre;
        }
        // $usuarioEmail
        public function setUsuarioEmail($usuarioEmail){
            $this->usuarioEmail = $usuarioEmail;
        }
        public function getUsuarioEmail(){
            return $this->usuarioEmail;
        }
        // $usuarioPass
        public function setUsuarioPass($usuarioPass){
            $this->usuarioPass = $usuarioPass;
        }
        public function getUsuarioPass(){
            return $this->usuarioPass;
        }
        
        
        /* Métodos: Persistencia a la Base de Datos */

        

    }
?>