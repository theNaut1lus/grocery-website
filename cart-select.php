<?php

$product_array = array();
$servername = "localhost";
// $servername = "axwseb-e-mn6s5jqgxe-stack-awsebrdsdatabase-mjdrpcfjfhij.cet59kefgwkn.us-east-1.rds.amazonaws.com";
$username = "uts";
$password = "Secret123";
$dbname = "assignment1";
// echo $id_pattern;
// echo $search_pattern;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $sql = 'SELECT * FROM `cart`';
$sql = 'SELECT a.product_name,a.unit_price,b.quantity FROM `products` as a join `cart` as b where a.product_id = b.product_id';
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        // echo "id: " . $row["product_id"] . " - Name: " . $row["product_name"] . " " . $row["unit_price"] . "<br>";
        array_push($product_array, $row);
    }
} else {
    echo "0 results";
}
// echo '<pre>';
// print_r($product_array);
// echo '</pre>';
$conn->close();
?>