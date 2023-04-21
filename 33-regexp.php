<?php
// Expressões regulares
// https://www.php.net/manual/pt_BR/book.pcre.php

//Define um padrão a ser usado para procurar ou substituir palavras ou grupos de palavras
//  ^ - início da string
// $ - fim da string
// /i - case insensitive
// [] - conjunto de caracteres
// {} - quantidade de caracteres a serem procurados - ?{0,1} *{0,} +{1,}

// $padrao = '/^a/'; // procura por a no início da string

// Padrão de url válida - /^http(s)?:\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i

// Padrão de CPF - /^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2})$/
// Padrão de CNPJ - /^([0-9]{2}\.?[0-9]{3}\.?[0-9]{3}\/?[0-9]{4}\-?[0-9]{2})$/

$string = "111.111.111-11";
$padrao = '/^([0-9]{3}\.?[0-9]{3}\.?[0-9]{3}\-?[0-9]{2})$/';

if(preg_match($padrao, $string)){
    echo "CPF Válido";
} else {
    echo "CPF Inválido";
}
echo '<hr>';
$texto = "123gid45igu667";

$texto_sem_letras = preg_replace('/[a-z]/', '', $texto);

echo $texto_sem_letras;

$data = '21/04/2023';

$dataArray = preg_split('/\//', $data);

var_dump(array(
    'dia' => $dataArray[0],
    'mes' => $dataArray[1],
    'ano' => $dataArray[2]
));