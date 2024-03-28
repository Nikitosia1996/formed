<?php
include '../connection.php';
$selectedHeader = $_GET['selectedHeader'];
$result = mysqli_query($con, "SELECT * FROM aa1_files_material INNER JOIN aa1_headers_material ON aa1_files_material.id_headers_material = aa1_headers_material.id_headers_material WHERE aa1_headers_material.name = '$selectedHeader'");

$data = array();
while ($row = mysqli_fetch_assoc($result)) {
  $data[] = $row;
}

echo json_encode($data);
