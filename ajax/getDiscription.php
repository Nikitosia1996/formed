<?php
include '../connection.php';
$aelVal = $_GET['selectedValue1'];
$querrySel = mysqli_query($con, "SELECT * FROM `aa1_events` WHERE name='$aelVal'");
if (mysqli_num_rows($querrySel) > 0 ) //если получена одна строка
{
  $row = mysqli_fetch_assoc($querrySel);
  $newOpisanie= $row['opisanie'];
  echo $newOpisanie;
}
else{
  echo "No data error";
}
