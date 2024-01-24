<?php
include '../connection.php';
$ipAddress = $_SERVER['REMOTE_ADDR'];
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$selectedValue1 = $_GET['selectedValue1'];

$checkIpQuery = mysqli_query($con, "SELECT * FROM aa1_povishenie_events_visitors WHERE ip_address = '$ipAddress'");
if (mysqli_num_rows($checkIpQuery) > 0) {

  echo "ipInvalid";
} else {


$querrySel = mysqli_query($con, "SELECT * FROM `aa1_events` WHERE name='$selectedValue1'");
if (mysqli_num_rows($querrySel) > 0 ) //если получена одна строка
{
  $row = mysqli_fetch_assoc($querrySel);
  $id_events= $row['id_events'];
  $intertZapis = mysqli_query($con, "INSERT INTO aa1_povishenie_events_visitors (name,email,phone, id_events, ip_address)
 values ('$name', '$email','$phone', '$id_events', '$ipAddress')");
  echo "1ok";
}
else{
  echo "0error";
}
}
