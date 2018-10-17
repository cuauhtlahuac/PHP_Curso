<?php
//INCLUDE AND REQUIRE...
function suma($num1,$num2)
{
    return $num1 + $num1;
}
//"include" inclye un archivo, si no lo encuentra entonces Warning
//include 'vista.php';
//"rquire" incluye un archivo, si no lo encuentra entonces error Fatal 
require 'vista.php';
//Funcion die() mata lo que sigue
die();
require 'holaMundo.php'
?>