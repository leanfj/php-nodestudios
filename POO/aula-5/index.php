<?php


class Veiculo
{
    public $modelo;
    public $cor;
    public $ano;

    public function Andar($como)
    {
        echo "Andar " . $como . PHP_EOL;
    }

    public function Parar()
    {
        echo "Parou " . PHP_EOL;
    }
}

class Carro extends Veiculo
{
    public function LigarLimpador()
    {
        echo "Limpador Ligado";
    }
    public function Andar($como)
    {
        parent::Andar($como);
    }
}

class Moto extends Veiculo
{
    public function DarGrau()
    {
        echo "Dando Grau";
    }

    public function Andar($como)
    {
        parent::Andar($como);
    }
}

$uno = new Carro();
$cb500 = new Moto();

$uno->cor = "Preto";
$uno->ano = "2005";
$uno->modelo = "Mille";

var_dump($uno);

$uno->Andar("Com 4 rodas");
$uno->Parar();

echo "<hr>";

$cb500->ano = "2010";
$cb500->cor = "Vermelha";
$cb500->modelo = "XTi";

$cb500->Andar("Com 2 rodas");
$cb500->Parar();

$cb500->DarGrau();

