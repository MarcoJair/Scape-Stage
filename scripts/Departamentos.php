<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
    <title>Departamentos</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">DEPARTAMENTOS</h1>

    <?php
     include 'database.php';
     $conexion = new database();
     $conexion ->conectarDB();
     $consulta = "SELECT * fROM departamentos";
     $tabla = $conexion-> seleccionar($consulta);  
      

     echo "<table class='table table-hover'>
      <thead class='table-dark'>
            <tr> 
      <th>ID de departameento</th> <th>Nombre</th> <th>Fecha de creacion</th>
            </tr>
       </thead>
       <tbody>";
       foreach($tabla as $fila)
       {
           echo "<tr>";
           echo "<td>$fila->Id_depa </td>";
           echo "<td>$fila->nombre </td>";
           echo "<td>$fila->Fecha_crea </td>";
           echo "</tr>";
       }
echo "</tbody>
</table>";

$conexion->desconectarDB();

    ?>






</div>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>