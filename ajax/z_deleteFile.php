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
  $filesArray = explode(';', $filesString);
  if (($key = array_search($fileName, $filesArray)) !== false) {
    unset($filesArray[$key]);
  }
  $newFilesString = implode(';', $filesArray);
  $updateQuery = "UPDATE aa1_practikant SET $stolbecfiles = '$newFilesString' WHERE id_practikant = 1";
  $updateResult = mysqli_query($con, $updateQuery);
  if ($updateResult) {
    echo json_encode(['success' => true]);
  } else {
    echo json_encode(['success' => false]);
  }
  mysqli_close($con);
}
?>
