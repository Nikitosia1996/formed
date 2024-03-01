function getCookie(name) {
  let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
function savingPraktikant(){
  let loginUser = getCookie('login');
  let name1 = document.getElementById('name');
  let university1 = document.getElementById('university');
  let level1 = document.getElementById('level');
  let numPrikaz1 = document.getElementById('numPrik');
  let datePrikaz1 = document.getElementById('datePrik');
  let specName1 = document.getElementById('spec');
  let typePract1 = document.getElementById('pract-select');
  let startPrakt1 = document.getElementById('startPract');
  let endPrakt1 = document.getElementById('endPract');
  let practEmail1 = document.getElementById('email');
  let practNum1 = document.getElementById('telephoneNum');
  let FioPractUo1 = document.getElementById('fioUni');
  let telUniversity1 = document.getElementById('telUni');
  let FIOrnpcmt1 = document.getElementById('fioRnpc');

  let name = name1.value
  let university = university1.value
  let level = level1.value
  let numPrikaz =numPrikaz1.value
  let datePrikaz =datePrikaz1.value
  let specName = specName1.value
  let typePract = typePract1.value
  let startPrakt = startPrakt1.value
  let endPrakt = endPrakt1.value
  let practEmail =practEmail1.value
  let practNum = practNum1.value
  let FioPractUo = FioPractUo1.value
  let telUniversity = telUniversity1.value
  let FIOrnpcmt = FIOrnpcmt1.value

  console.log("level" + level);

  $.ajax({
    url: "ajax/insertInfoPractikant.php",
    method: "GET",
    data: {loginUser:loginUser, name:name, university:university, level:level, numPrikaz:numPrikaz, datePrikaz:datePrikaz, specName:specName, typePract:typePract, startPrakt:startPrakt, endPrakt:endPrakt, practEmail:practEmail, practNum:practNum, FioPractUo:FioPractUo, telUniversity:telUniversity, FIOrnpcmt:FIOrnpcmt}
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
  let numPrikaz = document.getElementById('numPrik');
  let datePrikaz = document.getElementById('datePrik');
  let specName = document.getElementById('spec');
  let typePract = document.getElementById('pract-select');
  let startPrakt = document.getElementById('startPract');
  let endPrakt = document.getElementById('endPract');
  let emailPrakt = document.getElementById('email');
  let numPrakt = document.getElementById('telephoneNum');
  let fioUni = document.getElementById('fioUni');
  let telUni = document.getElementById('telUni');
  let fioRnpc = document.getElementById('fioRnpc');
  let divForOtchet = document.getElementById('otzyv_file');
  let divFile_otchet = document.getElementById('file_otchet');
  let divFile_program = document.getElementById('file_program');
  let loginUser = getCookie('login');

  $.ajax({
    url:"ajax/getPractikantInfo.php",
    method:"GET",
    data:{loginUser:loginUser}
  }).done(function (response) {

    let data = JSON.parse(response);
    if (data.error =="No data error"){

    }
    else {
      labelName.value = data.name;
      labelLevel.value = data.level;
      labelUniversity.value = data.uniname;
      numPrikaz.value = data.numPrikaz;
      datePrikaz.value = data.datePrikaz;
      specName.value = data.name_Spec;
      typePract.value = data.type_Pract;
      startPrakt.value = data.Pract_start;
      endPrakt.value = data.Pract_end;
      emailPrakt.value = data.pract_email;
      numPrakt.value = data.pract_num;
      fioUni.value = data.FIO_rukovod_uo;
      telUni.value = data.work_phone;
      fioRnpc.value = data.FIO_rukovod_rnpcmt;


      let otchetPractFiles = data.otchetPract.split(';');
      otchetPractFiles.forEach((file, index) => {
        if (index != otchetPractFiles.length - 1) {
          divFile_otchet.insertAdjacentHTML("beforeend", "<div class = 'file-container'><a target='_blank' href='/docs/practikant/" + loginUser + "/" + file + "'>" + file + "</a>" +
            "<span onclick='z_deleteFile111(\"" + file + "\", \"otchetPract\" );' class='delete-file' id='otchetPract" + file + "' style='cursor: pointer; padding-left: 10px;'>×</span></div>");
        }

      });
      let otzivPractFiles = data.otzivPract.split(';');
      otzivPractFiles.forEach((file, index) => {
        if (index != otzivPractFiles.length - 1) {
          divForOtchet.insertAdjacentHTML("beforeend", "<div class = 'file-container'><a target='_blank' href='/docs/practikant/" + loginUser + "/" + file + "'>" + file + "</a>" +
            "<span onclick='z_deleteFile111(\"" + file + "\", \"otzivPract\" );' class='delete-file' id='otzivPract" + file + "' style='cursor: pointer; padding-left: 10px;'>×</span></div>");
        }
      });
      let programPractFiles = data.programPract.split(';');
      programPractFiles.forEach((file, index) => {
        if (index != programPractFiles.length - 1) {
          divFile_program.insertAdjacentHTML("beforeend", "<div class = 'file-container'><a target='_blank' href='/docs/practikant/" + loginUser + "/" + file + "'>" + file + "</a>" +
            "<span onclick='z_deleteFile111(\"" + file + "\", \"programPract\" );' class='delete-file' id='programPract" + file + "' style='cursor: pointer; padding-left: 10px;'>×</span></div>");
        }

      });
      // let otchetPractFiles = data.otchetPract.split(';');
      // otchetPractFiles.forEach(function (file) {
      //   divFile_otchet.insertAdjacentHTML("beforeend", "<a target='_blank' href='/docs/practikant/" + loginUser + "/" + file + "'>" + file + "</a><br>");
      // });
      //    divForOtchet.insertAdjacentHTML("afterend", "<a target='_blank' href='/docs/practikant" + loginUser + "/" + data.otzivPract + "'>" + data.otzivPract + "</a>");
      //  divFile_otchet.insertAdjacentHTML("afterend", "<a target='_blank' href='/docs/practikant" + loginUser + "/" + data.otchetPract + "'>" + data.otchetPract + "</a>");
    }
  }).fail(function(jqXHR, textStatus, errorThrown) {
    console.error("AJAX запрос не удался: " + errorThrown);
  });
}
window.onload = insertSomeInfo;
//-
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
      deleteButton.id = stolbecfiles + addedFile.name;
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
  console.log (fileName + " name file")
  console.log (span.id + " name file")
  let loginUser = getCookie('login');
  if (confirm('Вы уверены, что хотите удалить этот файл?')) {
    let url = 'ajax/z_deleteFile.php?file_name=' + encodeURIComponent(fileName)  + '&loginUser=' + loginUser + '&stolbecfiles=' + span.id;
    fetch(url)
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          const fileContainers = document.getElementsByClassName('file-container');
          for (let i = 0; i < fileContainers.length; i++) {
            if (fileContainers[i].contains(document.getElementById(span.id + fileName))) {
              fileContainers[i].remove();
              // Добавляем запрос на удаление файла с сервера
              deleteFileFromServer(fileName, loginUser); // Вызов функции для удаления файла с сервера
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


function z_deleteFile111(fileName, elem) {
  console.log (fileName + " name file")
  console.log (elem + " name file")
  let loginUser = getCookie('login');
  if (confirm('Вы уверены, что хотите удалить этот файл?')) {
    let url = 'ajax/z_deleteFile.php?file_name=' + encodeURIComponent(fileName)  + '&loginUser=' + loginUser + '&stolbecfiles=' + elem;
    fetch(url)
      .then(response => response.json())
      .then(data => {
        if (data.success) {
          const fileContainers = document.getElementsByClassName('file-container');
          for (let i = 0; i < fileContainers.length; i++) {
            if (fileContainers[i].contains(document.getElementById(elem + fileName))) {
              fileContainers[i].remove();
              // Добавляем запрос на удаление файла с сервера
              deleteFileFromServer(fileName, loginUser); // Вызов функции для удаления файла с сервера
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

function deleteFileFromServer(fileName, loginUser) {
  // Добавьте AJAX запрос на сервер для удаления файла
  $.ajax({
    url: "ajax/deleteFileFromServer.php",
    method: "POST",
    data: { fileName: fileName, loginUser: loginUser },
  }).done(function(response) {
    console.log("Файл успешно удален с сервера");
  }).fail(function(jqXHR, textStatus, errorThrown) {
    console.error("Ошибка при удалении файла с сервера: " + errorThrown);
  });
}
function showAnketa(){
let anketa = document.getElementById("modalAnketa");
anketa.style.display = "block";

  var modal = document.getElementById("modalAnketa");
  var span = document.getElementsByClassName("close")[0];
  span.onclick = function () {
    modal.style.display = "none";
  }
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}
