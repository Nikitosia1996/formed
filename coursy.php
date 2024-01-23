<?php
echo'<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Образовательный центр</title>
</head>
<body>
  <div class="container">
    <h1 style="text-align: center; padding-bottom: 30px;">Образовательный центр</h1>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="imgs/povishenie.jpg" class="card-img-top" alt="Повышение квалификации">
          <div class="card-body" onclick="location.href=\'index.php?povishenieKvalifikacii\'">
            <h5 class="card-title">Повышение квалификации</h5>
            <p class="card-text">Повышение квалификации обеспечивает углубление профессиональных знаний и умений и является обязательным для каждого специалиста.</p>
            <a href="index.php?povishenieKvalifikacii" class="btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="imgs/obuchaushiemer.jpg" class="card-img-top" alt="Курс 2">
          <div class="card-body">
            <h5 class="card-title">Обучающие мероприятия</h5>
            <p class="card-text">Позволяют повысить осведомленность и осознанность сотрудников, эффективность и уверенность, а также получить практические рекомендации.</p>
            <a href="#" class="btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="imgs/vnutr.jpg" class="card-img-top" alt="Курс 3">
          <div class="card-body">
            <h5 class="card-title">Внутреннее обучение сотрудников РНПЦ МТ</h5>
            <p class="card-text">Внутреннее обучение представляет собой лекции, семинары, тренинги, которые проводят специалисты РНПЦ МТ.</p>
            <a href="#" class="btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>';
?>
