<!DOCTYPE html>
<html lang="ru">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script>

  function logPract(element){
    location.href = 'index.php?up_stranicaRractikanta&loginUser=' + element;
  }
</script>
  <title>Все практиканты</title>
</head>
<body>
<div class="container">
  <h1>Все практиканты</h1>

  <?PHP

  $sql = "SELECT aa1_practikant.*, users.login AS login FROM `aa1_practikant`INNER JOIN `users` ON aa1_practikant.id_user=users.id_user";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
    $counter = 0;
    while($row = $result->fetch_assoc()) {
      if ($counter % 3 == 0) {
        echo "<div class='row'>";
      }

      echo '<div class="col-md-4"> <div class="card">  <div class="card-body">
              <h5 class="card-title"  >'. $row['name'] .'</h5> <p class="card-text">'. $row['type_Pract'] .'</p>
               <a id="numPract'.$row['id_practikant'] .'" onclick="logPract(\''.$row['login'].'\')" href="#" class="btn btn-primary">Подробнее</a>
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

