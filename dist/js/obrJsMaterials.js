let url = window.location.href;
function getCookie(name) {
  let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
  return matches ? decodeURIComponent(matches[1]) : undefined;
}
function loadInfo(){
  $.ajax({
    url:"ajax/loadInfo.php",
    method:"GET",
    data:{url:url}
  }).done(function (response) {

    let data = JSON.parse(response);
    if (data.error =="No data error"){

    }
    else {
      let bodyWrapper = document.getElementsByClassName('container')[0];
      data.forEach(function(row) {
        let h3Element = document.createElement("h3");
        h3Element.textContent = row.name;
        h3Element.style.cssText = "margin-top: 20px;";
        let divForFiles = document.createElement("div");
        let ulForFiles = document.createElement("ul");
        ulForFiles.id = 'myUL';
        ulForFiles.style.listStyleType = "none";
        divForFiles.id = 'zagolovokFiles' + row.id_headers_material;
        let id_headerValue = row.id_headers_material;
        bodyWrapper.appendChild(h3Element);
        divForFiles.appendChild(ulForFiles);
        bodyWrapper.appendChild(divForFiles);
        $.ajax({
          url:"ajax/loadFiles.php",
          method:"GET",
          data:{id_headerValue:id_headerValue}
        }).done(function (response) {

          let data = JSON.parse(response);
          if (data.error =="No data error"){

          }
          else{
            data.forEach(function(files) {
              let liElement = document.createElement("li");
              let aElement = document.createElement("a");
              aElement.textContent = files.name;
              liElement.append(aElement);
              ulForFiles.append(liElement);
            });
          }
        });

      });
    }
  }).fail(function(jqXHR, textStatus, errorThrown) {
    console.error("AJAX запрос не удался: " + errorThrown);
  });
}

function insertBut()
{
  let loginUser = getCookie('login');
  if (loginUser) {
    $.ajax({
      url: "ajax/getUserInfo.php",
      method: "GET",
      data: {loginUser: loginUser}
    }).done(function (response) {
      let data = JSON.parse(response);

      if (data.id_role == 500) {
        let butForAdmin = document.createElement('select');
        butForAdmin.classList.add('btn');
        butForAdmin.classList.add('btn-primary');
        butForAdmin.style.cssText = 'position: absolute; top: 80px; right: 274px;'
        let pole = document.getElementById('zagolovok');
        let vstavka = pole;
        vstavka.append(butForAdmin);

        let option1 = document.createElement('option');
        option1.text = 'Выберите действие';
        option1.disabled = true;
        option1.hidden = true;
        option1.selected = true;
        butForAdmin.add(option1);

        let option2 = document.createElement('option');
        option2.text = 'Добавить документ';
        butForAdmin.add(option2);

        let option3 = document.createElement('option');
        option3.text = 'Добавить заголовок';
        butForAdmin.add(option3);

        let option4 = document.createElement('option');
        option4.text = 'Добавить видео';
        butForAdmin.add(option4);

        butForAdmin.addEventListener('change', function() {
          let selectedOption = this.options[this.selectedIndex];
          if (selectedOption.text === 'Добавить заголовок') {
            showModalZagolovok(); // Call the function when 'Добавить заголовок' is selected
          }
          if (selectedOption.text === 'Добавить документ') {
            showModalFiles1(); // Call the function when 'Добавить заголовок' is selected
          }
        });
      }
    });
  }
}
function showModalZagolovok(){
  let modal = document.getElementById("modalZagolovok");
  modal.style.display = "block";

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
function showModalFiles1(){
  let modal = document.getElementById("modalFiles1");
  modal.style.display = "block";

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
function insertZagolovok(){
  let bodyWrapper = document.getElementsByClassName('content-wrapper')[0];
  let h3Element = document.createElement("h3");
  let zagolovokText = document.getElementById('zagolovokText');
  let textForZagolovok = zagolovokText.value;
  h3Element.textContent = textForZagolovok;
  bodyWrapper.appendChild(h3Element);
  $.ajax({
    url: "ajax/insert_Headers.php", // PHP script to handle email sending
    method: "GET",
    data: {
      url: url,
      textForZagolovok: textForZagolovok
    }
  }).done(function (response) {
    if (response == "Добавили") {

    } else {
      alert('Ошибка');
    }
  });
}

function insertFile(input){
  let addedFile = input.files[0];
  let fileName = addedFile.name;
  let headers = document.getElementById('headers');
  let selectedHeader = headers.value;
  let fileTextInput = document.getElementById('fileTextInput').value;
  $.ajax ({
    url: "ajax/insert_File_materials.php",
    method: "GET",
    data: {
      selectedHeader:selectedHeader,
      fileTextInput:fileTextInput,
      fileName:fileName
    }
  }).done(function (response){
    let data = JSON.parse(response);
    if(response.error =="No data error"){
      console.log("Не вышло")
    }else{
      let divHeader = document.getElementById('zagolovokFiles'+ data);
      let ulElement = divHeader.querySelector('ul');
      let liElement = document.createElement("li");
      let aElement = document.createElement("a");
      aElement.textContent = fileTextInput;
      liElement.append(aElement);
      ulElement.append(liElement);
    }
  });
}

window.addEventListener('load', () => {
  insertBut();
  loadInfo();
});
