<?php
//arrays asociativo
$mapa1 =array(
    "Brandon" => 10,
    "Nombre" => "Diana",
     123 => "Robert",
     "clave3" => "valor" //las comas(,,,)son opcionales cuando es el último elemento
    

);

//arrays corchetes 
$mapa2 =
[
    "clave"  => "valor",
    "clave"  => "valor",
    "clave3" => "valor",
    123      => true
    
];

//arrays no asociativo
$mapa3 = ["valor1", "valor2", "valor3"];
$mapa4 = array(
    "valor1",
    "valor2",
    "valor3"
);

var_dump($mapa3);
echo"<br>";
echo $mapa3[2];
echo"<br>";
echo $mapa2["clave"];
echo"<br>";
echo $mapa1["Brandon"];
echo"<br>";
echo $mapa1["Nombre"];
echo"<br>";
echo $mapa2[123];
echo"<br>";
echo $mapa1[123];