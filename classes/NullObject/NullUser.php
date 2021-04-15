<?php

namespace NullObject;

class NullUser implements IUser
{
    private $id, $login, $email;

    public function __construct(){}

    public function setId(int $id){}

    public function getId(){
        return 'Id is empty';
    }

    public function setLogin(string $login){}

    public function getLogin(){
        return 'Login is empty';
    }

    public function setEmail(string $email){}

    public function getEmail(){
        return 'Email is empty';
    }
}