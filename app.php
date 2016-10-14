<?php

class Teste
{

  function teste(){

    echo 'teste';
  }

  function novoTeste($teste){
    
    $letras = explode($teste);
    foreach($letras as $l){
      echo $l . '\n';
    }
  }

}




?>
