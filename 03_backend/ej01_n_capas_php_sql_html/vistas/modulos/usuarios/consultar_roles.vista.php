<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
</head>

<body>
    <h1>Bienvenido <?php echo $this->sesion ?></h1>
    <h4>Módulo Usuarios</h4>
    <a href="?c=Usuarios&a=rolConsultar">Roles</a>
    <h4>Perfil</h4>
    <a href="?c=CerrarSesion">Cerrar Sesión</a>
    <h1>Consular Roles</h1>
    <a href="?c=PanelControl">Volver</a>
    <br><br>
    <a href="?c=Usuarios&a=rolRegistrar">Registrar Rol</a>
    <br><br>
    <table border="1">
        <thead>
            <tr>
                <th>Código</th>
                <th>NOMBRE</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($roles as $rol) : ?>
                <tr>
                    <td><?php echo $rol->getRolCodigo(); ?></td>
                    <td><?php echo $rol->getRolNombre(); ?></td>
                    <td>
                        <a href="?c=Usuarios&a=rolActualizar&idRol=<?php echo $rol->getRolCodigo(); ?>">Actualizar</a>
                        <a href="?c=Usuarios&a=rolEliminar&idRol=<?php echo $rol->getRolCodigo(); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>

</html>