<?php

class DB
{
    // connect to database 
    private $serverName = "localhost"; 
    private $userName = "root"; 
    private $password = ""; 
    private $connection; 

    function __construct()
    {
        $this->connection = new mysqli(
            $this->serverName,
            $this->userName, 
            $this->password
        ); 
    }

    function get_connection()
    {
        return $this->connection; 
    }

    // create database 
    function execute_query()
    {
       $sql = "CREATE DATABASE PHPDev";
       if($this->get_connection()->query($sql) === TRUE){
            echo "Query created sucessfully";
       }else{
        echo "Failed to execute query: " . $this->get_connection()->error;
       }
    }
}
 // create a new db object 
$db = new DB(); 

// check if the connection has any errors 
$db = new DB(); 
if($db->get_connection()->connect_error){
    die("Connection Failed: " . $db->get_connection()->connect_error);
}

// connection status message 
echo "Connection Established........\n";

// create a new database. if you run this again it will produce an error because the db exists. 
// to ovecome this issue we need to use if db exist statement so as to not generate this type of error 
$db->execute_query("CREATE DATABASE IF NOT EXISTS MYDB"); 

$sql = "USE MYDB; CREATE TABLE customer(id int(11) auto_increment, first_name varchar(80) not null, primary key(id));"; 

$db->execute_query(""); 

// close connection to database
$db->get_connection()->close(); 
    
