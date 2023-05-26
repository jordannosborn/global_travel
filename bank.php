<?php

class Bank{

    public $customer_name; 
    protected $pin_num; 
    private $balance = 100;
    
    function __construct($new_customer_name, $new_pin){
        $this->customer_name = $new_customer_name; 
        $this->pin_num = $new_pin; 
    }

    function set_name($new_customer_name){
        $this->customer_name = $new_customer_name; 
    }

    function get_name(){
        return $this->customer_name; 
    }

    function get_balance(){
        return $this->balance; 
    }

    function deposit($amount){
        $this->balance += $amount; 
    }

    function withdraw($amount){
        if($this->balance < $amount){
            return "Insufficient Funds. ";
        }
        else{
            $this->balance -= $amount; 
        }
    }

}