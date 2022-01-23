<?php

    Eliminar($_GET['IdEmpleado']);
    function Eliminar($IdEmpleado){
        include 'conexion.php';
        $sql4="call EliminarEmpleado('".$IdEmpleado."');";
        $conexion->query($sql4) or die ('Error al eliminar'. mysql_error());
    }
?>
    <script type="text/javascript">
        alert("Registro eliminado")
        window.location.href='vistaIndex.php'
    </script>