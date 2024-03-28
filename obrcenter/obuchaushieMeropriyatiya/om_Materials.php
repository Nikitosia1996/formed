<!DOCTYPE html>
<html lang="ru">
<style>
  #myUL li a {
    border: 1px solid #ddd;
    margin-top: -1px;
    background-color: #f6f6f6;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block;
    margin-left: -4%;
  }
</style>
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="dist/js/obrJSMaterials.js"></script>
</head>
<body>
<div class="container" >

<h1>Материалы мероприятий</h1>
</div>
<div id="zagolovok"></div>


</body>
</html>

<div id="modalZagolovok" class="modal" style="display: none!important;">
  <div style="width: 40%" class="modal-dialog modal-xl">
    <div class="modal-content" style="width:100%!important;">
      <span style="text-align: right" class="close">×</span>
      <div class="modalContentInside">
        <div class = "formContainer">
          <h3 style="text-align: center;font-weight: bold; margin-bottom: 2.5rem;">Добавьте заголовок</h3>
          <input placeholder="Название" spellcheck="true" class="form-control" style="width:84%; display:inline; margin-left:7px;" type="text" id="zagolovokText" name="zagolovok" required>
          <a onclick="insertZagolovok()" class="btn btn-primary" style="margin-left:5px; margin-top:-4px;">Сохранить</a><br><br>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="modalFiles1" class="modal" style="display: none!important;">
  <div style="width: 40%" class="modal-dialog modal-xl">
    <div class="modal-content" style="width:100%!important;">
      <span style="text-align: right" class="close">×</span>
      <div class="modalContentInside">
        <div class = "formContainer">
          <h3 style="text-align: center;font-weight: bold; margin-bottom: 2.5rem;">Добавьте файл на страницу</h3>
          <label style="display:inline; margin-left:15px;">Выберите тему</label>
          <?php
          include 'connection.php';
          $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          $sql = mysqli_query ($con, "SELECT name FROM aa1_headers_material WHERE url_stranici = '$fullUrl'");
//          $defaultValue = "Default Value";

          echo '<select class="form-control" name="headers" id="headers" style="display:inline; width:75%; margin-left:44px;">';

          while ($result = mysqli_fetch_array($sql)){
//            $selected = ($result['name'] == $defaultValue) ? 'selected' : '';
            echo '<option value="'.$result['name'].'">'.$result['name'].'</option>';

          }
          echo '</select>';
          ?><br><br>
          <label style="display:inline; margin-left:15px;">Напишите название</label>
          <input placeholder="Название файла" spellcheck="true" class="form-control" style="width:75%; display:inline; margin-left:7px;" type="text" id="fileTextInput" name="zagolovok" required><br><br>
          <input onchange="insertFile(this)" class  = "otzivFiles" type="file" id="otzivPract" style="margin-left: 15px;" />
          <a onclick="insertFile()" class="btn btn-primary" style="margin-left:47%; margin-top:-4px;">Сохранить</a><br><br>
        </div>
      </div>
    </div>
  </div>
</div>
