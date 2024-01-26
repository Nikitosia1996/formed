<?php
include '../connection.php';
$ipAddress = $_SERVER['REMOTE_ADDR'];
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$dateMP = $_GET['dateMP'];

$selectedValue1 = $_GET['selectedValue1'];

/*$checkIpQuery = mysqli_query($con, "SELECT * FROM aa1_povishenie_events_visitors WHERE ip_address = '$ipAddress'");
if (mysqli_num_rows($checkIpQuery) > 0) {

  echo "ipInvalid";
} else {
*/
$emailUser = mysqli_query($con, "SELECT * FROM aa1_povishenie_events_visitors WHERE email = '$email'");
if (mysqli_num_rows($emailUser) > 0) {

  echo "emailInvalid";
} else {

$querrySel = mysqli_query($con, "SELECT * FROM `aa1_events` WHERE name='$selectedValue1'");
if (mysqli_num_rows($querrySel) > 0 ) //если получена одна строка
{
  $row = mysqli_fetch_assoc($querrySel);
  $id_events= $row['id_events'];
  $intertZapis = mysqli_query($con, "INSERT INTO aa1_povishenie_events_visitors (name,email,phone, id_events , date_kursa)
 values ('$name', '$email','$phone', '$id_events' , '$dateMP')");
  echo "1ok";
}
else{
  echo "0error";
}
}
