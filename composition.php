<?php

class Subscription
{
    protected Gateway $gateWay;

    public function __construct(Gateway $gateWay)
    {
        $this->gateWay = $gateWay;
    }
    public function create()
    {
    }
    public function cancel()
    {
    }
    public function invoice()
    {
    }
    public function swap($newPlan)
    {
    }
}

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway
{
    public function findCustomer()
    {
    }
    public function findSubscriptionByCustomer()
    {
    }
}

class MpesaGateway implements Gateway
{
    public function findCustomer()
    {
    }
    public function findSubscriptionByCustomer()
    {
    }
}

new Subscription(new MpesaGateway());
