<?php

use StaticFabric\StaticFactory;

require "index.php";

$obj = StaticFactory::create('\StaticFabric\FactoryClass');

$obj->save();