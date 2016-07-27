<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "robotics";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "SELECT id, cement, iron, mg, c, s, si, p, al, phone_number, created_date FROM orders";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table id='orders'><tr><th>id</th><th>cement</th><th>iron</th><th>Magnisium</th><th>Carbon</th><th>Silicon</th><th>Phosohore</th><th>al</th><th>Phone</th><th>Created Date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo "<tr><td>". $row['id']."</td> <td>". $row['cement'] ."</td><td>". $row['iron'] ."</td><td>".$row['mg']."</td><td>".$row['c']."</td><td>".$row['si']."</td><td>".$row['p']."</td><td>".$row['al']."</td><td>".$row['phone_number']."</td><td>".$row['created_date']."</td><td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>