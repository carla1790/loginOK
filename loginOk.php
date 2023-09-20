<?php

$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario = "Juani1989";
$ckpass = 12345;


if ($usuario==$ckusuario && $contrasenia==$ckpass) {

   echo "Bienvenido!";

 } else {
   
   header ("location:https://www.omelet.com/error/");
}

?>