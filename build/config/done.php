<?php
include "connection.php";


$query = "delete from archive_akusherstvo";
//
$rez = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));
?>
