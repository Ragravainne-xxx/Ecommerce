<?php

if(!empty($_GET['product_id'])){
    require_once 'includes/connection.php';

    $product_id = $_GET['product_id'];
    $del_query = "DELETE FROM `products` WHERE id = '".$product_id."'";
    $result = mysqli_query($conn, $del_query);
    if($result){
        header('Location: retrieve.php');
    }
}