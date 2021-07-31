<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">    
    <title>Clientes</title>
</head>
<body>
    <div class="container">
    <h1 class="text-center">CLIENTES</h1>

    <?php
     include 'database.php';
     $conexion = new database();
     $conexion ->conectarDB();
     $consulta = "SELECT * fROM cliientes";
     $tabla = $conexion-> seleccionar($consulta);  
      

     echo "<table class='table table-hover'>
      <thead class='table-dark'>
            <tr> 
      <th>ID de cliente</th> <th>Nombre</th>  <th>Paterno</th> <th>Materno</th>
      <th>Direccion</th> <th>Telefono</th>  <th>Correo</th> <th>ID Departamento</th> 
            </tr>
       </thead>
       <tbody>";
       foreach($tabla as $fila)
       {
           echo "<tr>";
           echo "<td>$fila->Id_clientes </td>";
           echo "<td>$fila->nombre </td>";
           echo "<td>$fila->ap_paterno </td>";
           echo "<td>$fila->ap_materno </td>";
           echo "<td>$fila->direccion</td>";
           echo "<td>$fila->telefono</td>";
           echo "<td>$fila->mail</td>";
           echo "<td>$fila->departamento</td>";
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