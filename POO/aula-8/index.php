<?php

abstract class Banco
{
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo): void
    {
        $this->saldo = $saldo;
    }

    public function getLimiteSaque()
    {
        return $this->limiteSaque;
    }

    public function setLimiteSaque($limiteSaque): void
    {
        $this->limiteSaque = $limiteSaque;
    }

    public function getJuros()
    {
        return $this->juros;
    }

    public function setJuros($juros): void
    {
        $this->juros = $juros;
    }

    abstract public function Sacar($valor);

    abstract public function Depositar($valor);
}

class Itau extends Banco
{

    public function Sacar($valor)
    {
        $this->saldo -= $valor;
    }

    public function Depositar($valor)
    {
        $this->saldo += $valor;
    }
}

//$banco = new Banco();

$banco = new Itau();
$banco->setSaldo(2000);

echo $banco->getSaldo() . "<br>";

$banco->Sacar(100);



echo $banco->getSaldo() . "<br>";
$banco->Depositar(200);

echo $banco->getSaldo() . "<br>";

