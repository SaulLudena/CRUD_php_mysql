 <?php
    
    $conexion = new mysqli('localhost','root','','BD_CRUD_PHP');
    //comprobamos si hay conexion
    if($conexion->connect_errno){
        die('Algo pasó');
    }
    /*
        $sql1 = "call ListarEmpleados()";
        $rs = $conexion->query($sql1);

        if($rs->num_rows){
            while($fila = $rs->fetch_assoc()){
                echo $fila['IdEmpleado'] . ' - '. 
                     $fila['NombreEmpleado']. ' - ' . 
                     $fila['ApellidoEmpleado'] . ' - ' .
                     $fila['PuestoEmpleado'] .' - '.
                     $fila['SueldoEmpleado'].'<br>';
            }
        }else{
            echo 'algo malo está pasando';
        }
        */

?>