<?php


class Veiculo
{
    protected $modelo;
    private $cor;
    public $ano;

    public function Andar($como)
    {
        echo "Andar " . $como . PHP_EOL;
    }

    public function Parar()
    {
        echo "Parou " . PHP_EOL;
    }

    public function setCor($cor): void
    {
        $this->cor = $cor;
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

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
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

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }
}

$uno = new Carro();
$cb500 = new Moto();

$uno->setCor("Preto");
$uno->ano = "2005";
$uno->setModelo("Mille");

var_dump($uno);

$uno->Andar("Com 4 rodas");
$uno->Parar();

echo "<hr>";

$cb500->ano = "2010";
$cb500->setCor("Vermelha");
$cb500->setModelo("XTi") ;


var_dump($cb500);

$cb500->Andar("Com 2 rodas");
$cb500->Parar();

$cb500->DarGrau();

