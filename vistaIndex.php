<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<div class="row justify-content-center">
<div class="col-auto">
    <div class="col-auto mt-5">
      <a href="vistaRegistrar.php" class="btn btn-success btn-lg">Registrar</a>
    </div>
    <table class="table table-hover mt-5">
        <thead>
            <th>Codigo de empleado</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Puesto</th>
            <th>Sueldo</th>
            <th>Acciones</th>
        </thead>
          <?php
            include "conexion.php";
            $sql1 = "call ListarEmpleados();";
            $rs = $conexion->query($sql1) or die(mysql_error($conexion));
            while($fila = $rs->fetch_assoc()){
               echo "<tr>";
                echo "<td>" . $fila['IdEmpleado']. "</td>";
                echo "<td>" . $fila['NombreEmpleado']. "</td>";
                echo "<td>". $fila['ApellidoEmpleado']. "</td>";
                echo "<td>". $fila['PuestoEmpleado']. "</td>";
                echo "<td>". $fila['SueldoEmpleado']. "</td>";
                echo "<td> <a href='vistaModificar.php?IdEmpleado=".$fila['IdEmpleado']."' class='btn btn-warning'>Editar</a>
                           <a href='eliminarFila.php?IdEmpleado=".$fila['IdEmpleado']."' class='btn btn-danger'>Eliminar</a>
                      </td>";
                
               echo "</tr>";
            }
          ?>
    </table>
    </div>
    </div>

</body>
</html>