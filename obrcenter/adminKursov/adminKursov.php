<?php
include 'connection.php';
if (isset($_COOKIE['login'])) {
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
     <style>
     .table thead th {
     border: 2px solid #dee2e6;
     }
     .table td {
     border: 2px solid #dee2e6;
     }
     </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Панель Администратора</title>
      </head>
      <body>

              <script>
        function delete_pk_mp(eventId) {
            console.log("eventId", eventId);
        $.ajax({
        type: "GET",
        url: "ajax/delete_pk_mp.php",
        data: { eventId: eventId },
        success: function(response) {
            alert ("Мероприятие удалено");
        }
    });
}

/*function add_pk_mp() {
    let name = ""; // Замените на значение поля
    var headerOpisanie = ""; // Замените на значение поля
    var bodyOpisanie = ""; // Замените на значение поля
    var cenaOpisanie = ""; // Замените на значение поля
    var kartinka = ""; // Замените на значение поля
    var date_kursa = ""; // Замените на значение поля
    var endKurs = ""; // Замените на значение поля

    $.ajax({
        type: "POST",
        url: "add_event.php", // Замените на путь к файлу, который будет обрабатывать добавление мероприятия
        data: {
            name: name,
            headerOpisanie: headerOpisanie,
            bodyOpisanie: bodyOpisanie,
            cenaOpisanie: cenaOpisanie,
            kartinka: kartinka,
            date_kursa: date_kursa,
            endKurs: endKurs
        },
        success: function(response) {
            // Обновить таблицу после успешного добавления
            // Например, можно использовать location.reload() для перезагрузки страницы
        }
    });
}*/
</script>

        <div class="container">
          <h1>Панель Администратора</h1>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
           Повышение квалификации: Календарь мероприятий.
          </button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newUser">
            Добавить пользователя на курс
          </button>

          <!-- Модальное окно -->
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-xl" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="myModalLabel">Повышение квалификации</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">';
      include "connection.php";

      echo '<div class = "textm"> Назначение мероприятий</div>';
      $query = mysqli_query($con, "SELECT * FROM aa1_events order by date_kursa asc ");
      echo '<table class="table table-striped">';
      echo '<thead><tr><th>ID Events</th><th>Мероприятие</th><th>headerOpisanie</th><th>bodyOpisanie</th><th>cenaOpisanie</th><th>kartinka</th><th>Дата начала</th><th>Дата окончания</th></tr></thead>';
      echo '<tbody>';
      while ($row = mysqli_fetch_assoc($query)) {
        echo '<tr>';
        $eventID = $row['id_events'];
        echo '<td><button type="button" class="btn btn-danger" onclick="delete_pk_mp(' . $eventID . ')">Удалить</button></td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['headerOpisanie'] . '</td>';
        echo '<td>' . $row['bodyOpisanie'] . '</td>';
        echo '<td>' . $row['cenaOpisanie'] . '</td>';
        echo '<td>' . $row['kartinka'] . '</td>';
        echo '<td>' . $row['date_kursa'] . '</td>';
        echo '<td>' . $row['endKurs'] . '</td>';
        echo '</tr>';

      }
      echo '<tr><td><button type="button" class="btn btn-success" onclick="add_pk_mp()">Добавить</button></td></tr>';
      echo '</tbody>';
      echo '</table>';

      echo '<hr>';
      echo '<hr>';
      echo '<hr>';

      echo '<div class = "textm"> Записи пользователей</div>';

      $query = mysqli_query($con, "SELECT aa1_povishenie_events_visitors.*,
     aa1_events.name AS event_name , aa1_events.endKurs AS endKurs
    FROM aa1_povishenie_events_visitors
    INNER JOIN aa1_events
        ON aa1_povishenie_events_visitors.id_events = aa1_events.id_events");
      echo '<table class="table table-striped">';
      echo '<thead><tr><th>ID</th><th>Имя</th><th>Email</th><th>Телефон</th><th>Мероприятие</th><th>IP Address</th><th>Дата начала</th><th>Дата окончания</th></tr></thead>';
      echo '<tbody>';
      while ($row = mysqli_fetch_assoc($query)) {
        echo '<tr>';
        echo '<td>' . $row['id_povishenie_events_visitors'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['event_name'] . '</td>';
        echo '<td>' . $row['ip_address'] . '</td>';
        echo '<td>' . $row['date_kursa'] . '</td>';
        echo '<td>' . $row['endKurs'] . '</td>';
        echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';

      echo '<hr>';

      $query = mysqli_query($con, "SELECT aa1_povishenie_events_visitors.id_events,
       aa1_events.name, COUNT(*) AS count_users , aa1_events.endKurs AS endKurs,  aa1_events.date_kursa AS date_kursa
FROM aa1_povishenie_events_visitors
    INNER JOIN aa1_events
        ON aa1_povishenie_events_visitors.id_events = aa1_events.id_events
GROUP BY aa1_povishenie_events_visitors.id_events");
      echo '<table class="table table-striped">';
      echo '<thead><tr><th>Event Name</th><th>Количество пользователей</th></tr></thead>';
      echo '<tbody>';
      while ($row = mysqli_fetch_assoc($query)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['count_users'] . '</td>';
        echo '<td>' . $row['date_kursa'] . '</td>';
        echo '<td>' . $row['endKurs'] . '</td>';
        echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';

      $query = mysqli_query($con, "SELECT SUM(count_users) AS total_users FROM (SELECT aa1_povishenie_events_visitors.id_events, COUNT(*) AS count_users FROM aa1_povishenie_events_visitors INNER JOIN aa1_events ON aa1_povishenie_events_visitors.id_events = aa1_events.id_events GROUP BY aa1_povishenie_events_visitors.id_events) AS t");
      $row = mysqli_fetch_assoc($query);
      echo '<p><b>Общая количество пользователей по всем мероприятиям: ' . $row['total_users'] . '</b></p>';


      echo '
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Модальное окно -->
                    <!-- Модальное окно -->
          <div class="modal fade" id="newUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
      $query = mysqli_query($con, "SELECT * FROM `users` WHERE id_role = 600");
      echo '<table class="table table-striped">';
      echo '<thead><tr><th>Name</th><th>login</th><th>password</th><th>Date Kursa</th></tr></thead>';
      echo '<tbody>';
      while ($row = mysqli_fetch_assoc($query)) {
        echo '<tr>';
        echo '<td>' . $row['id_povishenie_events_visitors'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['phone'] . '</td>';
        echo '<td>' . $row['event_name'] . '</td>';
        echo '<td>' . $row['ip_address'] . '</td>';
        echo '<td>' . $row['date_kursa'] . '</td>';
        echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';

      echo '<hr>';

      $query = mysqli_query($con, "SELECT aa1_povishenie_events_visitors.id_events,
       aa1_events.name, COUNT(*) AS count_users
FROM aa1_povishenie_events_visitors
    INNER JOIN aa1_events
        ON aa1_povishenie_events_visitors.id_events = aa1_events.id_events
GROUP BY aa1_povishenie_events_visitors.id_events");
      echo '<table class="table table-striped">';
      echo '<thead><tr><th>Event Name</th><th>Количество пользователей</th></tr></thead>';
      echo '<tbody>';
      while ($row = mysqli_fetch_assoc($query)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['count_users'] . '</td>';
        echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';

      $query = mysqli_query($con, "SELECT SUM(count_users) AS total_users FROM (SELECT aa1_povishenie_events_visitors.id_events, COUNT(*) AS count_users FROM aa1_povishenie_events_visitors INNER JOIN aa1_events ON aa1_povishenie_events_visitors.id_events = aa1_events.id_events GROUP BY aa1_povishenie_events_visitors.id_events) AS t");
      $row = mysqli_fetch_assoc($query);
      echo '<p><b>Общая количество пользователей по всем мероприятиям: ' . $row['total_users'] . '</b></p>';
      echo '
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Модальное окно -->
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
