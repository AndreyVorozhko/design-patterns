<?php

use Command\ChatInterface;
use Command\GoOnline;
use Command\User;

require "index.php";

$chat = new ChatInterface;
$user = new User;

$chat->setCommand(new GoOnline($user));
$chat->run();
$chat->undo();
$chat->redo();