<?php
include '../connection.php';
$selectedHeader = $_GET['selectedHeader'];
$fileTextInput = $_GET['fileTextInput'];
$fileName = $_GET['fileName'];

$querry_id_header = mysqli_query($con, "SELECT aa1_headers_material.id_headers_material
    FROM aa1_headers_material
        WHERE aa1_headers_material.name = '$selectedHeader' ");
$id_header = mysqli_fetch_assoc($querry_id_header)['id_headers_material'];


  if (mysqli_query($con, "INSERT INTO aa1_files_material(name, file, id_headers_material)
 values ('$fileTextInput', '$fileName', '$id_header')")){
    echo $id_header;
  }

