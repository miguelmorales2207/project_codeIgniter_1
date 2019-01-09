<?php

error_reporting(1);
ini_set('display_errors', 1);
require('includes/class.conexion.php');

class Acceso {       

    protected $user1;

    public function __construct($usuario) {

        $this->user1 = $usuario;

        //dump("$usuario");
    }

    function mostrarUsers() {

        $db = new conexion();

        $sql = $db->query("SELECT id_user, apell, tel, email, foto_perfil FROM usuarios;");       

        if ($db->rows($sql) > 0) {
            echo "<div class='container-fluid'>";
            echo "<div class='row'>";
            echo "<div class='col-md-10 col-md-offset-2 main'>";
            echo "<div class='table-responsive'>";
            echo "<table class='table table-bordered'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th><center>Nombre</center></th>";
            echo "<th><center>Apellido</center></th>";
            echo "<th><center>Tel</center></th>";
            echo "<th><center>Email</center></th>";
            echo "<th><center>Foto de perfil</center></th>";
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
                echo "</tr>";
                echo "</tbody>";
            }
            echo "</table>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "<br/>";
            echo "<br/>";
        } else {
            echo "<h4> fracaso al envio de usuario...</h4>";
        }
    }

    /* function mostrarVentas() {

      $user = $_POST['user'];

      $db = new conexion();

      $sql = $db->query("SELECT placa, tipo, marca, estado, precio, id_user FROM coches WHERE id_user='$user';");

      if ($db->rows($sql) > 0) {
      echo "<p>ha sido un exito</p>";
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
      echo "<br/>";
      echo "<br/>";
      } else {
      echo "<p>ha sido un fracaso</p>";
      }
      } */
}
