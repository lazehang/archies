<?php

require '../includes/db.php';
$id = $_GET['id'];
$row = mysqli_query($conn, "SELECT * FROM products WHERE id = '$id'")->fetch_assoc();
$file = $row['src'];
$file_loc = "../img/products/";

mysqli_query($conn, "DELETE FROM products WHERE id = '$id'");
unlink($file_loc.$file);
header('location:products');