<?php

namespace NullObject;

interface IUser
{
    public function getId();
    public function setId(int $id);
    public function setLogin(string $login);
    public function getLogin();

    public function setEmail(string $email);
    public function getEmail();
}