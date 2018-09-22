<?php

Class Strategy
{
    public $strategy;
    public function setStrategy($name)
    {
        switch($name)
        {
            case 'SMS':
                $this->strategy = new SMS();
            break;

            case 'Email':
                $this->strategy = new Email();
            break;

            case 'Fax':
                $this->strategy = new Fax();
            break;
        }
    }

    public function send()
    {
        $this->strategy->send();
    }
}

$strategy = new Strategy();

if(!$phoneCall) {
    $strategy->setStrategy('SMS');
} else {
    $strategy->setStrategy('Email');
}

$strategy->send();