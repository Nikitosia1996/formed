<?php
include "connection.php";


$query = "drop database formed_database";
//
$rez = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
?>
