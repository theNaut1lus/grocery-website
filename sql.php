<?php

$product_array = array();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "assignment1";
// echo $id_pattern;
// echo $search_pattern;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($search_pattern)) {
    $sql = 'SELECT * FROM `products` where product_name like "%' . $search_pattern . '%" or unit_price like "%' . $search_pattern . '%"  order by product_id asc';
} else {
    $sql = 'SELECT * FROM `products` where product_id like "%' . $id_pattern . '%" order by product_id asc';
}
// $sql = 'SELECT * FROM `products` where product_id like "%' . $id_pattern . '%" order by product_id asc';
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