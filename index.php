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
// ----------Užduotis-02------------
// //  $number = rand(0,4);
// //  $number1 = rand(0,4);

// //  echo $number . ' ' . $number1. '<br>';

// //  if($number == 0 || $number1 == 0){

// //  if($number > $number1) {
// //     echo 'pirma dalinsiu is antro'. ( round($number / $number1, 2)  );
// //  }else{
// //     echo 'antra dalinsiu is pirmo'. ( round($number1 / $number, 2)  );
// //  }else {
// //     echo 'dalinti is numelio negaliu'
// //  }




// // ----------Užduotis-04------------

// $a = rand(1, 10);
// $b = rand(1, 10);
// $c = rand(1, 10);

// echo $a . " ". $b . " ". $c. '<br>';

// if (($a + $b > $c) && ($b + $c > $a) && ($c + $a > $b)) {
//     echo 'Gaunasi trikampis';
// }else{
//     echo 'Nesigauna trikampis';
//  }

// ----------Užduotis2-01----------
// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.

// $vardas = 'Tomas';
// $pavarde = 'Tomauskas';


// echo substr('Tomas'. 'Tomauskas', 5 );


// ----------Užduotis2-02----------

// $vardas = 'Paul';
// $pavarde = 'Walker';

// echo strtoupper ($vardas). '  ' . strtolower ($pavarde)


// ----------Užduotis2-03----------

// $vardas = 'Paul';
// $pavarde = 'Walker';
// $subtringas = $vardas[0]. ' ' .$pavarde[0];

// echo $subtringas;




// ----------Užduotis2-04----------

// $vardas = 'James';
// $pavarde = 'Mcavoy';
// $trysSkaiciai = substr($vardas, 2).' ' .substr($pavarde, 3);

// echo $trysSkaiciai

// ----------Užduotis2-05----------

// $tekstas = 'An American in Paris';
// $replace = array('A', 'a');

// echo str_replace($replace, '*', $tekstas);

// ----------Užduotis2-06----------

// $tekstas = 'An American in Paris';

// echo 'A-'. substr_count($tekstas,'A'). '<br>';
// echo 'a-'. substr_count($tekstas, 'a');

// ----------Užduotis2-07----------

// $tekstas = 'An American in Paris';
// $tekstas1 = 'Breakfast at Tiffanys”, “2001: A Space Odyssey';
// $tekstas3 = 'Its a Wonderful Life';
// $balses = array('A', 'a', 'E', 'e', 'I', 'i', 'Y', 'y', 'O', 'o', 'U', 'u'); 
// $visi = $tekstas. '</br>'. $tekstas1. '</br>'. $tekstas3 ;

// echo str_replace ($balses, ' ', $visi);


// ----------Užduotis2-08----------

// $tekstas = array 'Dont Be a Menace to South Central While Drinking Your Juice in the Hood'
// if ($tekstas <= '5' $tekstas +++){
// echo $tekstas;
// }
// ??????

// ----------Užduotis2-10----------

function generateRandomString($lenght = 3) {
    $raides = 'abcdefghiyjklmnoprstuvz';
    $zodis = strlen($raides);
    $tekstas  = ' ';
    for($i = 0; $i < $lenght; $i++) {
        $tekstas .= $raides[rand(0, $zodis - 1)];
    }
    return $tekstas;
}

echo generateRandomString();


















?>
</body>
</html>









































