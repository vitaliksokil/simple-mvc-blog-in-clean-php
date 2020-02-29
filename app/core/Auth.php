<?php


namespace app\core;


class Auth
{
    static public function isAuth(){
        return $_SESSION['user'] ?? false;
    }
    static public function isAdmin(){
        return $_SESSION['user']['is_admin'] ?? false;
    }
}