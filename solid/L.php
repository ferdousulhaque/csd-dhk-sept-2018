<?php

Class Payment
{
    public function send()
    {
        echo "I am from Parent \n";
    }
}

Class CreditCardPayment extends Payment
{
    public function send()
    {
        parent::send();
        echo "Credit Card payment \n";
    }
}

Class BkashPayment extends Payment
{
    public function send()
    {
        parent::send();
        echo "Bkash payment \n";
    }
}

Class BkashWalletPayment extends BkashPayment 
{
    public function send()
    {
        parent::send();
        echo "Bkash wallet payment \n";
    }
}

$payment1 = new Payment;
$payment2 = new CreditCardPayment;
$payment3 = new BkashPayment;
$payment4 = new BkashWalletPayment;

$payment1->send();
$payment2->send();
$payment3->send();
$payment4->send();