<?php
include '../connection.php';

$id_table = $_POST['id_table'];
$html_text = $_POST['htmlText'];


  $query = "UPDATE table_info_main SET html_text='$html_text' WHERE id_table_info_main = '$id_table'";
  //$query = "INSERT INTO table_info_main  (id_karta_oblasti,	id_karta_rayon,html_text) VALUES (5,1,'$html_text')";
  mysqli_query($con, $query);

?>
