<?php
$pessoas = array(1=>"Dayana", 3=>"Leandro", "Antonio", 2=>"Lucas", "Paula");
print_r ($pessoas);
echo "<hr>";

//Acessar array
echo $pessoas[3];

echo "<hr>";

//Inserir no final do array
$pessoas[] = "Silvio";

//Inserir em posição específica
$pessoas[12] = "Ana";


var_dump($pessoas);

//Arrays podem ser criadas vazias
$carros = array();
$carros[] = "Uno";
$carros[5] = "Gol";
var_dump($carros);


//Arrays podem ser criadas de foram direta
$lugares = ["Lapa", "Sambodromo", "Pão de Açúcar"];
var_dump($lugares);

//Contar elementos de um Array
$totalLugares = count($lugares);

echo $totalLugares."<br>";
echo "<hr>";


//Percorrer um Array com foreach
$numeros = [1, 2, 3, 4, 5, 6, 7];
foreach ($numeros as $key) {
  echo ($key + 1)."<br>";
}


//Array associativos
$pessoa = array("nome" => "Leandro", "idade" => 32);
var_dump($pessoa);
$pessoa["cidade"] = "Rio de Janeiro";
var_dump($pessoa);

foreach($pessoa as $index => $key) {
  echo $index." : ".$key."<br>";
}

//Arrays multidimensionais
$carrosMontadoras = array(
  'volkswagen' => array("gol", "passat", "fox"),
  "fiat" => array("uno", "punto", "brava"),
  "gm" => array("escort", "astra", "chevette")
);

var_dump($carrosMontadoras);

foreach($carrosMontadoras["volkswagen"] as $index => $key) {
  echo $index." : ".$key."<br>";
} 
