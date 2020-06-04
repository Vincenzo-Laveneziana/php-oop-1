<?php 

//Movie Class

class Movie {
  //Properties
  public $title;
  public $records;
  public $genre;
  public $boxOffice;
  public $year;

  //Costructor
  public function __construct($_title, $_records, $_genre, $_boxOffice, $year) {
    $this->title = $_title;
    $this->records = $_records;
    $this->genre = $_genre;
    $this->boxOffice = $_boxOffice;
    $this->year = $year;
  }

  //Methods
  public function yearsExit($currentYear) {
    $currentYear = $currentYear - $this->year ;
    return $currentYear;
  }
  
  public function printData(){
      foreach(get_object_vars($this) as $key => $value) {
        echo "$key: $value <br>";
    }
  }

  public function print() {
    echo "Titolo: {$this->title} <br>";
    echo "Registra: {$this->records} <br>";
    echo "Genere: {$this->genre} <br>";
    echo "Box-Office: USD {$this->boxOffice} <br>";
    echo "Anno di uscita: {$this->year} <br>";
    echo "Anni passati dall'uscita: {$this->yearsExit(2020)} <br>";
  }

 
}

$movie1 = new Movie('Avengers', 'Joss Whedon', 'Azione', '2.798.000.000', '2012');
//var_dump($movie1);

$movie2 = new Movie('Ready Player One', 'Steven Spielberg', 'Azione', '582.900.000', '2018');
//var_dump($movie2);

$movie3 = new Movie('Pirati Dei Caraibi', 'Rob Marshall', 'Azione', '794.900.000', '2003');




//display movie1
/* echo "Titolo: $movie1->title <br>";
echo "Registra: $movie1->records <br>";
echo "Genere: $movie1->genre <br>";
echo "Box-Office: USD $movie1->boxOffice <br>";
echo "Anno di uscita: $movie1->year <br>";
echo "Anni passati dall'uscita: {$movie1->yearsExit(2020)} <br>"; */

//display movie2
/* echo "Titolo: $movie2->title <br>";
echo "Registra: $movie2->records <br>";
echo "Genere: $movie2->genre <br>";
echo "Box-Office: USD $movie2->boxOffice <br>";
echo "Anno di uscita: $movie2->year <br>";
echo "Anni passati dall'uscita: {$movie2->yearsExit(2020)} <br>";  */