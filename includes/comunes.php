<?php

include('libs/Smarty.class.php');

function dump($dato) {
  echo '<pre>'; 
  print_r($dato);                          
  echo '</pre>';
}

function dumpx($dato){
  dump($dato);
  exit;
}
                             
?>