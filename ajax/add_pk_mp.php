<?php
include '../connection.php';
$loginUser = $_GET['loginUser'];
$response = array();
$querrySel = mysqli_query($con, "SELECT * FROM `users` WHERE login='$loginUser'");
if (mysqli_num_rows($querrySel) > 0 ) //если получена одна строка
{
  $row = mysqli_fetch_assoc($querrySel);
  $response['id_role'] = $row['id_role'];
  $response['spisok_kursov'] = $row['spisok_kursov'];
}
else{
  $response['error'] = "No data error";
}
echo json_encode($response);
