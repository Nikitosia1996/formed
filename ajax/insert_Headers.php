<?php
include '../connection.php';
$url = $_GET['url'];
$textForZagolovok = $_GET['textForZagolovok'];

  if (mysqli_query($con, "INSERT INTO aa1_headers_material (name, url_stranici)
 values ('$textForZagolovok', '$url')")){
    echo "Добавили";
  }

