<?php

$precos = array();
//$precos = [];

/*
$precos[0] = 1.75;
$precos[2] = 4.65;
$precos[] = 7.89; //colocou na posição 3
$precos[] = 1.32;; //colocou na posição 4

echo $precos;

//print_r($precos);

var_dump($precos);
*/


/*
$precos['telefone'] = 900;
$precos['biscoito'] = 7.89;
$precos[123456] = 7.89;

var_dump($precos);

echo 'O preço do biscoito é R$'.$precos['biscoito'];
echo "O preço do biscoito é R${$precos['biscoito']}";
*/

/*
$precos = array(2 => 1.56, 10, 0 => 5.74, 1 => 0.23, 8.96);

var_dump($precos);
*/

/*
$precos = array("telefone" => 900, "celular" => 600.1);

var_dump(array_reverse($precos));

*/

//$precos = array(2 => 1.56, 10, 0 => 5.74, 1 => 0.23, 8.96);
/*
$precos = array("telefone" => 900, "celular" => 600.1, "tv" => 1000);


ksort($precos);
var_dump($precos);
*/

/*
$tas = array("MD", "BH", "KK", "HM", "JP");

for($i=0; $i < count($tas); $i++){
    echo "{$i}: {$tas[$i]} <br>";
}
*/

$tas = array("MD", "BH", 4 => "KK", "HM", "JP");

foreach ($tas as $key => $value) {
    echo "$key: $value <br>";
}
/*
?> não é obrigatório fechar php. É uma boa prática não fechar
*/