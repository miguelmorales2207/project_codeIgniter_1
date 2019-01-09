<?php

class enAcceso {

    protected $user;    //1
    protected $apell;   //2
    protected $ced;     //3
    protected $email;   //4
    protected $tel;     //5
    protected $pass;    //6
    protected $placa;    //7
    protected $tipo;     //8
    protected $marca;    //9
    protected $modelo;   //10
    protected $ano;      //11
    protected $estado;   //12
    protected $precio;    //13

    //protected $dato;    //14            

    public function __construct($usuario, $apellido, $cedula, $email, $telefono, $password, $placa, $tipo, $marca, $modelo, $ano, $estado, $precio) {

        $this->user = $usuario;
        $this->apell = $apellido;
        $this->ced = $cedula;
        $this->email = $email;
        $this->tel = $telefono;
        $this->pass = $password;
        //dump("$dato");

        $this->placa = $placa;
        $this->tipo = $tipo;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->estado = $estado;
        $this->precio = $precio;
        //$this->dato = $dato
    }

    //////////////////////////////////////////////////////////////////////////
    public function editP() {

        $db = new conexion();

        $user = $this->user;
        $apell = $this->apell;
        $ced = $this->ced;
        $email = $this->email;
        $tel = $this->tel;
        $pass = $this->pass;

        //dumpx("SELECT nombre FROM usuarios WHERE email='$this->email';");        //sirve para ver que variables se estan manejando.
        $sql = $db->query("SELECT email FROM usuarios WHERE email='$this->email';");

        if ($db->rows($sql) > 0) {
            //dumpx("UPDATE usuarios SET apell='$apell', ced='$ced', tel='$tel', password='$pass' WHERE email='$this->email';");
            $db->query("UPDATE usuarios SET id_user='$user', apell='$apell', ced='$ced', tel='$tel', password='$pass' WHERE email='$this->email';");
            header('location: index.php?modo=edit&succes=ok');
        } else {
            header('location: index.php?error=files_incorrectos');
        }
    }

    //////////////////////////////////////////////////////////////////////////
    public function vender() {

        $db = new conexion();

        $placa = $this->placa;
        $tipo = $this->tipo;
        $marca = $this->marca;
        $modelo = $this->modelo;
        $ano = $this->ano;
        $estado = $this->estado;
        $precio = $this->precio;
        $user = $this->user;

        //dumpx("SELECT placa FROM coches WHERE placa='$this->placa';");
        $sql = $db->query("SELECT placa FROM coches WHERE placa='$this->placa';");
        $existe = $db->recorrer($sql);

        if ($db->rows($sql) == 0) {
            //dumpx("INSERT INTO coches (placa) VALUES ('$placa');");
            $db->query("INSERT INTO coches (placa,tipo,marca,modelo,año,estado,precio,id_user)"
                    . " VALUES ('$placa','$tipo','$marca','$modelo','$ano','$estado','$precio','$user');");
            header('location: index.php?modo=vender&succes=ok');
        } else if (strtolower($existe['placa']) == strtolower($this->placa)) {
            header('location: index.php?modo=vender&error=placa_usada');
        }
    }

    ///////////////////////////////////////////////////////////////////////////////
    /* public function mostrarVentas(){ 

      $db = new conexion();

      $user = $this->user;

      $sql = $db->query("SELECT placa, tipo, marca, estado, precio FROM coches id_user='$this->user';");

      if($db->rows($sql) > 0){
      //dumpx("SELECT placa, tipo, marca, estado, precio FROM coches id_user='$this->user';");
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
      echo "<th><center>precio</center></th>";
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
      header('location: index.php?modo=mostrarV&succes=ok');
      } else {
      header('location: index.php?error=d_i');
      }
      } */
}
