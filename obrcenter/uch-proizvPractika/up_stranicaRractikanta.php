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
    function savingPraktikant(){
      let loginUser = getCookie('login');
      let name1 = document.getElementById('name');
      let university1 = document.getElementById('university');
      let level1 = document.getElementById('level');
      let name = name1.value;
      let university = university1.value;
      let level = level1.value;
      $.ajax({
        url: "ajax/insertInfoPractikant.php",
        method: "GET",
        data: {loginUser:loginUser, name:name, university:university, level:level}
      }).done(function(response) {
        // Код, который будет выполняться после успешного выполнения запроса
        console.log("AJAX запрос выполнен успешно");
        console.log(response); // Вывести ответ от сервера в консоль
      }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error("AJAX запрос не удался: " + errorThrown);
      });

    }
    function insertSomeInfo(){
      let labelName = document.getElementById('name');
      let labelUniversity = document.getElementById('university');
      let labelLevel = document.getElementById('level');

      let divForOtchet = document.getElementById('otzyv_file');
      let divFile_otchet = document.getElementById('file_otchet');

      let loginUser = getCookie('login');
      $.ajax({
        url:"ajax/getPractikantInfo.php",
        method:"GET",
        data:{loginUser:loginUser}
      }).done(function (response) {
        let data = JSON.parse(response);
        labelName.value = data.name;
        labelLevel.value = data.level;
        labelUniversity.value = data.uniname;



        let otchetPractFiles = data.otchetPract.split(';');
        otchetPractFiles.forEach((file,index) => {
          if(index != otchetPractFiles.length - 1) {
            divFile_otchet.insertAdjacentHTML("beforeend", "<div class = 'file-container'><a target='_blank' href='/docs/practikant/" + loginUser + "/" + file + "'>" + file + "</a>" +
              "<span onclick='z_deleteFile(\"" + file + "\", \"otchetPract\" );' class='delete-file' id='otchetPract" + file + "' style='cursor: pointer; padding-left: 10px;'>×</span></div>");
          }

        });
        let otzivPractFiles = data.otzivPract.split(';');
        otzivPractFiles.forEach((file,index) => {
          if(index != otzivPractFiles.length - 1) {
            divForOtchet.insertAdjacentHTML("beforeend", "<div class = 'file-container'><a target='_blank' href='/docs/practikant/" + loginUser + "/" + file + "'>" + file + "</a>" +
              "<span onclick='z_deleteFile(\"" + file + "\", \"otzivPract\" );' class='delete-file'  style='cursor: pointer; padding-left: 10px;'>×</span></div>");
          }
        });
        // let otchetPractFiles = data.otchetPract.split(';');
        // otchetPractFiles.forEach(function (file) {
        //   divFile_otchet.insertAdjacentHTML("beforeend", "<a target='_blank' href='/docs/practikant/" + loginUser + "/" + file + "'>" + file + "</a><br>");
        // });
    //    divForOtchet.insertAdjacentHTML("afterend", "<a target='_blank' href='/docs/practikant" + loginUser + "/" + data.otzivPract + "'>" + data.otzivPract + "</a>");
      //  divFile_otchet.insertAdjacentHTML("afterend", "<a target='_blank' href='/docs/practikant" + loginUser + "/" + data.otchetPract + "'>" + data.otchetPract + "</a>");

      }).fail(function(jqXHR, textStatus, errorThrown) {
        console.error("AJAX запрос не удался: " + errorThrown);
      });
      }
    window.onload = insertSomeInfo;
    //---
    function addFile(input) {
      let loginUser = getCookie('login');
      let divA = input.previousElementSibling;
      let arrayDives = divA.childNodes;
      let stolbecfiles = input.id;
      let arrayFiles = [];
      arrayDives.forEach(item => {
        arrayFiles.push(item.children[0].innerText)
      });
      let xhr = new XMLHttpRequest(),
        form = new FormData();
      let addedFile = input.files[0];
      let fileName = addedFile.name;
      if(arrayFiles.indexOf(fileName) < 0) {
        console.log (stolbecfiles + "fieeee")
        form.append("loginUser", loginUser);
        form.append("stolbecfiles", stolbecfiles);
        form.append("addedFile", addedFile);

        xhr.open("post", "ajax/addDocs.php", true);

        let load = document.createElement("div");
        // load.innerHTML = "Подождите, идет загрузка";
        divA.insertAdjacentElement("afterend", load);

        xhr.upload.onprogress = function (event) {
          if (event.lengthComputable) {
            let progress = (event.loaded / event.total) * 100;
            load.innerHTML = "Загрузка: " + Math.round(progress) + "%";
          }

        };

        xhr.upload.onloadstart = function () {

          let fileName = addedFile.name;
          let extAr = fileName.substring(fileName.lastIndexOf('.'), fileName.length);
          console.log(extAr);
          if (fileName.length > 120) {
            alert('Слишком длинное имя файла');
            xhr.abort();
          } else {
            if (extAr !== ".pdf" && extAr !== ".PDF" && extAr !== ".docx" && extAr !== ".DOCX" &&
              extAr !== ".DOC" && extAr !== ".doc" && extAr !== ".XLSX" && extAr !== ".xlsx" &&
              extAr !== ".XLS" && extAr !== ".xls") {
              alert("Неверный формат. Допустимый формат pdf");
              xhr.abort();
            } else {
              load.innerHTML = "Подождите, идет загрузка";
              input.disabled = "true";
            }
          }
        };

        xhr.upload.onload = function () {
          input.removeAttribute("disabled");
          load.remove();
          let fileContainer = document.createElement('div');
          fileContainer.classList.add('file-container');
          let fileLink = document.createElement('a');
          fileLink.href = `/docs/practikant/${loginUser}/${addedFile.name}`;
          fileLink.textContent = addedFile.name;
          let deleteButton = document.createElement('span');
          deleteButton.classList.add('delete-file');
          deleteButton.textContent = '×';
          deleteButton.style.cursor = 'pointer';
          deleteButton.style.paddingLeft = '10px';
          deleteButton.id = 'delete_' + addedFile.name;
          deleteButton.onclick = function () {
            z_deleteFile(addedFile.name, input);
          };
          fileContainer.appendChild(fileLink);
          fileContainer.appendChild(deleteButton);
          divA.appendChild(fileContainer);
        }
        xhr.send(form);
      }else{
        alert("Файл с таким именем уже есть в этой ячейке");
      }
    }

    function z_deleteFile(fileName, span) {
      let stolbecfiles = span;
      let loginUser = getCookie('login');
      if (confirm('Вы уверены, что хотите удалить этот файл?')) {
        let url = 'ajax/z_deleteFile.php?file_name=' + encodeURIComponent(fileName)  + '&loginUser=' + loginUser + '&stolbecfiles=' + stolbecfiles;
        fetch(url)
          .then(response => response.json())
          .then(data => {
            if (data.success) {
              const fileContainers = document.getElementsByClassName('file-container');
              for (let i = 0; i < fileContainers.length; i++) {
                if (fileContainers[i].contains(document.getElementById('delete_' + fileName))) {
                  fileContainers[i].remove();
                  break;
                }
              }
            } else {
              alert('Не удалось удалить файл. Попробуйте снова.');
            }
          })
          .catch((error) => {
            console.error('Ошибка при удалении файла:', error);
            alert('Ошибка при удалении файла.');
          });
      }
    }

  </script>

  <title>Страница практиканта</title>
</head>
<body>
<div class="container">

<h1>Страница практиканта</h1>
<table style="width:100%">
  <tr>
    <td style="width:20%"><p>ФИО практиканта</p></td>
  <td style="width:80%"><input placeholder="ФИО" spellcheck="true" class="form-control" type="text" id="name" name="name" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Название учебного заведения</p></td>
    <td style="width:80%">  <?php
    include 'connection.php';
    $sql = mysqli_query ($con, "SELECT name FROM aa1_university");

    echo '<select name="university" id="university">';

    while ($result = mysqli_fetch_array($sql)){

      echo '<option value="'.$result['name'].'">'.$result['name'].'</option>';

    }
    echo '</select>';
    ?><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Приказ</p></td>
    <td style="width:40%">№<input spellcheck="true" class="form-control" type="text" id="numPrik" name="numPrik" required><br></td>
    <td style="width:40%">от<input  spellcheck="true" class="form-control" type="date" id="datePrik" name="datePrik" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Название специальности</p></td>
    <td style="width:80%"><input spellcheck="true" class="form-control" type="text" id="spec" name="spec" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Курс</p></td>
    <td style="width:80%"> <input  spellcheck="true" class="form-control" type="text" id="level" name="level" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Наименование практики</p></td>
    <td style="width:80%"> <select name="practType" id="pract-select">
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
    <td style="width:40%"> <input  spellcheck="true" class="form-control" type="email" id="email" name="email" required><br></td>
    <td style="width:40%"> <input  spellcheck="true" class="form-control" type="tel" id="telephoneNum" name="telephoneNum" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>ФИО руководителя практики от УО</p></td>
    <td style="width:80%"> <input  spellcheck="true" class="form-control" type="text" id="fioUni" name="fioUni" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Рабочий телефон</p></td>
    <td style="width:80%"> <input  spellcheck="true" class="form-control" type="tel" id="telUni" name="telUni" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>ФИО руководителя практики от РНПЦ МТ</p></td>
    <td style="width:80%"> <input  spellcheck="true" class="form-control" type="text" id="fioRnpc" name="fioRnpc" required><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Программа практики</p></td>
    <td style="width:80%"> <input class  = "progFiles" type="file" id="programPract" multiple /><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Отчет о прохождении</p></td>
    <td style="width:80%">  <div id="file_otchet"></div> <input onchange="addFile(this)" class  = "otchetFiles" type="file" id="otchetPract" multiple /><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Отзыв руководителя практики</p></td>
    <td style="width:80%"><div id = "otzyv_file"></div><input onchange="addFile(this)" class  = "otzivFiles" type="file" id="otzivPract" multiple /><br></td>
  </tr>
  <tr>
    <td style="width:20%"><p>Анкета</p></td>
    <td style="width:80%"><button class  = "inpFiles"  id="input" >Открыть</button><br></td>
  </tr>
</table>

  <a  onclick="savingPraktikant()" href="#" class="btn btn-primary">Сохранить</a><br><br>

</div>


</body>
</html>

