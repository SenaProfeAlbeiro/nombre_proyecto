<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Rol</title>
</head>

<body>
    <h1>Bienvenido <?php echo $this->sesion ?></h1>
    <h4>Módulo Usuarios</h4>
    <a href="?c=Usuarios&a=rolConsultar">Roles</a>
    <h4>Perfil</h4>
    <a href="?c=CerrarSesion">Cerrar Sesión</a>
    <form action="" method="POST">
        <h1>Registrar Rol</h1>
        <div>
            <label for="">Nombre Rol</label>
            <input type="text" name="rol_nombre">
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>

</html>