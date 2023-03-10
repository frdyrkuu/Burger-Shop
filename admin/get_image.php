<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "burgershopdb");

// Retrieve image path from database
$sql = "SELECT `id`, `title`, `description`, `category`, `img` FROM `product_data` WHERE 1";

$result = mysqli_query($conn, $sql);

$product_data = array();
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    $product_data[] = $row;
}

// Close database connection
mysqli_close($conn);


echo json_encode($product_data);


?>