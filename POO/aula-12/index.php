<?php
interface Crud {
    public function create($data);
    public function update();
    public function read();
    public function delete();
}

class Noticia implements Crud {

    public function create($data)
    {
        echo "// TODO: Implement create() method." . $data;
    }

    public function update()
    {
        echo "// TODO: Implement update() method.";
    }

    public function read()
    {
        echo "// TODO: Implement read() method.";
    }

    public function delete()
    {
        echo "// TODO: Implement delete() method.";
    }
}

$noticia = new Noticia();
$noticia->create("Ola dados");

$noticia->delete();
