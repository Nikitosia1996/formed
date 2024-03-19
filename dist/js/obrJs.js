function showModal(element) {


  var dateParts = element.id.split('.');
  var year = dateParts[2];
  var month = dateParts[1];
  var day = dateParts[0];
  var formattedDate = year + '-' + month + '-' + day;
let segodnya = new Date();
  function formatDate(date) {
    var d = new Date(date),
      month = '' + (d.getMonth() + 1),
      day = '' + d.getDate(),
      year = d.getFullYear();

    if (month.length < 2)
      month = '0' + month;
    if (day.length < 2)
      day = '0' + day;

    return [year, month, day].join('-');
  }
  console.log(formatDate(segodnya));
  let nowdate = formatDate(segodnya);

if(formattedDate>nowdate){

  var eventPopup = element.querySelector(".calendar-popup");
  if (eventPopup) {
    var eventOptions = Array.from(eventPopup.querySelectorAll("div")).map(function (div) {
      return div.textContent;
    });
    var eventSelect = document.getElementById("event");

    eventSelect.innerHTML = "";
    for (var i = 0; i < eventOptions.length; i++) {
      var option = document.createElement("option");
      option.value = eventOptions[i];
      option.text = eventOptions[i];
      eventSelect.appendChild(option);
    }
    modal.style.display = "block";
    selectedValue();

    var inputForDate = document.getElementById("dateMP");
    inputForDate.value = formattedDate;
  }}
else {
  alert('Событие прошло')
}
}

var modal = document.getElementById("modalZapis");
var span = document.getElementsByClassName("close")[0];
span.onclick = function () {
  modal.style.display = "none";
}
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
document.getElementById("eventForm").addEventListener("submit", function (event) {
  event.preventDefault();
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var phone = document.getElementById("phone").value;
  var event = document.getElementById("event").value;
  //
  modal.style.display = "none";
});


document.querySelector(".calendar-day.event").addEventListener("mouseover", function (event) {
  var eventPopup = event.target.querySelector(".calendar-popup");
  if (eventPopup) {
    eventPopup.style.display = "block";
  }
});

document.querySelector(".calendar-day.event").addEventListener("mouseout", function (event) {
  var eventPopup = event.target.querySelector(".calendar-popup");
  if (eventPopup) {
    eventPopup.style.display = "none";
  }
});

document.querySelector(".calendar-day.event").addEventListener("click", function (event) {
  var eventPopup = event.target.querySelector(".calendar-popup");
  if (eventPopup) {
    var eventOptions = eventPopup.querySelectorAll("div");
    var eventSelect = document.getElementById("event");
    eventSelect.innerHTML = "";
    for (var i = 0; i < eventOptions.length; i++) {
      var option = document.createElement("option");
      option.value = eventOptions[i].textContent;
      option.text = eventOptions[i].textContent;
      eventSelect.appendChild(option);
    }
    showModal();
  }
});


function selectedValue(){
  let forDescription = document.getElementById('eventDescription');
  forDescription.innerHTML  = '';
  let valueSelect = document.getElementById('event');
  let selectedValue1 = valueSelect.value;
  $.ajax({
    url: "ajax/getDiscription.php",
    method: "GET",
    data: {selectedValue1:selectedValue1}
  })
    .done(function( response ) {
      let data = JSON.parse(response);
      forDescription.innerHTML = '<div class = "obshDiv"><div class="nameK"> '+ data.name +' </div><div class="headerK">' + data.headerOpisanie +' </div>  <div class = "bodyK">' + data.bodyOpisanie + '</div> <div class = "cenaK">' + data.cenaOpisanie + '</div></div>';
    });
}
function validateForm() {
  let isValid = true;
  let nameInput = document.getElementById('name');
  let emailInput = document.getElementById('email');
  let phoneInput = document.getElementById('phone');
  let valueSelect = document.getElementById('event');
  let dateMPInput = document.getElementById('dateMP');
  let selectedValue1 = valueSelect.value;
  let name = nameInput.value;
  let email = emailInput.value;
  let phone = phoneInput.value;
  let dateMP = dateMPInput.value;

  let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  let phoneRegex = /^\+?[0-9]+$/;

  if (name === "") {
    alert("Пожалуйста, введите ваше имя");
    isValid = false;
  }

  else if (!emailRegex.test(email)) {
    alert("Неверный формат Email адреса");
    isValid = false;
  }

  else if (!phoneRegex.test(phone)) {
    alert("Неверный формат номера телефона");
    isValid = false;
  }
  if (!isValid) {
    event.preventDefault();
  }
  if (isValid) {
    $.ajax({
      url: "ajax/insertInfoPovishenie.php",
      method: "GET",
      data: {name:name , email:email, phone:phone, selectedValue1:selectedValue1 , dateMP:dateMP}
    }).done(function (response)
    {
      if (response=="1ok"){
        $.ajax({
          url: "ajax/send_email.php", // PHP script to handle email sending
          method: "POST",
          data: {
            name: name,
            email: email,
            phone: phone,
            selectedValue1: selectedValue1,
            dateMP: dateMP
          }
        }).done(function (response) {
          if (response == "good") {
            alert('Вы успешно записаны на мероприятие и отправлены на почту');
          } else if (response == "bad") {
            alert('Вас отправили в бд, но на почту не дошли');
          } else {
            alert('Непонятка блин. В бд вроде подключились, а в сенд имеил не дошли даже');
          }
        });
        alert('Отправили в бд а там уже как бог даст');
      } else if (response=="emailInvalid"){
        alert('Вы уже записаны на это мероприятие');
      }
      else{
        alert('Ошибка сервера. Обратитесь к администратору');
      }
    });

  }


  return isValid;
}

