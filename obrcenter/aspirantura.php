<!DOCTYPE html>
<html lang="ru">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <title>Аспирантура</title>
</head>
<body>
  <div class="container">
    <h1>Аспирантура</h1>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="imgs/pechat-kalendarei-1.jpg" class="card-img-top" alt="Курс 1">
          <div class="card-body" >
            <h5 class="card-title">Календарь мероприятий</h5>
            <p class="card-text">Здесь вы можете ознакомиться с мероприятиями и записаться.</p>
            <a href="index.php?as_kalendarMp" class="btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="imgs/docs.jpg" class="card-img-top" alt="Курс 3">
          <div class="card-body">
            <h5 class="card-title">Необходимые документы</h5>
            <p class="card-text">Здесь вы можете ознакомиться со всеми необходимыми документами.</p>
            <a href="index.php?asDocs" class="btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="imgs/uchebnieprog.png" class="card-img-top" alt="Курс 2">
          <div class="card-body">
            <h5 class="card-title">Вопросы к кандидатскому экзамену</h5>
            <p class="card-text">Список вопросов для ознакомления</p>
            <a href="index.php?asQuestions" class="btn btn-primary" >Подробнее</a>
          </div>
        </div>
      </div>


    </div>

    <div class="row">

      <div class="col-md-4">
        <div class="card">
          <img src="imgs/kurs1.png" class="card-img-top" alt="Курс 1" >
          <div class="card-body" >
            <h5 class="card-title" >Портфолио аспиранта</h5>
            <p class="card-text">Комплект документов, представляющий собой форму учета и предъявления образовательных, научно-исследовательских и педагогических достижений аспиранта в одной или нескольких областях, характеризующих его квалификацию (компетентность).</p>
            <a href="index.php?asPortfolio" class="btn btn-primary" onclick="logKurs(this)">Подробнее</a>
          </div>
        </div>
      </div>

    </div>

  </div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

