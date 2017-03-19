<?php

require '../../includes/db.php';
$id = $_GET['id'];
$row = mysqli_query($conn, "SELECT * FROM ocassion WHERE id = '$id'")->fetch_assoc();
$file = $row['src'];
$file_loc = "../img/ocassion/";

mysqli_query($conn, "DELETE FROM ocassion WHERE id = '$id'");
unlink($file_loc.$file);
header('location:../ocassion');