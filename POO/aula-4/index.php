<?php

class Login
{
    private $email;
    private $senha;

    private $nome;

    public function __construct($email, $senha, $nome)
    {
        $this->setEmail($email);
        $this->setSenha($senha);
        $this->nome = $nome;
    }

    public function Logar()
    {
        if ($this->getEmail() == "teste@teste.com" && $this->getSenha() == "123456") {
            echo "Usuário " . $this->getEmail() . " Logado <br> Bem-vindo " .  strtoupper($this->getNome()) ;
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

    public function getNome()
    {
        return $this->nome;
    }

}

$entrada = new Login("teste/@teste.com", "123456", "Leandro Ferreira");

//$entrada->setEmail("teste/@teste.com");
//$entrada->setSenha("123456");

$entrada->Logar();
