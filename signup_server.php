<?php
require 'db.php';

$first_name  = $_POST['first_name'];
$last_name   = $_POST['last_name'];
$email       = $_POST['email'];
$username    = $_POST['username'];
$password    = $_POST['password'];
$credit_card = $_POST['credit_card'];

$data = array(
    'first_name'  => $first_name ,
    'last_name'   => $last_name ,
    'email'       => $email ,
    'username' 	  => $username ,
    'password'    => $password ,
    'credit_card' => $credit_card
);

insert_user($data);