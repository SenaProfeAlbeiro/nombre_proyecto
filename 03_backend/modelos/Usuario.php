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
        // $UsuarioCodigo
        public function setUsuarioCodigo($usuarioCodigo){
            $this->usuarioCodigo = $usuarioCodigo;
        }
        public function getUsuarioCodigo(){
            return $this->usuarioCodigo;
        }
        // $UsuarioNombres
        public function setUsuarioNombres($usuarioNombres){
            $this->usuarioNombres = $usuarioNombres;
        }
        public function getUsuarioNombres(){
            return $this->usuarioNombres;
        }
        // $UsuarioApellidos
        public function setUsuarioApellidos($usuarioApellidos){
            $this->usuarioApellidos = $usuarioApellidos;
        }
        public function getUsuarioApellidos(){
            return $this->usuarioApellidos;
        }
        // $UsuarioIdentificacion
        public function setUsuarioIdentificacion($usuarioIdentificacion){
            $this->usuarioIdentificacion = $usuarioIdentificacion;
        }
        public function getUsuarioIdentificacion(){
            return $this->usuarioIdentificacion;
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
        // $usuarioEstado
        public function setUsuarioEstado($usuarioEstado){
            $this->usuarioEstado = $usuarioEstado;
        }
        public function getUsuarioEstado(){
            return $this->usuarioEstado;
        }
        
        
        /* Métodos: Persistencia a la Base de Datos */

        

    }
?>