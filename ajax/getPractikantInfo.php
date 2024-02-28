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
  $response['numPrikaz'] = $row['numPrikaz'];
  $response['datePrikaz'] = $row['datePrikaz'];
  $response['programPract'] = $row['programPract'];
  $response['otchetPract'] = $row['otchetPract'];
  $response['otzivPract'] = $row['otzivPract'];
  $response['uniname'] = $row['uniname'];
  $response['name_Spec'] = $row['name_Spec'];
  $response['type_Pract'] = $row['type_Pract'];
  $response['Pract_start'] = $row['Pract_start'];
  $response['Pract_end'] = $row['Pract_end'];
  $response['pract_email'] = $row['pract_email'];
  $response['pract_num'] = $row['pract_num'];
  $response['FIO_rukovod_uo'] = $row['FIO_rukovod_uo'];
  $response['work_phone'] = $row['work_phone'];
  $response['FIO_rukovod_rnpcmt'] = $row['FIO_rukovod_rnpcmt'];

}
else{
  $response['error'] = "No data error";
}
echo json_encode($response);
