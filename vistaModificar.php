<?php
    $consulta=BuscarEmpleado($_GET['IdEmpleado']);
 
    
    function BuscarEmpleado($IdEmpleado){
        include 'conexion.php';
        $sql3="call BuscarEmpleados('".$IdEmpleado."')";
        $resultado= $conexion->query($sql3) or die('Error al consultar'.mysql_error());
        $fila=$resultado->fetch_assoc();

        return [
            $fila['IdEmpleado'],
            $fila['NombreEmpleado'],
            $fila['ApellidoEmpleado'],
            $fila['PuestoEmpleado'],
            $fila['SueldoEmpleado']
        ];
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>

    <div class="row justify-content-center">
       <div class="col-auto  mt-6">
            <h4>
                Actualizar empleado
            </h4>
        <form class=" mt-6" action="ingresarDatos.php" method="POST"> 
                    <div class="form-group mt-4" >
                        <label for="exampleInputEmail1">Codigo de empleado</label>
                        <input type="text" class="form-control" id="IdEmpleado"  placeholder="Automatico" readonly=true value="<?php echo $consulta[0] ?>">
                        <small  class="form-text text-muted">El codigo de empleado se actualiza de manera automática</small>
                    </div>
                    <div class="form-group mt-4">
                        <label for="nombre">Nombre Empleado</label>
                        <input type="text" class="form-control" id="NombreEmpleado" name="NombreEmpleado" " placeholder="Ingrese nombre" required value="<?php echo $consulta[1] ?>">
                    </div>
                    <div class="form-group mt-4">
                        <label for="apellido">Apellido Empleado</label>
                        <input type="text" class="form-control" id="ApellidoEmpleado" name="ApellidoEmpleado" placeholder="Ingrese apellido" required value="<?php echo $consulta[2] ?>">
                    </div>
                    <div class="form-group mt-4">
                        <label for="puesto">Puesto Empleado</label>
                        <input type="text" class="form-control" id="PuestoEmpleado" name="PuestoEmpleado"  placeholder="Ingrese puesto" required value="<?php echo $consulta[3] ?>">
                    </div>
                    <div class="form-group mt-4">
                        <label for="sueldo">Sueldo Empleado</label>
                        <input type="text" class="form-control" id="SueldoEmpleado" name="SueldoEmpleado" placeholder="Ingrese sueldo" required value="<?php echo $consulta[4] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary mt-4">Actualizar</button>
                    <a href="vistaIndex.php" class="btn btn-success mt-4">Regresar</a>
        </form> 
       </div>
    </div>
</body>
</html>