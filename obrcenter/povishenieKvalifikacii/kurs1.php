<?php
include 'connection.php';
$loginUser = $_COOKIE['login'];
$response = array();
$querrySel = mysqli_query($con, "SELECT * FROM   users   WHERE login='$loginUser'");
if (mysqli_num_rows($querrySel) > 0 ) {
  $row = mysqli_fetch_assoc($querrySel);
  $response['id_role'] = $row['id_role'];
  $response['spisok_kursov'] = $row['spisok_kursov'];
  $allowedCourses = explode(";", $response['spisok_kursov']);
  $courseId = 1;

  if (in_array($courseId, $allowedCourses)) {
    echo "
      <!DOCTYPE html>
      <html lang='ru'>
      <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Курс 1</title>
      </head>
      <body>
        <div class='container'>
          <h1>Курс 1</h1>
        </div>
      </body>
      </html>
    ";
  } else {
    echo "
      <!DOCTYPE html>
      <html lang='ru'>
      <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Недоступный курс</title>
      </head>
      <body>
        <div class='container'>
          <h1>Недоступный курс</h1>
          <p>Вам недоступен этот курс.</p>
        </div>
      </body>
      </html>
    ";
  }
} else {
  echo "
    <!DOCTYPE html>
    <html lang='ru'>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Неавторизированный пользователь</title>
    </head>
    <body>
      <div class='container'>
        <h1>Неавторизированный пользователь</h1>
        <p>Вы не авторизированы.</p>
      </div>
    </body>
    </html>
  ";
}
?>
