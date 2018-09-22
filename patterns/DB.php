<?php

Class MizanDB 
{
    public $server;
    public $username;
    public static $instance;
    
    private function __construct($server, $username)
    {
        $this->server = $server;
        $this->username = $username;
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {
        
    }

    static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new MizanDB("","");
        } 
        return self::$instance;
    }

    function query($sql) 
    {
        return "";
    }
}

