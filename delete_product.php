

<?php
include 'includes/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $deleteQuery = "DELETE FROM akorede_product_table WHERE id = ?";
    $stmt = $conn->prepare($deleteQuery);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    header('Location: read_product.php');
}

$conn->close();
?>
