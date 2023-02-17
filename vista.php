<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MvC</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registrar</h1>
    <form action="index.php" method="POST" id="formularioInsertar" name="formularioInsertar">

        <input type="text" id="campoNombre" name="campoNombre" placeholder="Nombre">
        <input type="text" id="campoPuesto" name="campoPuesto" placeholder="Puesto">
        <input type="text" id="campoSueldo" name="campoSueldo" placeholder="Sueldo">
        <input type="submit" id="botonInsertar" name="botonInsertar" value="Insertar">
        
    </form>
    <form action="index.php" method="POST" id="formularioBuscar" name="formularioBuscar">
        <h1>Buscar</h1>
        <input type="text" id="campoBuscar" name="campoBuscar" placeholder="buscar">
        <input type="submit" id="botonBuscar" name="botonBuscar" value="Buscar">
        <br><br>
        <table border="1" width="30%"  cellspacing="0">
            <tr align="center">
                <td>Nombre</td>
                <td>Puesto</td>
                <td>Sueldo</td>
            </tr>
            <?php foreach ($result as $registros) { ?>
            <tr align="center">
                <td><?php echo $registros[1]; ?></td>
                <td><?php echo $registros[2]; ?></td>
                <td><?php echo $registros[3]; ?></td>
            </tr>
            <?php } ?>
        </table>

    </form>
</body>
</html>
</body>
</html>