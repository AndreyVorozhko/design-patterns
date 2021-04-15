<?php

use Mediator\Router;
use Mediator\Data;
use Mediator\App;
use Mediator\Page;
use Mediator\PageHelper;

require "index.php";

$router = new Router();
new PageHelper(new Data(), new Page(), $router);

$router->request();