<?php
include '../connection.php';
$url = $_GET['url'];
$result = mysqli_query($con, "SELECT * FROM aa1_headers_material WHERE url_stranici = '$url'");

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

echo json_encode($data);
