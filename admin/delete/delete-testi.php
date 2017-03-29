<?php

require '../../includes/db.php';
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM testimonial WHERE id = '$id'");

header('location:../testimonial.php');