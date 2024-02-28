<?php
if (isset($_GET['file_name'])  && isset($_GET['loginUser']) && isset($_GET['stolbecfiles'])) {
  include "../connection.php";
  $fileName = $_GET['file_name'];
  $loginUser = $_GET['loginUser'];
  $stolbecfiles = $_GET['stolbecfiles'];
  $login = $_COOKIE["login"];
  $fileName = mysqli_real_escape_string($con, $fileName);
  $query = "SELECT $stolbecfiles FROM aa1_practikant INNER JOIN users ON aa1_practikant.id_user = users.id_user WHERE users.login = '$login'";
  $result = mysqli_query($con, $query);
  $row = mysqli_fetch_assoc($result);
  $filesString = $row[$stolbecfiles];
//  $queryPract = "SELECT id_practikant FROM aa1_practikant INNER JOIN users ON aa1_practikant.id_user = users.id_user WHERE users.login = '$login'";
//  $resultPract = mysqli_query($con, $queryPract);
//  $rowPract = mysqli_fetch_assoc($resultPract);
//  $id_practikant = $row['id_practikant'];
//  echo $id_practikant;
  $filesArray = explode(';', $filesString);
  if (($key = array_search($fileName, $filesArray)) !== false) {
    unset($filesArray[$key]);
  }
  $newFilesString = implode(';', $filesArray);
  $querryIserId = mysqli_query($con, "SELECT id_user FROM `users` WHERE login='$loginUser'");
  $id_user = mysqli_fetch_assoc($querryIserId)['id_user'];
  $updateQuery = "UPDATE aa1_practikant SET $stolbecfiles = '$newFilesString' WHERE id_user = '$id_user'";
  $updateResult = mysqli_query($con, $updateQuery);
  if ($updateResult) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false]);
  }
  mysqli_close($con);
}
?>
