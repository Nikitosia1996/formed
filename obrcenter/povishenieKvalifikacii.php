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

    function logKurs(element)
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

        if (data.id_role == 600 || data.id_role == 500) {
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
            <p class="card-text">Здесь вы можете ознакомиться со списком учебных программ.</p>
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

    <?PHP

    $sql = "SELECT * FROM `aa1_events` WHERE id_blog=1  AND endKurs > DATE_FORMAT(NOW(), '%Y-%m-%d')";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
      $counter = 0;
      while($row = $result->fetch_assoc()) {
        if ($counter % 3 == 0) {
          echo "<div class='row'>";
        }
        $today = date("d.m.Y");
        $formattedDate = date('d.m.Y', strtotime($row['date_kursa']));
        $nachaloidet = ' ';
        if ($formattedDate>$today){
          $nachaloidet = 'Начало курса: '. $formattedDate .'';
        }
        else{
          $nachaloidet = 'Курс идет';
        }

        echo '<div class="col-md-4"> <div class="card"> <img src="imgs/' . $row['kartinka'] . '" class="card-img-top">  <div class="card-body">
              <h5 class="card-title"  >'. $row['name'] .'</h5> <p class="card-text">'. $row['bodyOpisanie'] .'</p><p class="card-text">'. $nachaloidet .'</p>
               <a id="uchebKurs'.$row['id_events'] .'" onclick="logKurs(this)" href="#" class="btn btn-primary">Подробнее</a>
               </div>
                </div>
                 </div>
          ';
        $counter++;
        if ($counter % 3 == 0) {
          echo "</div>";
        }
      }
      if ($counter % 3 != 0) {
        echo "</div>";
      }
    } else {
      echo "Нет данных";
    }
    ?>
  </div>
</body>
</html>

