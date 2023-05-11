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

    $clients = [
      "ref" => [
        "nom" => "Pessi",
        "prenom" => "Pionel"
      ],
      "ref2" => [
        "nom" => "Paymar",
        "prenom" => "Punior"
      ]
    ];

      foreach($clients as $ref => $client){
        echo "<p>Référance client : $ref</P>";
        echo "<p>{$client["prenom"]} {$client["nom"]}</p>";
      };

    
   /* for($nombre = 1; $nombre <= 10; $nombre++) {
      echo "<p>$nombre</p>";
    }*/
        
 ?>


</body>
</html>