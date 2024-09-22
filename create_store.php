<?php
include 'includes/db_connection.php'; 


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $store_name = $_POST['store_name'];
    $store_location = $_POST['store_location'];
    $store_opening_time = $_POST['store_opening_time'];
    $store_closing_time = $_POST['store_closing_time'];

    $store_sql = "INSERT INTO akorede_store_table (store_name, store_location, store_opening_time, store_closing_time) 
                  VALUES ('$store_name', '$store_location', '$store_opening_time', '$store_closing_time')";

    if ($conn->query($store_sql) === TRUE) {
        $store_id = $conn->insert_id; 


        foreach ($_POST['product_name'] as $index => $product_name) {
            $quantity = $_POST['quantity'][$index];
            $description = $_POST['description'][$index];
            $price = $_POST['price'][$index];
            $category = $_POST['category'][$index];

            $product_sql = "INSERT INTO akorede_product_table (store_id, product_name, quantity, description, price, category) 
                            VALUES ('$store_id', '$product_name', '$quantity', '$description', '$price', '$category')";
            $conn->query($product_sql);
        }

        echo "Store and products created successfully!";
    } else {
        echo "Error: " . $store_sql . "<br>" . $conn->error;
    }
}
?>
