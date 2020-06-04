<?php 
  include_once __DIR__ . "/movie.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/main.css">
</head>
<body>

  <!-- Prova con foreach -->
  <div class="card">
    <h2>Stampa tramite foreach method</h2>
    <?php //var_dump($movie1); ?>
    <?php echo $movie1->printData() ?>
      
    <span><?php echo "Anni passati dall'uscita: {$movie1->yearsExit(2020)} "; ?></span> 
  </div>  

  <div class="card">
    <h2>Stampa tramite foreach html</h2>
    <?php //var_dump($movie1); ?>
    <?php foreach ($movie1 as $key=>$value) { ?>
      <span> <?php echo $key .":" . $value ?> </span>
    <?php } ?>
    <span><?php echo "Anni passati dall'uscita: {$movie1->yearsExit(2020)} "; ?></span> 
  </div>  

  <div class="card">
    <h2>Stampa tramite echo</h2>
    <?php //var_dump($movie1); ?>
    <?php 
      echo "Titolo: $movie1->title <br>";
      echo "Registra: $movie1->records <br>";
      echo "Genere: $movie1->genre <br>";
      echo "Box-Office: USD $movie1->boxOffice <br>";
      echo "Anno di uscita: $movie1->year <br>";
      echo "Anni passati dall'uscita: {$movie1->yearsExit(2020)} <br>";
    ?>
  </div>  

  <div class="card">
    <?php //var_dump($movie2); ?>
    <?php 
      echo "Titolo: $movie2->title <br>";
      echo "Registra: $movie2->records <br>";
      echo "Genere: $movie2->genre <br>";
      echo "Box-Office: USD $movie2->boxOffice <br>";
      echo "Anno di uscita: $movie2->year <br>";
      echo "Anni passati dall'uscita: {$movie2->yearsExit(2020)} <br>";
    ?>
  </div>  

  <div class="card">
    <?php //var_dump($movie2); ?>
    <?php 
      $movie3 -> print();
    ?>
  </div> 
</body>
</html>