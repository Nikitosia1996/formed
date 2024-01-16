<?php require_once 'connection.php'; ?>
<?php include 'processing/auth.php';?>
<?php include 'processing/out.php';?>
<?php login();?>
<?php out(); ?>

<?php

if (!isset($_COOKIE['key'])) {

  header('Location: locationKeys.php');
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>

  <script type="text/javascript">
    eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))

  </script>

  <style type="text/css">
    table{
      font-size: 11px;
    }
    /*thead td{*/
    /*  display: inline-flex;*/
    /*  height: 100px;*/
    /*  overflow-y: scroll;*/
    /*}*/
    .table-responsive {
      display: block;
      width: 100%;
      overflow-x: auto;
      height: 800px;
      position: relative;
    }

    .table-responsive table {
      min-width: 100%;
    }

    .table-responsive thead td {
      position: sticky;
      top: 0;
      background: white;
    }
    .highlighted {
      background-color: #8fcdc9;
    }


    .dropdown-container {

      justify-content: space-around;
      margin-bottom: 20px;
    }

    .year-dropdown, .month-dropdown {
      padding: 5px 10px;
      font-size: 18px;
      border: none;
      border-radius: 5px;
      background-color: #f2f2f2;
      box-shadow: 0 3px 6px 0 rgba(0,0,0,0.16);
      transition: background-color 0.3s;
    }

    .year-dropdown:hover, .month-dropdown:hover {
      background-color: #e6e6e6;
    }

    .year-dropdown:focus, .month-dropdown:focus {
      outline: none;
      box-shadow: 0 0 3px 2px rgba(0,123,255,.25);
    }
  </style>


  <script type="text/javascript">

    function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'ru', autoDisplay: false}, 'google_translate_element'); }</script>
  <style>
    body {top: 0 !important;        }
    #google_translate_element,
    .skiptranslate,
    .goog-te-banner-frame {display: none !important;        }
  </style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formed - Оборудование</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/global.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/toastr/toastr.min.css">





</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <div id="toast-container" class="toast-bottom-right" style="display: none">
    <div class="toast toast-error" aria-live="assertive" >
      <div class="toast-message">
        Нужно авторизоваться.
      </div>
    </div>
  </div>
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <div class="loader"></div>
    <!--        <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">-->
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background:#148A8A;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!--      <li class="nav-item d-none d-sm-inline-block">-->
      <!--        <a href="index.php" class="nav-link">Главная</a>-->
      <!--      </li>-->
      <!--      <li class="nav-item d-none d-sm-inline-block">-->
      <!--        <a href="#" class="nav-link">Контакты</a>-->
      <!--      </li>-->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <div class = "lang" id = "allang" style="margin-top: 8px;">

        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline" method="POST" action="/index.php?search_result">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" name="search_field" placeholder="Поиск" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!--   <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li> -->

      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600">
                                    <?php
                                    if (!isset($_COOKIE['login']))
                                      echo "Гость";
                                    else
                                      echo $_COOKIE['login']; ?>
                                </span>
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" width="30">

        </a>
        <!-- Dropdown - User Information -->
        <?php
        if (isset($_COOKIE['login'])) {?>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
               aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Profile
            </a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
              Выйти
            </a>
          </div>
        <?php } else {?>
          <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
               aria-labelledby="userDropdown">
            <a class="dropdown-item"  href="/login.php">
              <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
              Войти
            </a>
          </div>
        <?php } ?>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside  class="main-sidebar sidebar-dark-primary  sidebar-no-expand"  >
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" style="background:#148A8A;">
      <!--<span  style="margin-left:15px;">РНПЦ МТ</span>-->
      <img src="dist/img/logo-formed-logo.png" height="35px" width="200px"/>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background: #FFFFFF;">





      <!-- SidebarSearch Form -->
      <!--   <div class="form-inline">
           <div class="input-group" data-widget="sidebar-search">
             <input class="form-control form-control-sidebar" type="search" placeholder="Поиск" aria-label="Search">
             <div class="input-group-append">
               <button class="btn btn-sidebar">
                 <i class="fas fa-search fa-fw"></i>
               </button>
             </div>
           </div>
         </div> -->

      <!-- Sidebar Menu -->
      <?php require_once __DIR__ . '/elements/sidebar_menu.php' ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Dashboard</h1> -->
            <?php
            if ($con == false){
              print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
            }
            else {
              // echo "Соединение с ".$database.".sql"." установлено успешно" ;
            }

            ?>

            <!-- <?php
            //проверяем, существуют ли переменные в массиве POST
            if(!isset($_POST['fio']) and !isset($_POST['email'])){
              ?> <form action="index.php" method="post">
<input type="text" name="fio" placeholder="Укажите ФИО" required>
<input type="text" name="email" placeholder="Укажите e-mail" required>
<input type="submit" value="Отправить">
</form> <?php
            } else {
              //показываем форму
              $fio = $_POST['fio'];
              $email = $_POST['email'];
              $fio = htmlspecialchars($fio);
              $email = htmlspecialchars($email);
              $fio = urldecode($fio);
              $email = urldecode($email);
              $fio = trim($fio);
              $email = trim($email);
              if (mail("hancharou@rnpcmt.by, bogdan@rnpcmt.by", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: $email \r\n")){
                echo "Сообщение успешно отправлено";
              } else {
                echo "При отправке сообщения возникли ошибки";
              }
            }
            ?> -->
          </div><!-- /.col -->
          <!--          <div class="col-sm-6">
                     <ol class="breadcrumb float-sm-right">
                       <li class="breadcrumb-item"><a href="#">Home</a></li>
                       <li class="breadcrumb-item active">Dashboard v1</li>
                     </ol>
                   </div> -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    <!--ПОДКЛЮЧЕНИЕ API -->



    <section class="content">
      <div class="container-fluid">

        <div class="dropdown-container">

          <select class="year-dropdown" id="yearDropdown" onchange="changeYear(this.value)">
            <option value="2023">2023</option>
            <option value="2024">2024</option>
          </select>

          <select class="month-dropdown" id="monthDropdown" onchange="changeMonth(this.value)">
            <option value="0">Январь</option>
            <option value="1">Февраль</option>
            <option value="2">Март</option>
            <option value="3">Апрель</option>
            <option value="4">Май</option>
            <option value="5">Июнь</option>
            <option value="6">Июль</option>
            <option value="7">Август</option>
            <option value="8">Сентрябрь</option>
            <option value="9">Октябрь</option>
            <option value="10">Ноябрь</option>
            <option value="11">Декабрь</option>
          </select>
          <span style = "margin-left: 17px;  font-size: 20px; font-weight: bold;"> Enter - переход на ячейку вниз, Ctrl+Enter - абзац , Esc - выход </span>
        </div>

        <?php
        class Col{
          public $name, $id;
        }
        $arraycols = array();
        $query = "SELECT * FROM colsExcel";
        $result=mysqli_query($con, $query) or die ( mysqli_error($con));
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        foreach ($data as $col)
        {
          $colObj = new Col();
          $colObj->name = $col['name'];
          $colObj->id = $col['id_colsExcel'];
          array_push($arraycols, $colObj);
        }
        $countcols =  count($arraycols);

        $arrayrows = array();
        $query = "SELECT * FROM rowsExcel";
        $result =mysqli_query($con, $query) or die ( mysqli_error($con));
        for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
        foreach ($data as $row)
        {
          $rowObj = new Col();
          $rowObj->name = $row['name'];
          $rowObj->id = $row['id_rowsExcel'];
          array_push($arrayrows, $rowObj);
        }

        ?>

        <div class="table-responsive">
          Информация об эффективности использования оборудования, приобретённого за счёт средств займа в рамках проекта Всемирного банка «Экстренного реагирования на COVID – 19 в Республике Беларусь»
          <table id="example2" class="table table-bordered table-hover">
            <thead>

            <tr>
              <td style="font-size: 15px; font-weight: bold;">Наименование учреждения</td>
              <?php
              foreach ($arraycols as $colName) {
                ?>
                <td style="font-size: 15px; font-weight: bold;"><?=$colName->name?></td>
                <?php

              }
              ?>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($arrayrows as $rowName) {


  if ($rowName->name == 'УЗ "Витебская областная клиническая больница"') {
?>
    <tr>
      <td style="display: block; width: 200px; font-weight: bold;    font-size: 14px;">Главное управление по здравоохранению Витебского облисполкома</td>
      <?php for ($i = 1; $i <= $countcols; $i++) { ?>
        <td></td>
      <?php } ?>
    </tr>
<?php
  }





              if ($rowName->name == 'УЗ "Ивьевская ЦРБ"') {
                ?>

                 <tr>
                  <td style="display: block; width: 200px; font-weight: bold;    font-size: 14px;">Главное управление здравоохранения Гродненского облисполкома</td>
                  <?php for ($i = 1; $i <= $countcols; $i++) { ?>
                    <td></td>
                  <?php } ?>
                </tr>
                <?php

              }





              if ($rowName->name == 'У «ГОКБ»') {
                ?>
                <tr>
                  <td style="display: block; width: 200px; font-weight: bold;    font-size: 14px;">Главное управление здравоохранения Гомельского облиспокома</td>
                  <?php for ($i = 1; $i <= $countcols; $i++) { ?>
                    <td></td>
                  <?php } ?>
                </tr>
                <?php
              }


              if ($rowName->name == 'УЗ "Белыничская ЦРБ"') {
                ?>
                <tr>
                  <td style="display: block; width: 200px; font-weight: bold;    font-size: 14px;">Главное управление по здравоохранению Могилевского облисполкома</td>
                  <?php for ($i = 1; $i <= $countcols; $i++) { ?>
                    <td></td>
                  <?php } ?>
                </tr>
                <?php
              }


              if ($rowName->name == 'Томограф рентгеновский компьютерный Revolution EVO с принадлежностями  ') {
                ?>
                <tr>
                  <td style="display: block; width: 200px; font-weight: bold;    font-size: 14px;">УЗ "Могилевский ОЛДЦ"</td>
                  <?php for ($i = 1; $i <= $countcols; $i++) { ?>
                    <td></td>
                  <?php } ?>
                </tr>
                <?php
              }


              if ($rowName->name == 'Насос инфузионный СМАРТ ШН3, 16 шт.') {
                ?>
                <tr>
                  <td style="display: block; width: 200px; font-weight: bold;    font-size: 14px;">УЗ Могилевская областная детская больница</td>
                  <?php for ($i = 1; $i <= $countcols; $i++) { ?>
                    <td></td>
                  <?php } ?>
                </tr>
                <?php
              }
              ?>






              <tr>
                <td style="display: block; width: 200px">
                  <?=$rowName->name?>
                </td>
                <?php
                for ($i = 1 ; $i <= $countcols ; $i ++) {
                  ?>
                  <td id = "<?= $rowName->id?>_<?= $i?>">
                  </td>
                  <?php
                }
                ?>

              </tr>
              <?php

            }
            ?>
            </tbody>
          </table>
        </div>

      </div>
    </section>





    <!-- КОНЕЦ ПОДКЛЮЧЕНИЕ API -->

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> &copy; 2023 <a href="https://rnpcmt.by/">РНПЦ МТ</a></strong>

    <div class="float-right d-none d-sm-inline-block">
      <b>Версия</b> 1.1.1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- logoutModal FORMS-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Выход</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Текущий сеанс будет завершен.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Отмена</button>
        <a class="btn btn-primary" href="/index.php?logout">Выйти</a>
      </div>
    </div>
  </div>
</div>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/formExcel.js"></script>


<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $('.toastrDefaultError').click(function () {
    let guest = document.querySelector("span[class='mr-2 d-none d-lg-inline text-gray-600']");
    if(guest.innerHTML.trim() === "Гость") {
      let alert = document.getElementById('toast-container');
      $('[class="nav-item dropdown no-arrow"]').addClass("show");
      $('[class="dropdown-menu dropdown-menu-right shadow animated--grow-in"]').addClass("show");
      alert.style = "display: block";
      new Promise(resolve => setTimeout(resolve, 5000)).then(() => {alert.style = "visibility: hidden; opacity: 0; transition: visibility 0.5s, opacity 0.5s linear;";});
    }
  });

  $('#toast-container').click(function () {
    this.style="display: none";
  });
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": false,
      "lengthChange": true,
      "searching": false,
      "ordering": false,
      "info": false,
      "autoWidth": false,
      "responsive": false,
    });
  });

  let item = document.querySelector(".nav-item");
  if(window.screen.width > 1279) {
    item.style = "display: none";
  }

  let itemMenu = document.querySelector("[onclick ='checkKey()']");
  itemMenu.style = "color: #148A8A;";


  let bel = "ru|be";
  let rus = "ru|ru";
  let eng = "ru|en";

  var code = '<select class="selectpicker" style="color: #FFFAF0; background: none; border: none; width: 200px; float: right;" data-size="5" onchange="doGTranslate(this.value)"> <option style="color: black; value="">Выбор языка</option><option style="color: black;" value="ru|ru">Русский</option><option style="color: black;" value="ru|be">Беларуский</option><option style="color: black;" value="ru|en">English</option></select></div><div class="lng_select notranslate"> </div><div id="google_translate_element"></div>';

  //var code ='<div onclick="doGTranslate(rus)" style="cursor: pointer; margin-right: 8px;"><img style = "width: 28px; height:28px" src="imgs/rusicon.png"/></div> <div onclick="doGTranslate(bel)" style="cursor: pointer; margin-right: 8px;"><img  style = "width: 28px; height:28px" src="images/belicon.png"/></div><div onclick="doGTranslate(eng)" style="cursor: pointer; margin-right: 8px;"><img  style = "width: 28px; height:28px" src="images/engicon.png"/></div><div  class="lng_select notranslate"> </div><div id="google_translate_element"></div>';
  //var code ='<div onclick="changelang(rus,this)" style="cursor: pointer; margin-right: 8px;"><div class = "actdiv">РУ</div></div> <div onclick="changelang(bel,this)" style="cursor: pointer; margin-right: 8px;"><div>БЕЛ</div></div><div onclick="changelang(eng,this)" style="cursor: pointer; margin-right: 8px;"><div>ENG</div></div><div  class="lng_select notranslate"> </div><div id="google_translate_element"></div>';
  document.getElementById("allang").innerHTML = code;








</script>



</body>
</html>
