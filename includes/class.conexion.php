<?php
 
class conexion extends mysqli {
 
    public function __construct() {
        parent::__construct('localhost','root','','appWeb');
        $this->query("SET NAMES 'utf8';");
        $this->connect_errno ? die('error con la conexion') : 
        $x = 'conectado';
        //echo $x;
        unset($x);
    }
    
    public function recorrer($y){
        return mysqli_fetch_array($y);
    }
    
    public function rows($y){
        return mysqli_num_rows($y); 
    }
}

?>