<?php

require '../../includes/db.php';
$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM resposiveslider WHERE id = '$id'");
$row = mysqli_fetch_assoc($sql);
$file = $row['src'];
$file_loc = "../img/slider/";

mysqli_query($conn, "DELETE FROM responsiveslider WHERE id = '$id'");
unlink($file_loc.$file);
header('location:../slider.php');