<?php
   echo "<pre>";

   // Déclarer un tableau

   $tableau = ["Salam",15,true,51.26,"Télephone",45,false];


/****************** Ajouter des valeurs "Lessons"   *****************/


/**************** a la fin (push) **************/ 

//array_push($tableau, "Psg",22);

$tableau[] = "Paris-Sg";

/************** Au debut (unshift) ***************/

array_unshift($tableau, "Début");

/**************** supprimer des valeurs **************/ 

// A la fin (pop)
   
$valeur = array_pop($tableau);

// Au debut (shit)

$valeur = array_shift($tableau);

/************** Deviser le tableau en plusieurs parti de 2 valeurs***************/

$tableau2 = array_chunk($tableau, 2,true);

/************** Mélanger un tableau ***************/

shuffle($tableau);

$tableauMulti = [
  0 => [
    "nom" => "Goldman",
    "prenom" => "Oscar",
    "age" => 32
  ],
  1 => [ 
  "nom" => "Pessi",
  "prenom" => "Pionnel",
  "age" => 35
  ],
];

var_dump($tableauMulti[1]["nom"]);
//echo $valeur;
   echo "</pre>";
 ?>