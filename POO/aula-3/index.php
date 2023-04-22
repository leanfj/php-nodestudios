<?php

class Login
{
    private $email;
    private $senha;

    public function Logar()
    {
        if ($this->getEmail() == "teste@teste.com" && $this->getSenha() == "123456") {
            echo "Usuário " . $this->getEmail() . " Logado";
        } else {
            echo "Dados inválidos";
        }
    }

    public function setEmail($email)
    {
        $sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
        $this->email = $sanitizedEmail;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    public function getSenha()
    {
        return $this->senha;
    }

}

$entrada = new Login();

$entrada->setEmail("teste/@teste.com");
$entrada->setSenha("123456");

$entrada->Logar();
