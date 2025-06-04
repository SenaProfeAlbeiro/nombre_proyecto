<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
</head>

<body>

    <h1>Consular Roles</h1>    
    <table>
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
                        <a href="?c=Users&a=rolUpdate&idRol=<?php echo $rol->getRolCodigo(); ?>">Actualizar</a>
                        <a href="?c=Users&a=rolDelete&idRol=<?php echo $rol->getRolCodigo(); ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</body>

</html>