<?php

class Animal
{
    public function Andar() {
        echo "O animal andou";
    }
}

class Cavalo extends Animal {
    public function Andar() {
        echo "O cavalo andou";
    }
}


$animal = new Animal();
$animal->Andar();


echo "<hr>";

$cavalo = new Cavalo();
$cavalo->Andar();

