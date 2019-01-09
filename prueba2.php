<?php

error_reporting(1);
ini_set('display_errors', 1);
include('includes/comunes.php');
require('includes/class.conexion.php');

$user = $_POST['user'];

$db = new conexion();

$sql = $db->query("SELECT placa, tipo, marca, estado, precio, id_user FROM coches WHERE id_user='$user';");

if ($db->rows($sql) > 0) {                    
    echo "<div class='container-fluid'>";
    echo "<div class='row'>";
    echo "<div class='col-md-10 col-md-offset-2 main'>";
    echo "<div class='table-responsive'>";
    echo "<table class='table table-bordered'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th><center>Placa</center></th>";
    echo "<th><center>Tipo</center></th>";
    echo "<th><center>Marca</center></th>";
    echo "<th><center>Estado</center></th>";
    echo "<th><center>Precio</center></th>";
    echo "<th><center>Usuario</center></th>";
    echo "</tr>";
    echo "</thead>";
    while ($row = mysqli_fetch_row($sql)) {
        echo "<tbody>";
        echo "<tr>";
        echo "<td>$row[0]</td>";
        echo "<td>$row[1]</td>";
        echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
        echo "<td>$row[4]</td>";
        echo "<td>$row[5]</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
} else {
    echo "<p>Ha fallado la consulta...</p>";
}
   
