<?php

class generarPass{
    
    private $cadena;
    private $longitud;    
    private $passw;
        
    public function __construct(){
        $this->cadena =
        'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $this->passw = '';
    }

    public function nuevaPass($long){
        
        $lng_cadena = strlen($this->cadena);
        $this->longitud = $long;
        
        for($x=1;$x<=$this->longitud;$x++){
            $aleatorio = mt_rand(0,$lng_cadena-1);
            $this->passw .= substr($this->cadena,$aleatorio,1); 
        }
        return $this->passw;
    }
    
}

$nueva = new generarPass;       
echo $nueva->nuevaPass(5);


?>