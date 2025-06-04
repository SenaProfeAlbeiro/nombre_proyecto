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
        private $dbh;
        
        /* Métodos: Sobrecarga de Constructores */
        public function __construct(){
            try {
                $this->dbh = DataBase::connection();
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
        // Constructor: 8 parámetros
        public function __construct8($rolCodigo,$usuarioCodigo,$usuarioNombres,$usuarioApellidos,$usuarioIdentificacion,$usuarioEmail,$usuarioPass,$usuarioEstado){
            $this->rolCodigo = $rolCodigo;            
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

        # CU01 - Iniciar Sesión
        public function login(){
            try {
                $sql = 'SELECT * FROM USUARIOS
                        WHERE usuario_email = :usuarioEmail AND usuario_pass = :usuarioPass';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('usuarioEmail', $this->getUsuarioEmail());
                $stmt->bindValue('usuarioPass', sha1($this->getUsuarioPass()));
                $stmt->execute();
                $userDb = $stmt->fetch();
                if ($userDb) {
                    $user = new Usuario(
                        $userDb['rol_codigo'],                    
                        $userDb['usuario_codigo'],
                        $userDb['usuario_nombres'],
                        $userDb['usuario_apellidos'],
                        $userDb['usuario_identificador'],  
                        $userDb['usuario_email'],
                        $userDb['usuario_pass'],
                        $userDb['usuario_estado']
                    );
                    // unset($user->dbh);
                    return $user;
                } else {
                    return false;
                }
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU03 - Registrar Rol
        public function registrarRol(){
            try {
                $sql = 'INSERT INTO ROLES VALUES (:rolCodigo,:rolNombre)';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCodigo', $this->getRolCodigo());
                $stmt->bindValue('rolNombre', $this->getRolNombre());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU04 - Consultar Roles
        public function readRoles(){
            try {
                $rolList = [];
                $sql = 'SELECT * FROM ROLES';
                $stmt = $this->dbh->query($sql);
                foreach ($stmt->fetchAll() as $rol) {
                    $rolObj = new Usuario;
                    $rolObj->setRolCodigo($rol['rol_codigo']);
                    $rolObj->setRolNombre($rol['rol_nombre']);
                    array_push($rolList, $rolObj);
                }
                return $rolList;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU12 - Obtener el Rol por el código
        public function getRolById($rolCode)
        {
            try {
                $sql = "SELECT * FROM ROLES WHERE rol_code=:rolCode";
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $rolCode);
                $stmt->execute();
                $rolDb = $stmt->fetch();
                $rol = new User;
                $rol->setRolCode($rolDb['rol_code']);
                $rol->setRolName($rolDb['rol_name']);
                return $rol;
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU05 - Actualizar Rol
        public function updateRol()
        {
            try {
                $sql = 'UPDATE ROLES SET
                                rol_code = :rolCode,
                                rol_name = :rolName
                            WHERE rol_code = :rolCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $this->getRolCode());
                $stmt->bindValue('rolName', $this->getRolName());
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

        # CU06 - Eliminar Rol
        public function deleteRol($rolCode)
        {
            try {
                $sql = 'DELETE FROM ROLES WHERE rol_code = :rolCode';
                $stmt = $this->dbh->prepare($sql);
                $stmt->bindValue('rolCode', $rolCode);
                $stmt->execute();
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }

    }
?>