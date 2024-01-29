<?php
include '../connection.php';
$eventId = $_GET['eventId'];
$query = "DELETE FROM aa1_events WHERE id_events = '$eventId'";
mysqli_query($con, $query);
?>
