<?php

interface PaymentInterface {
    public function pay();
}

Class CashPayment implements PaymentInterface {

    public function pay()
    {
    
    }
}

Class CreditPayment implements PaymentInterface {

    public function pay()
    {
    
    }
}

Class BkashPayment implements PaymentInterface {

    public function pay()
    {
    
    }
}
