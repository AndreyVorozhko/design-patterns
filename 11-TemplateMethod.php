<?php

use TemplateMethod\Page;
use TemplateMethod\HomePage;
use TemplateMethod\AboutPage;

require "index.php";

$home = new Homepage();
//$home->setContent();
$home->output();