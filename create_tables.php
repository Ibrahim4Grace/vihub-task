<?php

$host = "localhost";     
$username = "root"; 
$password = ""; 
$dbname = ""; 

$conn = new mysqli($host, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$store_sql = "CREATE TABLE IF NOT EXISTS akorede_store_table (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    store_name VARCHAR(255) NOT NULL,
    store_location VARCHAR(255) NOT NULL,
    store_opening_time TIME NOT NULL,
    store_closing_time TIME NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


$product_sql = "CREATE TABLE IF NOT EXISTS akorede_product_table (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    store_id INT(11) UNSIGNED,
    product_name VARCHAR(255) NOT NULL,
    quantity INT(11) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    category ENUM('Trousers', 'Cap', 'Shirts') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (store_id) REFERENCES stores(id) ON DELETE CASCADE
)";


if ($conn->query($store_sql) === TRUE && $conn->query($product_sql) === TRUE) {
    echo "Tables created successfully!";
} else {
    echo "Error creating tables: " . $conn->error;
}

$conn->close();
?>
