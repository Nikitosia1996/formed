<?php
include 'connection.php';
$loginUser = $_COOKIE['login'];
$response = array();
$querrySel = mysqli_query($con, "SELECT * FROM   users   WHERE login='$loginUser'");
if (mysqli_num_rows($querrySel) > 0 ) {
  $row = mysqli_fetch_assoc($querrySel);
  $response['id_role'] = $row['id_role'];
  $response['login'] = $row['login'];

  if (response['id_role'] == '500') {
    echo "
      <!DOCTYPE html>
      <html lang='ru'>
      <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Панель Администратора</title>
      </head>
      <body>
        <div class='container'>
          <h1>Панель Администратора</h1>
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
        <title>Недоступная страница</title>
      </head>
      <body>
        <div class='container'>
          <h1></h1>
          <p>Вам недоступна  эта страница.</p>
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
