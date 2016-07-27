<?php
require 'db.php';

$username   = trim($_POST['username']);
$password    = trim($_POST['password']);

if(login($username, $password)){
	header('Location: order.php'); exit();
}

