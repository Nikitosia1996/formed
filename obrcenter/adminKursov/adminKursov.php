<?php
include 'connection.php';
$loginUser = $_COOKIE['login'];
$response = array();
$querrySel = mysqli_query($con, "SELECT * FROM users WHERE login='$loginUser'");
if (mysqli_num_rows($querrySel) > 0) {
  $row = mysqli_fetch_assoc($querrySel);
  $response['id_role'] = $row['id_role'];
  $response['login'] = $row['login'];

  if ($response['id_role'] == '500') {
    echo '
      <!DOCTYPE html>
      <html lang="ru">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Панель Администратора</title>
      </head>
      <body>
        <div class="container">
          <h1>Панель Администратора</h1>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            Открыть модальное окно
          </button>

          <!-- Модальное окно -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Таблица из базы данных</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">';
    include "connection.php";
    $query = mysqli_query($con, "SELECT * FROM aa1_povishenie_events_visitors");
    echo '<table class="table table-striped">';
    echo '<thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>ID Events</th><th>IP Address</th><th>Date Kursa</th></tr></thead>';
    echo '<tbody>';
    while ($row = mysqli_fetch_assoc($query)) {
      echo '<tr>';
      echo '<td>'.$row['id_povishenie_events_visitors'].'</td>';
      echo '<td>'.$row['name'].'</td>';
      echo '<td>'.$row['email'].'</td>';
      echo '<td>'.$row['phone'].'</td>';
      echo '<td>'.$row['id_events'].'</td>';
      echo '<td>'.$row['ip_address'].'</td>';
      echo '<td>'.$row['date_kursa'].'</td>';
      echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
    echo '
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
      </html>
    ';
  } else {
    echo '
      <!DOCTYPE html>
      <html lang="ru">
      <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Недоступная страница</title>
      </head>
      <body>
        <div class="container">
          <h1></h1>
          <p>Вам недоступна эта страница.</p>
        </div>
      </body>
      </html>
    ';
  }
} else {
  echo '
    <!DOCTYPE html>
    <html lang="ru">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Неавторизированный пользователь</title>
    </head>
    <body>
      <div class="container">
        <h1>Неавторизированный пользователь</h1>
        <p>Вы не авторизированы.</p>
      </div>
    </body>
    </html>
  ';
}
?>
