<?php
include '../connection.php';
$ipAddress = $_SERVER['REMOTE_ADDR'];
$name = $_GET['name'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$dateMP = $_GET['dateMP'];

$selectedValue1 = $_GET['selectedValue1'];

/*$checkIpQuery = mysqli_query($con, "SELECT * FROM aa1_events_visitors WHERE ip_address = '$ipAddress'");
if (mysqli_num_rows($checkIpQuery) > 0) {

  echo "ipInvalid";
} else {
*/
$emailUser = mysqli_query($con, "SELECT aa1_events_visitors.* , aa1_events.name
    FROM aa1_events_visitors
    INNER JOIN aa1_events
        ON aa1_events_visitors.id_events = aa1_events.id_events
        WHERE aa1_events_visitors.email = '$email' and aa1_events.date_kursa = '$dateMP' and aa1_events.name  = '$selectedValue1' ");
if (mysqli_num_rows($emailUser) > 0 ) {

  echo "emailInvalid";
} else {

$querrySel = mysqli_query($con, "SELECT * FROM `aa1_events` WHERE name='$selectedValue1' and date_kursa = '$dateMP'");

if (mysqli_num_rows($querrySel) > 0 ) //если получена одна строка
{
  $row = mysqli_fetch_assoc($querrySel);
  $id_events= $row['id_events'];
  $id_blog= $row['id_blog'];
  $intertZapis = mysqli_query($con, "INSERT INTO aa1_events_visitors (name,email,phone, id_events , date_kursa, id_blog)
 values ('$name', '$email','$phone', '$id_events' , '$dateMP', '$id_blog')");
//  mail("anastasiya.kurishko2020@gmail.com", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: ms5.g-cloud.by \r\n");
  echo "1ok";
}
else{
  echo "0error";
}
}
