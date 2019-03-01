<?php
class AuthClass {
    
    public function __construct()
    {
        @session_start();
    }

    public function isAuth() {
        if (!empty($_SESSION["is_auth"])) {
            return $_SESSION["is_auth"]; 
        }
        else return false;
    }
     
    public function auth($login, $password) {
        
        $login = trim($login);
        $password = trim($password);
        
        if ($login == LOGIN && md5($password) == PASS) {
            $_SESSION["is_auth"] = true;
            $_SESSION["login"] = $login;
            setcookie ("is_auth", true, time() + 3600 * 24);
            setcookie ("login", $login, time() + 3600 * 24);
            return true;
        }else{
            $_SESSION["is_auth"] = false;
            return false; 
        }
    }

    public function getLogin() {
        if ($this->isAuth()) {
            return $_SESSION["login"];
        }
    }
     
    public function out() {
        $_SESSION = array();
        unset($_COOKIE['is_auth']);
        unset($_COOKIE['login']);
        session_destroy();
    }
} 
?>