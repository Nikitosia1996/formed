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
<p align="center"><b> Медицинский паспорт Минского района на 01.10.2023</b></p>


<img class = "medPasport" src="imgs/medPasportMinsk.png" alt="">

<p align="center"><b>Сеть организаций здравоохранения района.</b></p>
<p>&nbsp;</p>
<ol>
  <li align="center"><b>Больничные организации</b></li>
</ol>
<div id="table_1">
<?php
include '../connection.php';
$rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 1");

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
<button id = "btn_1" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>


<p>&nbsp;</p>
<p align="center"><b>2. Амбулаторно-поликлинические организации</b></p>
<div id="table_2">
  <?php
  include '../connection.php';
  $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 2");

  if (mysqli_num_rows($rez)==1)
  {
    $row = mysqli_fetch_assoc($rez);
    echo $row['html_text'];
  }
  ?>
</div>
  <button id = "btn_2" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>

<p>&nbsp;</p>
<p align="center"><b>3.</b> <b>Амбулатории врача общей практики (АВОП) &ndash; 23</b></p>

  <div id="table_3">

    <?php
    include '../connection.php';
    $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 3");

    if (mysqli_num_rows($rez)==1)
    {
      $row = mysqli_fetch_assoc($rez);
      echo $row['html_text'];
    }
    ?>

</div>
  <button id = "btn_3" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>
<p>&nbsp;</p>
<p align="center"><b>4. Фельдшерско-акушерские пункты (ФАП) &ndash; </b><b>5</b></p>

  <div id="table_4">
    <?php
    include '../connection.php';
    $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 4");

    if (mysqli_num_rows($rez)==1)
    {
      $row = mysqli_fetch_assoc($rez);
      echo $row['html_text'];
    }
    ?>

</div>
<button id = "btn_4" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>

<p>&nbsp;</p>
<p align="center"><b>5. Число должностей (штатных и занятых) и численность основных </b></p>
<p align="center"><b>работников на занятых должностях организаций здравоохранения района</b></p>

  <div id="table_5">
    <?php
    include '../connection.php';
    $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 5");

    if (mysqli_num_rows($rez)==1)
    {
      $row = mysqli_fetch_assoc($rez);
      echo $row['html_text'];
    }
    ?>

</div>
<button id = "btn_5" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>

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
</script>
