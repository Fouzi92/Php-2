<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php 
       /*************************************Conditions et opérateurs de comparaison ************************ */

       // On pose une question
       /* $reponse = true;

        if($reponse == true) {
          // Alors
          echo "Bravo";
        } else{ 
          // Sinon
          echo "Puni";
        }*/

        /****************** Exemple-2 ********************/

       /* $Variable2 = 18;

        if($Variable2 < 117) {
          echo"Plus petit";
        } else {
          echo"Plus grand ou égale=";
        } */

         /****************** Exemple-3 ********************/

         // Pour comparer (== égal )  (=== Identique) (< Inferieur) (> Superieur ) (<= Inferieur ou égal) (=> Inferieur ou égal) (!= Différent) (<=> 	Combiné )
          // Plus d'info sur "   https://www.php.net/manual/fr/language.operators.comparison.php  "

          $a = 58;
          $b = 17;

          echo($a <=> $b) 
          /* 
           < -> -1 a <b
           = -> 0 a = b
           > -> 1 a > b
          */
        
 ?>


</body>
</html>