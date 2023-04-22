<?php

class Login
{
    public static $usuario;

    public  static function verificaLogin() {
        echo "O usuário ". self::$usuario . " esta logado";
    }
}

Login::$usuario = "Leandro";
Login::verificaLogin();
