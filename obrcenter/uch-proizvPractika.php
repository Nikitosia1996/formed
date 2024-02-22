<!DOCTYPE html>
<html lang="ru">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script>
    function getCookie(name) {
      let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
      return matches ? decodeURIComponent(matches[1]) : undefined;
    }

    function logSTR(element)
    {
      let loginUser = getCookie('login');
      if (getCookie('login') === undefined ){
        alert  ("Вы не авторизированы");

      }
      else{

        $.ajax({
          url:"ajax/getUserInfo.php",
          method:"GET",
          data:{loginUser:loginUser}
        }).done(function (response)
        {
          let data = JSON.parse(response);

          if (data.id_role == 700 || data.id_role == 500) {
            location.href = 'index.php?up_stranicaRractikanta';
          }
          else {
            alert ("Вам недоступен этот курс");
          }
        });
      }
    }
  </script>

  <title>Учебная/производственная практика студентов</title>
</head>
<body>
  <div class="container">
    <h1>Учебная/производственная практика студентов</h1>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img src="../imgs/docs.jpg" class="card-img-top" alt="Курс 1">
          <div class="card-body" >
            <h5 class="card-title">Необходимые документы</h5>
            <p class="card-text">Здесь вы можете найти все необходимые документы.</p>
            <a href="../index.php?upDocs" class="btn btn-primary">Подробнее</a>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card">
          <img src="../imgs/uchebnieprog.png" class="card-img-top" alt="Курс 2">
          <div class="card-body">
            <h5 class="card-title">Страница практиканта</h5>
            <p class="card-text">Здесь вы можете ознакомиться со страницами практиканта</p>
            <a onclick="logSTR(this)" href="#" class="btn btn-primary" >Подробнее</a>
          </div>
        </div>
      </div>

    </div>

  </div>




</body>
</html>

