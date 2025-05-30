<?php
    class Usuario{

        /* Atributos */
        private $rolCodigo;
        private $rolNombre;        
        private $usuarioCodigo;
        private $usuarioNombres;
        private $usuarioApellidos;
        private $usuarioIdentificacion;
        private $usuarioEmail;
        private $usuarioPass;
        private $usuarioEstado;
        
        /* Métodos: Sobrecarga de Constructores */
        public function __construct(){
            try {                
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = '__construct' . $i)) {
                    call_user_func_array(array($this, $f), $a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        // Constructor: 0 parámetros
        public function __construct0(){}
        
        // Constructor: 9 parámetros
        public function __construct9($rolCodigo,$rolNombre,$usuarioCodigo,$usuarioNombres,$usuarioApellidos,$usuarioIdentificacion,$usuarioEmail,$usuarioPass,$usuarioEstado){
            $this->rolCodigo = $rolCodigo;
            $this->rolNombre = $rolNombre;
            $this->usuarioCodigo = $usuarioCodigo;
            $this->usuarioNombres = $usuarioNombres;
            $this->usuarioApellidos = $usuarioApellidos;
            $this->usuarioIdentificacion = $usuarioIdentificacion;
            $this->usuarioEmail = $usuarioEmail;
            $this->usuarioPass = $usuarioPass;
            $this->usuarioEstado = $usuarioEstado;
        }
        
        // Constructor: 2 parámetros
        public function __construct2($usuarioEmail, $usuarioPass){
            $this->usuarioEmail = $usuarioEmail;
            $this->usuarioPass = $usuarioPass;
        }

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