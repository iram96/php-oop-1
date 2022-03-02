<?php

class Movie
{
    public $title;
    public $year;

    public function __construct($title, $year){
        $this->title = $title;
        $this->year = $year;

    }
    public function  electedBest($best){
        return   $best;
    }
    // public function  electedBest($best){
    //     if ($this->)
    //     return   $best;
    // }
};


$movie3 = new Movie('Pirati dei Caraibi: ai confini del mondo', '2007');
$movie4 = new Movie('Pirati dei Caraibi: oltre i confini del mondo', '2011');
$movie1 = new Movie('La maledizione della prima luna', '2003');
$movie2 = new Movie('Pirati dei Caraibi: La maledizione del forziere fantasma', '2006');
$movie5 = new Movie('Pirati dei Caraibi: la vendetta di Salazar', '2017');
$movies = array($movie1, $movie2, $movie3, $movie4, $movie5);



echo $movie1->electedBest('<h1>Elected Best of: La maledizione della prima luna </h1>')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
    <?php foreach ($movies as $movie) : ?>
        <li>
            <h2><?php echo $movie->title ?></h2>
            <sub><?php echo $movie->year ?></sub>
        </li>
        <?php endforeach ?>
</ul>
    
</body>
</html>