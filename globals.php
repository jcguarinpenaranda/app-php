<?php

require 'BDManager.php';

error_reporting(E_ALL);

try{
  $bd = new BDManager('localhost','guarin','guarin','jcguarinpenaranda');
} catch(Exception $e){
  echo "Error al conectarse con la base de datos";
}
