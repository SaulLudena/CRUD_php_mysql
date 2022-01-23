<?php

    
    Registrar($_POST['NombreEmpleado'],$_POST['ApellidoEmpleado'],$_POST['PuestoEmpleado'],$_POST['SueldoEmpleado']);
    function Registrar($nombre,$apellido,$puesto,$sueldo){
        include 'conexion.php';
            $sql2= "call InsertarEmpleado('".$nombre."','".$apellido."','".$puesto."','".$sueldo."');";
            $conexion->query($sql2) or die ("Erorr al ingresar los datos".mysql_errno($conexion));
        }

?>
    <script type="text/javascript">
        alert("Agregado corretamente")
        window.location.href='vistaIndex.php'
    </script>