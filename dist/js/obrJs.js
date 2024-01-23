function showModal(element) {
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


/*я писала это!*/

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
      forDescription.innerHTML = response;
    });
}
function validateForm() {
  let isValid = true;
  let nameInput = document.getElementById('name');
  let emailInput = document.getElementById('email');
  let phoneInput = document.getElementById('phone');
  let valueSelect = document.getElementById('event');
  let selectedValue1 = valueSelect.value;
  let name = nameInput.value;
  let email = emailInput.value;
  let phone = phoneInput.value;

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
      data: {name:name , email:email, phone:phone, selectedValue1:selectedValue1}
    }).done(function (response)
    {
      if (response=="1ok"){
        alert('Вы успешно записаны на мероприятие');
      }
      else{
        alert('Ошибка сервера. Обратитесь к администратору');
      }
    });
  }


  return isValid;
}
