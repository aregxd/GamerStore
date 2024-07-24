<?php 

    include 'connection.php';

    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE `product_id` = $id";
    if( mysqli_query($conn, $sql)){
        header("Location: ../admincp/index.php");
        exit();
        
    }

?>
