<?php

require 'classes/Produto.php';
require 'models/Produto.php';

use classes\Produto as ProdutoClass;
use models\Produto as ProdutoModel;


$produtoClasses = new ProdutoClass();

$produtoClasses->mostrarDetalhes();

echo "<hr>";

$produtoModels = new ProdutoModel();

$produtoModels->mostrarDetalhes();