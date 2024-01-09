


<?php 


// Esercizio 1 

$varInt = 32;
$varFloat = 20.23;
$varStringa = "Giovanni ha 39 anni.";
$varBool = true;

var_dump($var_int, $var_float, $var_stringa, $var_bool);


// Esercizio 2


$text = "Marco"; 
$text2 = "hai"; 
$text3 = "sete"; 
$text4 = "?"; 
$text5 = "Perchè"; 
$text6 = "$text2"; 
$text7 = "bevuto"; 
$text8 = "tutto.";

echo("$text $text2 $text3 $text4 $text5 $text6 $text7 $text8");


//Esercizio 3


$words1 = [ 'una', 67, 'vita', 'colle','mi', 'rosso', [ 'oscura', 'era', 89, [ 'mezzo',[ 'cammin', 'Nel', [ 'selva', 'la', [ 'via', 'una', true, ] ], ] ],'ritrovai', 'per' ], 'diritta' ]; 

$words2 = [ 'elemento1' => 25.89, 'elemento2' => 'nostra', 'elemento3' => ['di', 'smarrita', 'ché'] ];

$results;

$results = $words1[6][3][1][1] . " " . $words1[6][3][0] . " " . $words2['elemento3'][0] . " " . $words1[6][3][1][0] . " " . $words2['elemento3'][0] . " " . $words2['elemento2'] . " " . $words1[2] . " " . $words1[4] . " " . $words1[6][4] . " " . $words1[6][5] . " " . $words1[6][3][1][2][2][1] . " " . $words1[6][3][1][2][0] . " " . $words1[6][0] . ", " . $words2['elemento3'][2] . " " . $words1[6][3][1][2][1] . " " . $words1[7] . " " . $words1[6][3][1][2][2][0] . " " . $words1[6][1] . " " . $words2['elemento3'][1] . ".";


echo("\n" . $results);

//Esercizio 4

$x = 10;
$y = 20;
$z = "20";
$w = 10;

var_dump($x < $y);
var_dump($x <= $w);
var_dump($y == $z);
var_dump($y === $z);
var_dump($y !== $z);
var_dump($y != $z);

//Esercizio 5

$corsoHackademy = ['docenti' => ["Mattia","Emanuele","Caterina"], 'studenti' => ["Federica", "Alessio", "Gianluca"], 'argomenti' => ["CSS", "HTML", "Javascript", "PHP","Laravel"]];

$frasePresentazione = "Ciao sono " . $corsoHackademy['studenti'][2] . " e al momento sto studiando " . $corsoHackademy['argomenti'][3] . " assieme al docente " . $corsoHackademy["docenti"][1] . ".";

echo($frasePresentazione);