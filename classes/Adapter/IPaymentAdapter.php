<?php

namespace Adapter;

interface IPaymentAdapter
{
    public function Pay($total);
}