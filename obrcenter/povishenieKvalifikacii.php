<!DOCTYPE html>
<html lang="ru">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script>
    function getCookie(name) {
      let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
      return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    function logKurs(element)
    {
      let loginUser = getCookie('login');
      if (getCookie('login') === undefined ){
        alert  ("ne login");

      }
      else{

        $.ajax({
        url:"ajax/getUserInfo.php",
        method:"GET",
        data:{loginUser:loginUser}
      }).done(function (response)
      {
        let data = JSON.parse(response); // Parse the JSON response

        if (data.id_role == 600) {
          let id = element.id.match(/\d+/)[0];
          if(data.spisok_kursov.split(";").indexOf(id.toString()) !== -1){
            location.href = 'index.php?kurs'+id;
          }
          else {
            alert ("Вам недоступен этот курс");
          }

        }
        else {
          alert ("Вам недоступен этот курс");
        }
      });
    }
    }
  </script>
  <title>Повышение квалификации</title>
</head>
<body>
  <div class="container">
    <h1>Повышение квалификации</h1>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="imgs/pechat-kalendarei-1.jpg" class="card-img-top" alt="Курс 1">
          <div class="card-body" >
            <h5 class="card-title">Календарь мероприятий</h5>
            <p class="card-text">Здесь вы можете ознакомиться с мероприятиями и записаться.</p>
            <a href="index.php?pk_kalendarMp" class="btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="imgs/uchebnieprog.png" class="card-img-top" alt="Курс 2">
          <div class="card-body">
            <h5 class="card-title">Учебные программы</h5>
            <p class="card-text">Описание курса 2</p>
            <a href="index.php?edPrograms" class="btn btn-primary" >Подробнее</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="imgs/docs.jpg" class="card-img-top" alt="Курс 3">
          <div class="card-body">
            <h5 class="card-title">Необходимые документы</h5>
            <p class="card-text">Здесь вы можете ознакомиться со всеми необходимыми документами.</p>
            <a href="index.php?edDocs" class="btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>
    </div>

    <div class="row">

      <div class="col-md-4">
        <div class="card">
          <img src="imgs/kurs1.png" class="card-img-top" alt="Курс 1" >
          <div class="card-body" >
            <h5 class="card-title" >Учебный курс 1</h5>
            <p class="card-text">Здесь должна быть информация о курсе.</p>
            <a id="uchebKurs1" href="#" class="btn btn-primary" onclick="logKurs(this)">Подробнее</a>
          </div>
        </div>
      </div>


      <div class="col-md-4">
        <div class="card">
          <img src="imgs/kurs2.jpg" class="card-img-top" alt="Курс 2">
          <div class="card-body">
            <h5 class="card-title"  >Учебный курс 2</h5>
            <p class="card-text">Здесь должна быть информация о курсе.</p>
            <a id="uchebKurs2" onclick="logKurs(this)" href="#" class="btn btn-primary">Подробнее</a>
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

