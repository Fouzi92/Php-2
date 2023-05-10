<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="get">

     <div>
      <label for="nombre1">Nombre1 :</label>
      <input type="number" name="nb1" id="nombre1">
     </div>

     <div>
      <label for="nombre2">Nombre2 :</label>
      <input type="number" name="nb2" id="nombre2">
     </div>
      <button type="submit">Calculer</button>
  </form>

  <?php 
  // http://localhost/?nb1=756&nb2=53

   /* echo"<pre>";
      var_dump($_GET);
    echo "</pre>"; */
    
    $total = $_GET["nb1"] + $_GET["nb2"];
    echo $total;
  ?>
</body>
</html>