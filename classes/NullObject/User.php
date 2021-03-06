<?php

namespace NullObject;

class User implements IUser
{
    private $id, $login, $email;

    public function __construct($id, $login, $email){
        $this->setId($id);
        $this->setLogin($login);
        $this->setEmail($email);
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setLogin(string $login){
        if(strlen($login) < 2){
            throw new \Exception('Login is too short!');
        }
        $this->login = $login;
        return $this;
    }

    public function getLogin(){
        return $this->login;
    }

    public function setEmail(string $email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new \Exception('This string is not email!');
        }
        $this->email = $email;
        return $this;
    }

    public function getEmail(){
        return $this->email;
    }
}