<?php

namespace Adapter;

class Webmoney implements IPayment
{
    private $params;

    public function __construct($params){
        $this->params = $params;
    }

    public function getForm($total){
        echo "Payment form, amount is $total";
    }
}