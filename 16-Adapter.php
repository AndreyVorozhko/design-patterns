<?php

use Adapter\PaymentAdapter;
use Adapter\Webmoney;

require "index.php";

/*
$form = new Webmoney(['key' => 'param']);
$form->getFormPay(100);
*/

$adapter = new PaymentAdapter(new Webmoney(['key' => 'param']));
$adapter->pay(100);