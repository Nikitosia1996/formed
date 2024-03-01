<!DOCTYPE html>
<html lang="ru">
<head>
<style>

  .file-container{
    border: 1px solid #ddd;
    margin-top: -1px;
    background-color: #f6f6f6;
    padding: 6px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block;
  }
  #file_otchet{
    padding-top: 10px;
    padding-bottom: 10px;
  }
  #otzyv_file{
    padding-top: 10px;
    padding-bottom: 10px;
  }
  #file_program{
    padding-top: 10px;
    padding-bottom: 10px;
  }
  .delete-file{
    float: right;
    font-size: 20px;
    margin-top: -10px;
  }

</style>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="dist/js/obrJS_up_stranica.js"></script>

  <title>Страница практиканта</title>
</head>
<body>
<div class="container">

<h1>Страница практиканта</h1>

<table  style="width:100%; border-style: solid; border-width: 2px;" class="table table-striped table-hover">
  <tr>
    <td style="width:20%"><p>ФИО практиканта</p></td>
  <td colspan="2" style="width:80%;"><input placeholder="ФИО" spellcheck="true" class="form-control" type="text" id="name" name="name" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Название учебного заведения</p></td>
    <td colspan="2" style="width:80%">  <?php
    include 'connection.php';
    $sql = mysqli_query ($con, "SELECT name FROM aa1_university");

    echo '<select class="form-control" name="university" id="university">';

    while ($result = mysqli_fetch_array($sql)){

      echo '<option value="'.$result['name'].'">'.$result['name'].'</option>';

    }
    echo '</select>';
    ?><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Приказ</p></td>
    <td style="width:40%;"><div style="display: flex;">№<input spellcheck="true" class="form-control" type="text" id="numPrik" name="numPrik" required></div><br></td>
    <td style="width:40%;"><div style="display: flex;">от<input  spellcheck="true" class="form-control" type="date" id="datePrik" name="datePrik" required></div><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Название специальности</p></td>
    <td colspan="2" style="width:80%"><input spellcheck="true" class="form-control" type="text" id="spec" name="spec" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Курс</p></td>
    <td colspan="2" style="width:80%"> <input  spellcheck="true" class="form-control" type="text" id="level" name="level" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Наименование практики</p></td>
    <td colspan="2" style="width:80%"> <select class="form-control" name="practType" id="pract-select">
        <option value="учебная">учебная</option>
        <option value="производственная (практика по специальности)">производственная (практика по специальности)</option>
        <option value="производственная (преддипломная практика)">производственная (преддипломная практика)</option>
      </select><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Период практики</p></td>
    <td style="width:40%"> <input  spellcheck="true" class="form-control" type="date" id="startPract" name="startPract" required><br></td>
    <td style="width:40%"> <input  spellcheck="true" class="form-control" type="date" id="endPract" name="endPract" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Контактная информация</p></td>
    <td style="width:40%"> <input placeholder="email" spellcheck="true" class="form-control" type="email" id="email" name="email" required><br></td>
    <td style="width:40%"> <input placeholder="Номер телефона" spellcheck="true" class="form-control" type="tel" id="telephoneNum" name="telephoneNum" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>ФИО руководителя практики от УО</p></td>
    <td colspan="2" style="width:80%"> <input  spellcheck="true" class="form-control" type="text" id="fioUni" name="fioUni" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Рабочий телефон</p></td>
    <td colspan="2" style="width:80%"> <input  spellcheck="true" class="form-control" type="tel" id="telUni" name="telUni" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>ФИО руководителя практики от РНПЦ МТ</p></td>
    <td colspan="2" style="width:80%"> <input  spellcheck="true" class="form-control" type="text" id="fioRnpc" name="fioRnpc" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Программа практики</p></td>
    <td colspan="2" style="width:80%"> <div id="file_program"></div><input onchange="addFile(this)" class  = "programFiles" type="file" id="programPract" multiple /><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Отчет о прохождении</p></td>
    <td colspan="2" style="width:80%">  <div id="file_otchet"></div> <input onchange="addFile(this)" class  = "otchetFiles" type="file" id="otchetPract" multiple /><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Отзыв руководителя практики</p></td>
    <td colspan="2" style="width:80%"><div id = "otzyv_file"></div><input onchange="addFile(this)" class  = "otzivFiles" type="file" id="otzivPract" multiple /><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Анкета</p></td>
    <td colspan="2" style="width:80%"><button onclick="showAnketa()" class  = "inpFiles"  id="input" >Открыть</button><br></td>
  </tr>
</table>
  <a onclick="savingPraktikant()" href="#" class="btn btn-primary">Сохранить</a><br><br>

</div>

<div id="modalAnketa" class="modal">
  <div style="width: 40%" class="modal-dialog modal-xl">
    <div class="modal-content">
      <span style="text-align: right" class="close">×</span>
      <div class="modalContentInside">
        <div class = "formContainer">
            <h3 style="text-align: center;font-weight: bold; margin-bottom: 2.5rem;">Оценка практики</h3>
            <input placeholder="Оставьте комментарий" spellcheck="true" class="form-control" type="text" id="ostavite" name="name" required><br>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

