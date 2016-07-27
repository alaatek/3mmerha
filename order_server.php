<?php
require 'db.php';

$iron   = $_POST['iron'];
$mg     = $_POST['mg'];
$p      = $_POST['p'];
$c      = $_POST['c'];
$s      = $_POST['s'];
$si     = $_POST['si'];
$cement = $_POST['cement'];
$phone_number = $_POST['phone_number'];

$data = array(
	'iron'   => $_POST['iron'],
	'mg'     => $_POST['mg'],
	'p'      => $_POST['p'],
	'c'      => $_POST['c'],
	's'      => $_POST['s'],
	'si'     => $_POST['si'],
	'cement' => $_POST['cement'],
	'phone_number' => $_POST['phone_number']	
);

insert_order($data);

