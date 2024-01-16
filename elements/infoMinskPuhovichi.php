<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>

  html{
    display: flex !important;
    justify-content: center !important;
  }

  table {
    width: 98%;
    border-collapse: collapse;
    margin: auto;
  }

  table, th, td {
    border: 1px solid black;
  }

  th, td {
    padding: 10px;
    text-align: left;
  }

  th {
    text-align: center;
    background-color: #f2f2f2;
  }

  caption {
    font-weight: bold;
    font-size: 18px;
    margin-bottom: 10px;
  }
  .medPasport{
    margin-left: 50px;
    margin-top: 20px;
    width: 90%;
    height: auto;
  }


</style>
<p align="center"><b> Медицинский паспорт Пуховичского района на 01.10.2023</b></p>


<img class = "medPasport" src="imgs/puhivichsk.png" alt="">
<p align="center"><b>Сеть организаций здравоохранения района.</b></p>
<p align="center">&nbsp;</p>
<ol>
  <li align="center"><b>Больничные организации</b></li>
</ol>

<div id="table_6">
  <?php
  include '../connection.php';
  $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 6");

  if (mysqli_num_rows($rez)==1)
  {
    $row = mysqli_fetch_assoc($rez);
    echo $row['html_text'];
  }
  ?>

</div>
<style>
  .butsavetbl {
    position: absolute;
    left: 723px;
    font-size: 24px;
    margin-top: 14px;
  }
</style>
<button id = "btn_6" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>


<p align="center">&nbsp;</p>
<p align="center"><b>2. Амбулаторно-поликлинические организации</b></p>


<div id="table_7">
  <?php
  include '../connection.php';
  $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 7");

  if (mysqli_num_rows($rez)==1)
  {
    $row = mysqli_fetch_assoc($rez);
    echo $row['html_text'];
  }
  ?>

</div>

<button id = "btn_7" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>


<p align="center">&nbsp;</p>
<p align="center"><b>3. Амбулатории врача общей практики (АВОП) &ndash; 7</b></p>

<div id="table_8">
  <?php
  include '../connection.php';
  $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 8");

  if (mysqli_num_rows($rez)==1)
  {
    $row = mysqli_fetch_assoc($rez);
    echo $row['html_text'];
  }
  ?>

</div>

<button id = "btn_8" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>


<p>&nbsp;</p>
<p align="center" style="margin-left:36.0pt;"><b>4.Фельдшерско-акушерские пункты (ФАП) &ndash; </b><b>23</b></p>


<div id="table_9">
  <?php
  include '../connection.php';
  $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 9");

  if (mysqli_num_rows($rez)==1)
  {
    $row = mysqli_fetch_assoc($rez);
    echo $row['html_text'];
  }
  ?>

</div>

<button id = "btn_9" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>


<p align="center">&nbsp;</p>
<p align="center"><b>5. Число должностей (штатных и занятых) и численность основных </b></p>
<p align="center"><b>работников на занятых должностях организаций здравоохранения района</b></p>


<div id="table_10">
  <?php
  include '../connection.php';
  $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 10");

  if (mysqli_num_rows($rez)==1)
  {
    $row = mysqli_fetch_assoc($rez);
    echo $row['html_text'];
  }
  ?>

</div>
<button id = "btn_10" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>


<p>&nbsp;</p>
<script>
  function savetable(idBtn){
    let id_table = idBtn.substring(idBtn.indexOf('_') + 1, idBtn.length);
    console.log (id_table);
    let div = document.getElementById("table_" + id_table);
    $.ajax({
      url: "save_table_info.php",
      method: "POST",
      data: {id_table: id_table, htmlText: div.innerHTML},
      success: function(response) {
        alert("Таблица сохранена");
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error(textStatus, errorThrown);
      }
    });
  }

  document.addEventListener('DOMContentLoaded', function() {
    function isNumber(str) {
      var pattern = /^\d*[,]?\d*$/;
      return pattern.test(str);
    }
    var table = document.getElementById('tbl10');
    var cells = table.getElementsByTagName('td');
    for (var i = 0; i < cells.length; i++) {
      var cell = cells[i];
      var cellValue = cell.innerText.trim();
      if (isNumber(cellValue)) {
        cell.setAttribute('contenteditable', 'true');
      }
    }
  });

</script>


