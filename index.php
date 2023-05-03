<?php

echo "<h1> Hello world </h1>";

$nomPersonne = "Peymar";

// L'injection de varianble fontionne uniquement avec les " ", pas avec les ''
echo "<p>Bonjour $nomPersonne </P>";

// Les types de variables 

// Les Entiers (integer)
$nombre = 85;

// Décimaux (Float)
$nombre2 =  85.2;

// Chaines de carectere (String)
$chaine = "Ceci est un texte";

// Booléen (boolean)
$booleen = true; // false;

// Connaitre le contenu et le type d'une variable 
var_dump($nombre2)
 ?>