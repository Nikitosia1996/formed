<?php
include '../connection.php';
$loginUser = $_GET['loginUser'];
$response = array();
$querryIserId = mysqli_query($con, "SELECT id_user FROM `users` WHERE login='$loginUser'");
$id_user = mysqli_fetch_assoc($querryIserId)['id_user'];
$querryPractikant = mysqli_query($con, "SELECT aa1_practikant.*, aa1_university.name AS uniname FROM `aa1_practikant` INNER JOIN `aa1_university` ON aa1_university.id_university = aa1_practikant.id_university WHERE id_user='$id_user'");
if (mysqli_num_rows($querryPractikant) > 0 ) //если получена одна строка
{
  $row = mysqli_fetch_assoc($querryPractikant);
  $response['name'] = $row['name'];
  $response['level'] = $row['level'];
  $response['otzivPract'] = $row['otzivPract'];
  $response['otchetPract'] = $row['otchetPract'];


  $response['uniname'] = $row['uniname'];
}
else{
  $response['error'] = "No data error";
}
echo json_encode($response);
