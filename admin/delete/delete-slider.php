<?php

require '../../includes/db.php';
$id = $_GET['id'];
$row = mysqli_query($conn, "SELECT * FROM resposiveslider WHERE id = '$id'")->fetch_assoc();
$file = $row['src'];
$file_loc = "../img/slider/";

mysqli_query($conn, "DELETE FROM resposiveslider WHERE id = '$id'");
unlink($file_loc.$file);
header('location:../slider.php');