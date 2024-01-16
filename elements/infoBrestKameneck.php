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
  .butsavetbl {
    position: absolute;
    left: 723px;
    font-size: 24px;
    margin-top: 14px;
  }
  .medPasport{
      margin-left: 50px;
      margin-top: 20px;
      width: 90%;
      height: auto;
  }
</style>
<div>
  <div>
    <div>
      <div>
        <div>
          <div>
            <div>
              <div>
                <div>
                    <p align="center"><b> Медицинский паспорт Каменецкого района на 01.10.2023</b></p>


                    <img class = "medPasport" src="imgs/kamenec.jpg" alt="">
                  <p align="center"><b>Сеть организаций здравоохранения района.</b></p>
                  <p style="margin-left:35.25pt;">&nbsp;</p>
                  <ol>
                    <li align="center"><b>Больничные организации</b></li>
                  </ol>
                  <div id="table_404">
                    <?php
                    include '../connection.php';
                    $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 404");

                    if (mysqli_num_rows($rez)==1)
                    {
                      $row = mysqli_fetch_assoc($rez);
                      echo $row['html_text'];
                    }
                    ?>

                  </div>
                  <button id = "btn_404" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>
                  <p style="margin-left:35.25pt;">&nbsp;</p>
                  <p align="center"><b>2. Амбулатории врача общей практики (АВОП) &ndash; 7</b></p>
                  <div id="table_405">
                    <?php
                    include '../connection.php';
                    $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 405");

                    if (mysqli_num_rows($rez)==1)
                    {
                      $row = mysqli_fetch_assoc($rez);
                      echo $row['html_text'];
                    }
                    ?>

                  </div>
                  <button id = "btn_405" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>
                  <p>&nbsp;</p>
                  <p align="center" style="margin-left:36.0pt;"><b>3.Фельдшерско-акушерских пунктов (ФАП)</b> <b>&ndash; 13</b></p>
                  <div id="table_406">
                    <?php
                    include '../connection.php';
                    $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 406");

                    if (mysqli_num_rows($rez)==1)
                    {
                      $row = mysqli_fetch_assoc($rez);
                      echo $row['html_text'];
                    }
                    ?>

                  </div>
                  <button id = "btn_406" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>
                </div>
                <p align="center">&nbsp;</p>
                <p align="center"><b>4. Число должностей (штатных и занятых) и численность основных </b></p>
                <p align="center"><b>работников на занятых должностях организаций здравоохранения района</b></p>
                <div id="table_407">
                  <?php
                  include '../connection.php';
                  $rez = mysqli_query($con,"select `html_text` from `table_info_main` where `id_table_info_main` = 407");

                  if (mysqli_num_rows($rez)==1)
                  {
                    $row = mysqli_fetch_assoc($rez);
                    echo $row['html_text'];
                  }
                  ?>

                </div>
                <button id = "btn_407" class = "butsavetbl" onclick="savetable(this.id)"> Сохранить </button>
                <p align="center">&nbsp;</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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
    // Функция для проверки, является ли строка числом (целым или десятичным)
    function isNumber(str) {
      var pattern = /^\d*[,]?\d*$/;
      return pattern.test(str);
    }
    // Массив с IDs таблиц
    var tableIds = ['tbl404' ,'tbl405', 'tbl406', 'tbl407'];

    // Цикл по всем таблицам
    tableIds.forEach(function(tableId) {
      // Получаем таблицу по ID
      var table = document.getElementById(tableId);

      // Если таблицы с таким ID не существует, переходим к следующей итерации цикла
      if (!table) return;

      // Получаем все ячейки таблицы
      var cells = table.getElementsByTagName('td');

      // Обход всех ячеек
      for (var i = 0; i < cells.length; i++) {
        var cell = cells[i];
        var cellValue = cell.innerText.trim();

        // Проверяем, является ли содержимое ячейки числом
        if (isNumber(cellValue)) {
          // Устанавливаем атрибут contenteditable для ячейки
          cell.setAttribute('contenteditable', 'true');
        }
      }
    });
  });
</script>
