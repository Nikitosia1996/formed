<?php

$array_categ = [];
$array_names_categ = [];

if (isset($_SESSION['id_user'])) {

//$query = "SELECT * FROM view_categ_user, category, users WHERE users.id_user = view_categ_user.id_user AND category.id_category = view_categ_user.id_categ AND users.id_user = '{$_SESSION['id_user']}'";
$query = "SELECT id_categ, name_category FROM view_categ_user, category, users, roles WHERE roles.id_role = view_categ_user.id_role AND
                                                            category.id_category = view_categ_user.id_categ AND users.id_user = '{$_SESSION['id_user']}' AND
                                                            users.id_role = roles.id_role";

$result=mysqli_query($con, $query) or die ( mysqli_error($con));

for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);

  $i = 0;
  foreach ($data as $key) {

    $array_categ[$i++] = $key['id_categ'];
    $array_names_categ[$i++] = $key['name_category'];

  }

}

?>


<nav class="mt-2" >
  <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
    <li class="nav-item">
      <a href="/index.php" class="nav-link" id="main">

        <p>Главная</p>
      </a>

    </li>
  </ul>
    <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <li class="nav-item" id="baseNPA">
      <a href="#" class="nav-link toastrDefaultError">

          <p>
            База НПА
            <i class="fas fa-angle-left right"></i>
          </p>
      </a>
        <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>
      <ul class="nav nav-treeview" id="baseNPAtree">
        <?php
        foreach ($array_categ as $key) {
          if($key == 1){ ?>

<!-- РАЗДЕЛ ОБЩИЕ ВОПРОСЫ  -->

<li class="nav-item">
  <a href="#" class="nav-link">

    <p>Общие вопросы
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="index.php?common-question" class="nav-link">

        <p>Общие вопросы</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="index.php?common-question_osnovnyye-zakony-rb" class="nav-link">

        <p>Основные Законы РБ</p>
      </a>
    </li>


    <li class="nav-item">
      <a href="index.php?common-question_rezhim-sanpin" class="nav-link">

        <p>Режим работы и сан-эпид режим организаций здравоохранения. СанПИН</p>
      </a>
    </li>


    <li class="nav-item">
      <a href="index.php?common-question_tarify-normy-normativy" class="nav-link">

        <p>Тарифы, нормы, нормативы</p>
      </a>
    </li>
  </ul>
</li>
              <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>

<!-- КОНЕЦ РАЗДЕЛА ОБЩИЕ ВОПРОСЫ  -->


<?php
}
else if($key == 2){
?>


<!-- РАЗДЕЛ АКУШЕРСТВО И ГИНЕКОЛОГИЯ  -->

<li class="nav-item">
  <a href="index.php?akusherstvo-i-ginekologiya" class="nav-link">

    <p>Акушерство и гинекология</p>
  </a>

</li>

    <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>

<!--КОНЕЦ РАЗДЕЛА АКУШЕРСТВО И ГИНЕКОЛОГИЯ  -->


<?php
}
else if($key == 3){
?>



<!-- РАЗДЕЛ АНЕСТЕЗИОЛОГИЯ И РЕАНИМАТОЛОГИЯ  -->

<li class="nav-item">
  <a href="#" class="nav-link">

    <p>
      Анестезиология и реаниматология
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="index.php?anesteziologiya-reanimatologiya" class="nav-link">

        <p>Анестезиология и реаниматология</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="index.php?anesteziologiya-reanimatologiya_deyatelnost-s-narkot" class="nav-link">

        <p>Деятельность, связанная с оборотом наркотических средств, психотропных веществ и их прекурсоров</p>
      </a>
    </li>
  </ul>
</li>
    <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>
<!-- КОНЕЦ РАЗДЕЛА АНЕСТЕЗИОЛОГИЯ И РЕАНИМАТОЛОГИЯ  -->

<?php
}
else if($key == 4)
{
?>


<!-- РАЗДЕЛ ИНСТРУМЕНТАЛЬНАЯ ДИАГНОСТИКА  -->

<li class="nav-item">
  <a href="#" class="nav-link">

    <p>
      Инструментальная диагностика
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>

  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="index.php?id-luchevaya-diagnostika" class="nav-link">

        <p>Лучевая диагностика (в т.ч. рентгенологическая диагностика, компьютерная томография, магнитно-резонансная томография)</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="index.php?id-uzi-ed-fd" class="nav-link">

        <p>УЗИ. Эндоскопическая диагностика. Функциональная диагностика</p>
      </a>
    </li>
  </ul>
</li>
    <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>
<!-- КОНЕЦ РАЗДЕЛА ИНСТРУМЕНТАЛЬНАЯ ДИАГНОСТИКА  -->

<?php
}
else if($key == 5)
{
?>


<!-- РАЗДЕЛ ЛАБОРАТОРНАЯ ДИАГНОСТИКА  -->


<li class="nav-item">
  <a href="index.php?laboratornaya-diagnostik" class="nav-link">

    <p>Лабораторная диагностика</p>
  </a>
</li>

    <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>

<?php
}
else if($key == 6)
{
?>

<!-- РАЗДЕЛ ПЕДИАТРИЯ  -->

<li class="nav-item">
  <a href="index.php?pediatriya" class="nav-link">

    <p>Педиатрия</p>
  </a>
</li>
    <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>
<!-- КОНЕЦ РАЗДЕЛА ПЕДИАТРИЯ  -->

<?php
}
else if($key == 7)
{
?>

<!-- РАЗДЕЛ СТОМАТОЛОГИЯ  -->


<li class="nav-item">
  <a href="index.php?stomatologiya" class="nav-link">

    <p>Стоматология</p>
  </a>
</li>
    <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>

<!-- КОНЕЦ РАЗДЕЛА СТОМАТОЛОГИЯ  -->


<?php
}
else if($key == 8)
{
?>

              <li class="nav-item">
                <a href="#" class="nav-link">

                  <p>
                    Терапия
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?terapiya" class="nav-link">

                      <p>Терапия</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?terapiya_allergologiya-immunologiya" class="nav-link">

                      <p>Аллергология. Иммунология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?terapiya_gastroenterologiya" class="nav-link">

                      <p>Гастроэнтерология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?terapiya_dermatologiya-venerologiya-kosmetologiya" class="nav-link">

                      <p>Дерматология. Венерология. Косметология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?terapiya_kardiologiya" class="nav-link">

                      <p>Кардиология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?terapiya_nevrologiya" class="nav-link">

                      <p>Неврология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?terapiya_psikhoterapiya-narkologiya-psikhiatriya" class="nav-link">

                      <p>Психотерапия. Наркология. Психиатрия</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?terapiya_revmatologiya" class="nav-link">

                      <p>Ревматология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?terapiya_fizioterapiya-massazh-lfk-reabilitatsiya" class="nav-link">

                      <p>Физиотерапия. Массаж. ЛФК. Реабилитация</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?terapiya_endokrinologiya" class="nav-link">

                      <p>Эндокринология</p>
                    </a>
                  </li>
                </ul>


              </li>
    <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>
<?php

        }

        else if($key == 9)

        {
?>

              <li class="nav-item">
                <a href="#" class="nav-link">

                  <p>
                    Хирургия
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="index.php?khirurgiya_zabor-organov-transplantatsiya" class="nav-link">

                      <p>Забор органов и тканей, трансплантация</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?khirurgiya_onkologiya-mammologiya" class="nav-link">

                      <p>Онкология, в т.ч.маммология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?khirurgiya_ortopediya-travmatologiya" class="nav-link">

                      <p>Ортопедия. Травматология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?khirurgiya_otorinolaringologiya-surdologiya" class="nav-link">

                      <p>Оториноларингология. Сурдология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?khirurgiya_oftalmologiya" class="nav-link">

                      <p>Офтальмология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?khirurgiya_patologoanatomicheskaya-sluzhba" class="nav-link">

                      <p>Патологоанатомическая служба</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?khirurgiya_proktologiya-koloproktologiya" class="nav-link">

                      <p>Проктология, в т.ч. колопроктология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?khirurgiya_urologiya-andrologiya" class="nav-link">

                      <p>Урология, в т.ч. андрология</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="index.php?khirurgiya" class="nav-link">

                      <p>Хирургия</p>
                    </a>
                  </li>
                </ul>
              </li>

            <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>

<?php

        }
    }
?>



        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
            <li class="nav-item" id="directory_mkb">
                <a href="#" class="nav-link">

                    <p>Справочники<i class="right fas fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview" id="directoryTree">
                    <li class="nav-item">
                        <a href="index.php?directory_mkb" class="nav-link" >
                            <p>Справочник МКБ-10</p>
                        </a>
                    </li>


                </ul>
                 <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>

            </li>
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false" >

          <li class="nav-item" id="classifiers_org">
            <a href="#" class="nav-link">

              <p>
                Классификаторы
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" id="classifiersTree">
              <li class="nav-item">
                <a href="index.php?classifiers_org" class="nav-link" >

                  <p>Государственные органы и организации здравоохранения</p>
                </a>
              </li>


            </ul>

              <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>
          </li>


        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false" id="clinical_protocols">
            <li class="nav-item">
                <a href="index.php?clinical_protocols" class="nav-link" style="width: calc(255px - 0.5rem * 2) !important;
    transition: width ease-in-out 0.3s !important; ">

                    <p>Клинические протоколы</p>
                </a>

                <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>

            </li>
        </ul>


      <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false" id="calculatorimt">
        <li class="nav-item">
          <a href="index.php?calculatorimt" class="nav-link toastrDefaultError" id = "acalculator">

            <p>Медицинские калькуляторы</p>
          </a>

          <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>

        </li>
      </ul>



        <!-- form_builder1.php -->
        <!--  <li class="nav-item">
           <a onclick="checkKey()" href="#" class="nav-link">
             <p>Формы2</p>
           </a>
         </li>
 -->




      <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="contacts.php" class="nav-link">

            <p>Контакты</p>
          </a>

        </li>
      </ul>
        <hr style="margin-top: 0rem; margin-bottom: 0rem; border-style: inset; border-width: 1px;"/>
      <ul class="nav nav-pills nav-sidebar flex-column" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="help.php" class="nav-link">

            <p>Помощь</p>
          </a>

        </li>
      </ul>

      </nav>
<!--<script src="cookie_note/cookie.js"></script>-->
<script>

    const currentUrl = window.location;
    if(currentUrl.pathname === "/index.php" && currentUrl.search.length === 0) {
        let itemMenu = document.getElementById("main");
        itemMenu.style = "color: #148A8A;";
    }

    let login = getCookie("login");
    let ahref = document.getElementById('acalculator');
    if ( login )
    {
      ahref.href =  "/index.php?calculatorimt";

    }
    else {
      ahref.href = "#";
    }

    // console.log(login);
</script>

<script>
  function getCookie(name) {
    let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }


    function checkKey() {
    let key = prompt("Введите ключ");

    if (key !== null) {
      $.ajax({
        type: "POST",
        url: "locationKeys.php",
        dataType: "json",
        data: { key: key },
        success: function(response) {
          if(response.isKeyCorrect){
            location.href = 'excelForm.php';
          }
          else{
            alert("Неправильный ключ. Попробуйте еще раз.");
          }
        }
      }); }
  }
</script>
