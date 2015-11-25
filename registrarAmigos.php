<?php

include 'globals.php';


if(!isset($_POST['nombre'])
  || !isset($_POST['direccion'])
  || !isset($_POST['telefono'])
  || !isset($_POST['email'])){
  return;
}

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

$bool = false;

try{
  $bool = $bd->insert("insert into amigos (nombre,direccion,telefono,email) values ('$nombre', '$direccion', $telefono, '$email');");

  if($bool){
    header("Location: registroAmigos.php?exito");
  }else{
    header("Location: registroAmigos.php?error");
  }


}catch(Exception $e){
  var_dump($e);
}
