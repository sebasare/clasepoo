<?php
include('persona.php');
//creacion de un objeto o instancia de una clase
$donaldTrump = new persona();


echo($donaldTrump->nombre);

$donaldTrump->nombre="donald";
echo"<br>";
echo($donaldTrump->nombre);
echo"<br>";
$donaldTrump->saludar();


?>