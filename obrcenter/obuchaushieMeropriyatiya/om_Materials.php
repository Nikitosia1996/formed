<!DOCTYPE html>
<html lang="ru">
<head>
  <script>
    function getCookie(name) {
      let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
      return matches ? decodeURIComponent(matches[1]) : undefined;
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
            // butForAdmin.innerText = 'Добавить документ';
            // butForAdmin.onclick = insertDock();
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

          }

        });
      }
    }
    // insertDock(){
    //
    // }
    window.addEventListener('load', () => {
      insertBut();
    });

  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container" >

<h1>Материалы мероприятий</h1>
</div>
<div id="zagolovok"></div>

</body>
</html>

