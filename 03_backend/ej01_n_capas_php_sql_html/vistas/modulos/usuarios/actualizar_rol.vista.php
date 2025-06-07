<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Rol</title>
</head>

<body>
    <h1>Bienvenido <?php echo $this->sesion ?></h1>
    <h4>Módulo Usuarios</h4>
    <a href="?c=Usuarios&a=rolConsultar">Roles</a>
    <h4>Perfil</h4>
    <a href="?c=CerrarSesion">Cerrar Sesión</a>
    <form action="" method="POST">
        <h1>Actualizar Rol</h1>
        <div>
            <input type="hidden" name="rol_codigo" value="<?php echo $rolId->getRolCodigo() ?>">
        </div>
        <div>
            <label for="">Nombre Rol</label>
            <input type="text" name="rol_nombre" value="<?php echo $rolId->getRolNombre() ?>">
        </div>
        <div>
            <input type="submit" value="Actualizar">
        </div>
    </form>

</body>

</html>