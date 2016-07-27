<?php
function insert_order($data)
{
    $servername = "localhost";
    $username   = "root";
    $password   = "root";
    $db         = "robotics";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
    // ,\'date("Y-m-d")'

    $cement       = $data['cement'];
    $iron         = $data['iron'];
    $mg           = $data['mg'];
    $c            = $data['c'];
    $s            = $data['s'];
    $si           = $data['si'];
    $p            = $data['p'];
    $al           = $data['al'];
    $phone_number = $data['phone_number'];
    $date         = date("Y-m-d");

    $sql = "INSERT INTO orders (cement, iron, mg, c, s, si, p, al, phone_number, created_date)
        VALUES ('$cement', '$iron', '$mg', '$c', '$s' , '$si', '$p', '$al', '$phone_number', '$date')";

    if ($conn->query($sql) === true) {
        echo "New record created successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function insert_user($data)
{
    $servername = "localhost";
    $username   = "root";
    $password   = "root";
    $db         = "robotics";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";

    $first_name  = $data['first_name'];
    $last_name   = $data['last_name'];
    $username    = $data['username'];
    $password    = $data['password'];
    $credit_card = $data['credit_card'];
    $email       = $data['email'];

    $sql = "INSERT INTO users (first_name, last_name, email, password, username, credit_card)
        VALUES ('$first_name', '$last_name', '$email', '$password', '$username',  '$credit_card')";

    if ($conn->query($sql) === true) {
        echo "New record created successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function login($user_name , $user_password) {
    $servername = "localhost";
    $username   = "root";
    $password   = "root";
    $db         = "robotics";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT username, password FROM users WHERE username = '$user_name' AND password = '$user_password'";
    
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        return true;
    } else {
        return false;
    }
}
