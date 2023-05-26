<?php 
// get bank.php file 
include("bank.php"); 

// create bank account 
$account = new Bank("Mohammed", 1234); 

echo $account->get_name() . "=" . $account->get_balance();

$account->deposit(200); 
echo "\n";
echo $account->get_name() . "=" . $account->get_balance();

echo "\n";
$account->withdraw(50); 
echo $account->get_name() . "=" . $account->get_balance();


