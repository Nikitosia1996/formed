<?php
include '../connection.php';
$login = $_GET['loginUser'];
$name = $_GET['name'];
$university = $_GET['university'];
$level = $_GET['level'];

$querryUser = mysqli_query($con, "SELECT users.id_user
    FROM users
        WHERE users.login = '$login' ");
$id_user = mysqli_fetch_assoc($querryUser)['id_user'];

$querryUniv = mysqli_query($con, "SELECT aa1_university.id_university
    FROM aa1_university
        WHERE aa1_university.name = '$university' ");
$id_university = mysqli_fetch_assoc($querryUniv)['id_university'];
$num_practikant = mysqli_query($con, "SELECT aa1_practikant.*
    FROM aa1_practikant
    INNER JOIN users
        ON aa1_practikant.id_user = users.id_user
        WHERE users.login = '$login' ");
echo mysqli_num_rows($num_practikant);
if (mysqli_num_rows($num_practikant) > 0 ) {

  $querryUpd = mysqli_query($con, "UPDATE aa1_practikant
            SET  name='$name', id_university='$id_university', level='$level' WHERE aa1_practikant.id_user = '$id_user'");
  echo "Обновили";
} else {
  $intertZapisPractikant = mysqli_query($con, "INSERT INTO aa1_practikant (name, id_university, level, id_user)
 values ('$name', '$id_university','$level', '$id_user')");
  echo "Добавили";

}