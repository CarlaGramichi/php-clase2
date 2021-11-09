<?php

include 'Gato.php';

$nuevoGato = new Gato('Brucercito', 'negrito', 5, 5.5);

$nuevoGato->setNombre('Gorditoooo');

echo  $nuevoGato->getNombre(), $nuevoGato->getColor(),$nuevoGato->getEdad(),$nuevoGato->getPeso();




