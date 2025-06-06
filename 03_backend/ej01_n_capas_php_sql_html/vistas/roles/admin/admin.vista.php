<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sesion ?></title>
</head>
<body>
    <h1>Bienvenido <?php echo $sesion ?></h1>    
    <h4>Módulo Usuarios</h4>
    <a href="?c=Usuarios&a=rolConsultar">Roles</a>
    <h4>Perfil</h4>
    <a href="?c=CerrarSesion">Cerrar Sesión</a>
</body>
</html>