<?php

    $buscar = @$_POST["campoBuscar"];
    $nombre = @$_POST["campoNombre"];
    $puesto = @$_POST["campoPuesto"];
    $sueldo = @$_POST["campoSueldo"];

    require 'modelo.php';

    $obj_empleados = new empleados();

    if (isset($_POST['botonInsertar'])) {
        $obj_empleados -> Insertar($nombre,$puesto,$sueldo);
        header("location: index.php");
    }
    $result = $obj_empleados -> Buscar($buscar);

    require 'vista.php'
?>