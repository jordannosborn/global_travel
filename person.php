<?php

class Person{

    public $name; 
    public $age;


    function __construct($person_name,$new_age){
        $this->name = $person_name; 
        $this->age = $new_age; 
    }

    function set_name($new_name){
        $this->name = $new_name; 
    }

    function get_name(){
        return $this->name;
    }

    function set_age($new_age){
        $this->age = $new_age; 
    }

    function get_age(){
        return $this->age; 
    }

}
