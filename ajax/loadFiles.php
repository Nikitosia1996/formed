<?php
include '../connection.php';
$id_headerValue = $_GET['id_headerValue'];
$result = mysqli_query($con, "SELECT *  FROM `aa1_files_material` WHERE id_headers_material = '$id_headerValue'");

$data = array();
while ($files = mysqli_fetch_assoc($result)) {
  $data[] = $files;
}

echo json_encode($data);
