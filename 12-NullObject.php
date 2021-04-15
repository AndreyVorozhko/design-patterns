<?php

use NullObject\Db;
use NullObject\User;
use NullObject\UserRepository;

require "index.php";

$db = new Db('localhost:3307', 'root', '', 'patterns');
$userRepository = new UserRepository($db);
// We have no any user with id = 3
$user = $userRepository->fetchById(3);

print_r($user->getLogin());