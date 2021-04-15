<?php

use Facade\Db;
use Facade\Document;
use Facade\Log;
use Facade\Mail;

require "index.php";

$db = new Db('localhost:3307', 'root', '', 'patterns');
$log = new Log('Log-facade.txt');
$mail = new Mail('admin@email.ru', 'System message', '');

$doc = new Document($db, $log, $mail);
$doc->save('New document facade');