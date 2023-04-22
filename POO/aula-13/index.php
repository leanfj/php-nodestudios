<?php


use classes\Produto as ProdutoClass;
use models\Produto as ProdutoModel;

require 'classes/Produto.php';
require 'models/Produto.php';

$produtoClasses = new ProdutoClass();

$produtoClasses->mostrarDetalhes();

echo "<hr>";

$produtoModels = new ProdutoModel();

$produtoModels->mostrarDetalhes();