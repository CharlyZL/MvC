<?php

    require 'conexion_bd.php';

    class empleados extends BD_PDO {
        function Insertar($nombre,$puesto,$sueldo) {
            $this -> Ejecutar_Instruccion("Insert into tblempleados(nombre, puesto, sueldo) values('$nombre','$puesto','$sueldo')");
        }
        function Buscar($datoBuscar) {
            $result = $this -> Ejecutar_Instruccion("Select * from tblempleados where nombre like '%$datoBuscar%'");
            return $result;
        }
    }
    

?>