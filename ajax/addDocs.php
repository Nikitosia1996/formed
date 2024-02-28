<?php

include "../connection.php";

$loginUser = $_POST['loginUser'];
$stolbecfiles = $_POST['stolbecfiles'];


$query = "SELECT aa1_practikant.*
    FROM aa1_practikant
    INNER JOIN users
        ON aa1_practikant.id_user = users.id_user
        WHERE users.login = '$loginUser' ";

$rez = mysqli_query($con, $query) or die("Ошибка " . mysqli_error($con));



if(mysqli_num_rows($rez) == 1){
  $row = mysqli_fetch_assoc($rez);
  $id_practikant = $row['id_practikant'];
}


if (!file_exists('../docs/practikant/'.$loginUser)) {
  mkdir('../docs/practikant/'.$loginUser , 0777, true);
}


if (isset($_FILES['addedFile']['name'])) {
  $file_name = $_FILES['addedFile']['name'];
  $file_tmp = $_FILES['addedFile']['tmp_name'];

  move_uploaded_file($file_tmp, "../docs/practikant/" . $loginUser.'/'. $file_name);

  $insertquery =
    "UPDATE aa1_practikant SET $stolbecfiles = CONCAT(IFNULL($stolbecfiles, ''), '$file_name;') WHERE id_practikant = '$id_practikant';";

  $result = mysqli_query($con, $insertquery) or die("Ошибка " . mysqli_error($con));
}
mysqli_close($con);
