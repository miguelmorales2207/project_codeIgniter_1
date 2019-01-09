<?php

session_start();

if(isset($_SESSION['user'])) { 
    
    include('includes/libs/Smarty.class.php');
    $template = new Smarty();
    $template->assign(array(
        'user' => $_SESSION['user']
    ));
    $template->display('../estilos/templates/acceso.html');
    
} else {
    session_start();
    session_destroy();
    header('location: index.php?error=acceso');                 
}

/*
footer{
  background: #172041;     
  height: 70px;
  color: aliceblue;
  line-height: 70px;
  width: 100%;
  float: left;
  margin: 60px 0px 0px 0px;   
  position: absolute;
}
*/

?>