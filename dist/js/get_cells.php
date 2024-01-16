<?php
include "../../connection.php";

class CelsExcel
{
  public $rowId,
   $colId,
   $value;

}
$year = $_GET['year'];
$month = $_GET['month'];

$query = "SELECT * from celsExcel where excelYear = '$year'  and excelMonth = '$month' ";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

$celsArray = [];

foreach ($data as $row )
{
  $cells = new CelsExcel();
  $cells->colId = $row ['id_colsExcel'];
  $cells->rowId = $row ['id_rowsExcel'];
  $cells->value = $row ['value'];
  array_push($celsArray,$cells );
}
echo json_encode($celsArray);

?>
