<?php
include '../connection.php';
$aelVal = $_GET['selectedValue1'];
$querrySel = mysqli_query($con, "SELECT * FROM `aa1_events` WHERE name='$aelVal'");
if (mysqli_num_rows($querrySel) > 0 ) //если получена одна строка
{

  $row = mysqli_fetch_assoc($querrySel);
  $response['name'] = $row['name'];
  $response['headerOpisanie'] = $row['headerOpisanie'];
  $response['bodyOpisanie'] = $row['bodyOpisanie'];
  $response['cenaOpisanie'] = $row['cenaOpisanie'];
  $response['id_events'] = $row['id_events'];
}
else{
  $response['error'] = "No data error";
}
foreach ($response as $key => $value) {
  if ($value === null) {
    $response[$key] = "";
  }
}
echo json_encode($response);
