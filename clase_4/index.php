<?php
//Cuales hay?
//for -> cuando conozco el nro de iteraciones
//i=10
//while -> while(i <10) {  } No conozco el numero de iteraciones
//foreach($arrays as $array) PHP
//do{..................} while(i<10)


//FOR

$total = 5987;
$perPage = 100;
$loopTotal = ceil(5987 / 100);


//for($i=1; $i<= $loopTotal;$i++){
//    echo 'Page: '.$i ."\n";
//}

$productos = [
    uniqid() => [
        'name' => 'chocolate',
        'description' => 'negro y amargo',
        'stock' => 2,
        'price' => '100',
        'img' => 'photos/perfil4.jpg'
    ],
    uniqid() => [
        'name' => 'tortitas black',
        'description' => 'las mejores gallestas del mundo',
        'stock' => 1,
        'price' => '150',
        'img' => 'photos/perfil1.jpg'
    ],
];

$string = "lorem ipsum";

//Mostrar el tamaño del array. KISS (keep it simple, stupid)

//echo sizeof($productos);
//
//echo strlen($string);

//Recorrer el array y mostrar por pantalla, unicamente los ids (uniqid()) KISS

//foreach ($productos as $key => $producto){
////    $productoID = $producto[uniqid()];
//    echo 'ID:' .$key ."\n";
//}

//echo implode("<br>", (array_keys($productos)));

//var_dump(explode('/', $string));