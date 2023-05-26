<?php
include("person.php");

class employee extends person{
    function __construct($employee_name)
    {
        $this->set_name($employee_name); 
    }

    function get_name()
    {
        return strtoupper("Hello " . $this->name . "!");   
    }
}

$emp = new employee("Warran Buffet"); 
echo $emp->get_name(); 