<?php
include "../../connection.php";
$rowId = $_POST['rowId'];
$colId = $_POST['colId'];
$value = $_POST['value'];
$year = $_POST['year'];
$month = $_POST['month'];

$query = "SELECT * from celsExcel where id_rowsExcel = '$rowId' and id_colsExcel = '$colId' and excelMonth = '$month' and excelYear= '$year'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
if (mysqli_num_rows($result) == 1) //если получена одна строка
{
  $row = mysqli_fetch_assoc($result);
  $query =  "UPDATE  celsExcel SET  `value` = '$value' where id_rowsExcel = '$rowId' and id_colsExcel = '$colId' and excelMonth = '$month' and excelYear= '$year'"    ;
  mysqli_query($con, $query) or die(mysqli_error($con));
}
else {
  $query = "INSERT INTO celsExcel (id_rowsExcel, id_colsExcel, `value`, excelYear, excelMonth  ) VALUES ('$rowId', '$colId', '$value' , '$year' , '$month')";
  mysqli_query($con, $query) or die(mysqli_error($con));
}
?>
