<?php
 $chaine = "Ceci est un Pessi        ";

   // Afficher 1 caractére de la chaine 
       // echo $chaine[3];

  // Modifier un caractére de la chaine 
      //$chaine[0] = "F";

  // Extraire une partie de la chaine
      //var_dump(substr($chaine, 13,7));

  // Remplacer un partie de la chaine 
      $chaine = str_ireplace('Ceci','Cela', $chaine);

      var_dump(strpos($chaine, 'Pessi'));
 ?>