<?php  
  session_start();
  require_once "modelos/DataBase.php";
  if (!isset($_REQUEST['c'])) {
    require_once "controladores/Empresa.php";
    $controlador = new Empresa;
    $controlador->main();
  } else {        
    $controlador = $_REQUEST['c'];
    $route_controller = "controladores/" . $controlador . ".php";
    if (file_exists($route_controller)) {
      require_once "controladores/" . $controlador . ".php";
      $controlador = new $controlador;        
      $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';    
      call_user_func(array($controlador, $accion));
    } else {
      header("Location: ?c=PanelControl");
    }
    
  }
?>