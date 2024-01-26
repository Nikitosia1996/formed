<?php require_once 'connection.php'; ?>
<?php include 'processing/auth.php';?>
<?php include 'processing/out.php';?>

<?php login();?>
<?php out(); ?>

<!DOCTYPE html>
<html lang="ru">
    <head>

      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>

      <script type="text/javascript">
        eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))

      </script>



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
        <meta name="keywords" content="медицинская правовая система, ИПСЗ, правовая система МЗ, минздрав, МЗ, Минздрав, формед, Формед, Formed, formed.by, formed by, формед бай">
        <meta name="keywords" content="рнпц мт">
        <meta name="description" content="Информационная правовая система здравоохранения разработанная РНПЦ МТ">
        <title>Formed - Главная</title><link rel="icon" type="image/x-icon" href="dist/img/favicon.ico">
        <link rel="canonical" href="https://formed.by/">
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
    <link rel="stylesheet" href="elements/calendar/calendar.css">
    <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
        <link rel="stylesheet" href="elements/cookie_note/cookie.css"/>
<!--        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" >-->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" >
        <link href="dist/css/bootstrap5.min.css" rel="stylesheet">
      <script src="elements/cookie_note/cookie.js"></script>

<style>.small-box > .small-box-footer {
      background-color: rgba(0, 0, 0, 0.1);
      color: rgba(255, 255, 255, 0.8);
      padding: 3px 0;
      position: relative;
      text-align: center;
      text-decoration: none;
      z-index: 10;
      display:none;
      }
</style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">
    <div id="toast-container" class="toast-bottom-right" style="display: none">
        <div class="toast toast-error" aria-live="assertive" >
            <div class="toast-message">
                <a href="https://rnpcmt.by/%D1%8D%D0%BA%D0%BE%D0%BD%D0%BE%D0%BC%D0%B8%D0%BA%D0%B0-%D0%B7%D0%B4%D1%80%D0%B0%D0%B2%D0%BE%D0%BE%D1%85%D1%80%D0%B0%D0%BD%D0%B5%D0%BD%D0%B8%D1%8F/%D0%BF%D1%80%D0%B5%D0%B9%D1%81%D0%BA%D1%83%D1%80%D0%B0%D0%BD%D1%82-%D1%86%D0%B5%D0%BD-%D0%BD%D0%B0-%D1%83%D1%81%D0%BB%D1%83%D0%B3%D0%B8#formed" target="_blank"> Доступ к документам платный. Прейскурант цен</a>
            </div>
        </div>
    </div>
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
      <div class="loader"></div>
<!--    <img class="animation__shake" src="dist/img/logo_ru.gif" alt="AdminLTELogo" height="60" width="60">-->
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
                                <?php
                                if ($_COOKIE['login'] == "admin@admin.by") {?>
                                <a class="dropdown-item" href="/administrator/online-info.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Пользователи
                                </a>
                                <?php } ?>
<!--                                <a class="dropdown-item" href="#">-->
<!--                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>-->
<!--                                    Profile-->
<!--                                </a>-->

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
<!--Запись уникального пользователя если такого нет-->
      <?php
      if(isset($_COOKIE['PHPSESSID'])) {
          $rez = mysqli_query($con, "SELECT * FROM counter WHERE phpsesid='{$_COOKIE['PHPSESSID']}'"); //запрашивается строка с искомым id

          if (mysqli_num_rows($rez) == 0) //если получена одна строка
          {
              mysqli_query($con, "INSERT INTO counter (phpsesid) VALUES ('{$_COOKIE['PHPSESSID']}')");
          }
      }
      ?>
<!--Запись уникального пользователя если такого нет-->
     <?php

                if (isset($_COOKIE['login']))
                {

                      foreach ($_GET as $key => $value) {
                            $value = $key;
                            break;
                      }
                      if(isset($value)){
                    switch ($value) {
                      case 'akusherstvo-i-ginekologiya':
                            include 'protected/akuserstvo-i-ginekologia/akuserstvo-i-ginekologia.php';
                            break;
                        case 'anesteziologiya-reanimatologiya':
                            include 'protected/anesteziologiya-reanimatologiya/anesteziologiya-reanimatologiya.php';
                            break;
                        case 'anesteziologiya-reanimatologiya_deyatelnost-s-narkot':
                            include 'protected/anesteziologiya-reanimatologiya_deyatelnost-s-narkot/anesteziologiya-reanimatologiya_deyatelnost-s-narkot.php';
                            break;
                        case 'common-question':
                            include 'protected/common-question/common-question.php';
                            break;
                        case 'common-question_osnovnyye-zakony-rb':
                            include 'protected/common-question_osnovnyye-zakony-rb/common-question_osnovnyye-zakony-rb.php';
                            break;
                        case 'common-question_rezhim-sanpin':
                            include 'protected/common-question_rezhim-sanpin/common-question_rezhim-sanpin.php';
                            break;
                        case 'common-question_tarify-normy-normativy':
                            include 'protected/common-question_tarify-normy-normativy/common-question_tarify-normy-normativy.php';
                            break;
                        case 'id-luchevaya-diagnostika':
                            include 'protected/id-luchevaya-diagnostika/id-luchevaya-diagnostika.php';
                            break;
                        case 'id-uzi-ed-fd':
                            include 'protected/id-uzi-ed-fd/id-uzi-ed-fd.php';
                            break;
                        case 'khirurgiya':
                            include 'protected/khirurgiya/khirurgiya.php';
                            break;
                        case 'khirurgiya_oftalmologiya':
                            include 'protected/khirurgiya_oftalmologiya/khirurgiya_oftalmologiya.php';
                            break;
                        case 'khirurgiya_onkologiya-mammologiya':
                            include 'protected/khirurgiya_onkologiya-mammologiya/khirurgiya_onkologiya-mammologiya.php';
                            break;
                        case 'khirurgiya_ortopediya-travmatologiya':
                            include 'protected/khirurgiya_ortopediya-travmatologiya/khirurgiya_ortopediya-travmatologiya.php';
                            break;
                        case 'khirurgiya_otorinolaringologiya-surdologiya':
                            include 'protected/khirurgiya_otorinolaringologiya-surdologiya/khirurgiya_otorinolaringologiya-surdologiya.php';
                            break;
                        case 'khirurgiya_patologoanatomicheskaya-sluzhba':
                            include 'protected/khirurgiya_patologoanatomicheskaya-sluzhba/khirurgiya_patologoanatomicheskaya-sluzhba.php';
                            break;
                        case 'khirurgiya_proktologiya-koloproktologiya':
                            include 'protected/khirurgiya_proktologiya-koloproktologiya/khirurgiya_proktologiya-koloproktologiya.php';
                            break;
                        case 'khirurgiya_urologiya-andrologiya':
                            include 'protected/khirurgiya_urologiya-andrologiya/khirurgiya_urologiya-andrologiya.php';
                            break;
                        case 'khirurgiya_zabor-organov-transplantatsiya':
                            include 'protected/khirurgiya_zabor-organov-transplantatsiya/khirurgiya_zabor-organov-transplantatsiya.php';
                            break;
                        case 'laboratornaya-diagnostik':
                            include 'protected/laboratornaya-diagnostik/laboratornaya-diagnostik.php';
                            break;
                        case 'pediatriya':
                            include 'protected/pediatriya/pediatriya.php';
                            break;
                        case 'stomatologiya':
                            include 'protected/stomatologiya/stomatologiya.php';
                            break;
                        case 'terapiya':
                            include 'protected/terapiya/terapiya.php';
                            break;
                        case 'terapiya_allergologiya-immunologiya':
                            include 'protected/terapiya_allergologiya-immunologiya/terapiya_allergologiya-immunologiya.php';
                            break;
                        case 'terapiya_dermatologiya-venerologiya-kosmetologiya':
                            include 'protected/terapiya_dermatologiya-venerologiya-kosmetologiya/terapiya_dermatologiya-venerologiya-kosmetologiya.php';
                            break;
                        case 'terapiya_endokrinologiya':
                            include 'protected/terapiya_endokrinologiya/terapiya_endokrinologiya.php';
                            break;
                        case 'terapiya_fizioterapiya-massazh-lfk-reabilitatsiya':
                            include 'protected/terapiya_fizioterapiya-massazh-lfk-reabilitatsiya/terapiya_fizioterapiya-massazh-lfk-reabilitatsiya.php';
                            break;
                        case 'terapiya_gastroenterologiya':
                            include 'protected/terapiya_gastroenterologiya/terapiya_gastroenterologiya.php';
                            break;
                        case 'terapiya_kardiologiya':
                            include 'protected/terapiya_kardiologiya/terapiya_kardiologiya.php';
                            break;
                        case 'terapiya_nevrologiya':
                            include 'protected/terapiya_nevrologiya/terapiya_nevrologiya.php';
                            break;
                        case 'terapiya_psikhoterapiya-narkologiya-psikhiatriya':
                            include 'protected/terapiya_psikhoterapiya-narkologiya-psikhiatriya/terapiya_psikhoterapiya-narkologiya-psikhiatriya.php';
                            break;
                        case 'terapiya_revmatologiya':
                            include 'protected/terapiya_revmatologiya/terapiya_revmatologiya.php';
                            break;
                        case 'search_result':
                            include 'search.php';
                            break;
                        case 'video':
                            include 'apivideo.php';
                            break;
                      case 'coursy':
                        include 'coursy.php';
                        break;
                      case 'adminkursov':
                        include 'obrcenter/adminKursov/adminKursov.php';
                        break;
                      case 'povishenieKvalifikacii':
                        include 'obrcenter/povishenieKvalifikacii.php';
                        break;

                      case 'pk_kalendarMp':
                        include 'obrcenter/povishenieKvalifikacii/pk_kalendarMp.php';
                        break;

                      case 'kurs1':
                        include 'obrcenter/povishenieKvalifikacii/kurs1.php';
                        break;
                      case 'kurs2':
                        include 'obrcenter/povishenieKvalifikacii/kurs2.php';
                        break;
                      case 'edPrograms':
                        include 'obrcenter/povishenieKvalifikacii/edPrograms.php';
                        break;
                      case 'edDocs':
                        include 'obrcenter/povishenieKvalifikacii/edDocs.php';
                        break;
                      case 'obuchaushieMeropriyatiya':
                        include 'obrcenter/obuchaushieMeropriyatiya.php';
                        break;
                      case 'om_kalendarMp':
                        include 'obrcenter/obuchaushieMeropriyatiya/om_kalendarMp.php';
                        break;
                      case 'om_Materials':
                        include 'obrcenter/obuchaushieMeropriyatiya/om_Materials.php';
                        break;
                      case 'vnutrObuchenie':
                        include 'obrcenter/vnutrObuchenie.php';
                        break;
                      case 'vo_kalendarMp':
                        include 'obrcenter/vnutrObuchenie/vo_kalendarMp.php';
                        break;
                      case 'vo_Materials':
                        include 'obrcenter/vnutrObuchenie/vo_Materials.php';
                        break;
                      case 'aspirantura':
                        include 'obrcenter/aspirantura.php';
                        break;
                      case 'as_kalendarMp':
                        include 'obrcenter/aspirantura/as_kalendarMp.php';
                        break;
                      case 'asDocs':
                        include 'obrcenter/aspirantura/asDocs.php';
                        break;
                      case 'asQuestions':
                        include 'obrcenter/aspirantura/asQuestions.php';
                        break;
                      case 'asPortfolio':
                        include 'obrcenter/aspirantura/asPortfolio.php';
                        break;
                      case 'uch-proizvPractika':
                        include 'obrcenter/uch-proizvPractika.php';
                        break;
                      case 'upDocs':
                        include 'obrcenter/uch-proizvPractika/upDocs.php';
                        break;
                      case 'up_stranicaRractikanta':
                        include 'obrcenter/uch-proizvPractika/up_stranicaRractikanta.php';
                        break;


                        case 'vop':
                            include 'apivop.php';
                            break;
                        case 'classifiers_org':
                            include 'classifiers_org.php';
                            break;
                        case 'directory_mkb':
                            include 'directory.php';
                            break;
                        case 'clinical_protocols':
                            include 'clinical_protocols.php';
                            break;
                        case 'calculatorimt':
                        include 'calculatorimt.php';
                        break;

                        default:
                            include 'api.php';
                            break;

                    }
                }
                else
                {
                      include 'api.php';
                }

                    }
                else
                {
                     foreach ($_GET as $key => $value) {
                         $value = $key;
                         break;
                     }
                     if(isset($value)) {
                         switch ($value) {
                             case 'video':
                                 include 'apivideo.php';
                                 break;
                           case 'coursy':
                             include 'coursy.php';
                             break;
                           case 'adminkursov':
                             include 'obrcenter/adminKursov/adminKursov.php';
                             break;
                           case 'povishenieKvalifikacii':
                             include 'obrcenter/povishenieKvalifikacii.php';
                             break;
                           case 'pk_kalendarMp':
                             include 'obrcenter/povishenieKvalifikacii/pk_kalendarMp.php';
                             break;
                           case 'kurs1':
                             include 'obrcenter/povishenieKvalifikacii/kurs1.php';
                             break;
                           case 'kurs2':
                             include 'obrcenter/povishenieKvalifikacii/kurs2.php';
                             break;
                           case 'edPrograms':
                             include 'obrcenter/povishenieKvalifikacii/edPrograms.php';
                             break;
                           case 'edDocs':
                             include 'obrcenter/povishenieKvalifikacii/edDocs.php';
                             break;
                           case 'obuchaushieMeropriyatiya':
                             include 'obrcenter/obuchaushieMeropriyatiya.php';
                             break;
                           case 'om_kalendarMp':
                             include 'obrcenter/obuchaushieMeropriyatiya/om_kalendarMp.php';
                             break;
                           case 'om_Materials':
                             include 'obrcenter/obuchaushieMeropriyatiya/om_Materials.php';
                             break;
                           case 'vnutrObuchenie':
                             include 'obrcenter/vnutrObuchenie.php';
                             break;
                           case 'vo_kalendarMp':
                             include 'obrcenter/vnutrObuchenie/vo_kalendarMp.php';
                             break;
                           case 'vo_Materials':
                             include 'obrcenter/vnutrObuchenie/vo_Materials.php';
                             break;
                           case 'aspirantura':
                             include 'obrcenter/aspirantura.php';
                             break;
                           case 'as_kalendarMp':
                             include 'obrcenter/aspirantura/as_kalendarMp.php';
                             break;
                           case 'asDocs':
                             include 'obrcenter/aspirantura/asDocs.php';
                             break;
                           case 'asQuestions':
                             include 'obrcenter/aspirantura/asQuestions.php';
                             break;
                           case 'asPortfolio':
                             include 'obrcenter/aspirantura/asPortfolio.php';
                             break;
                           case 'uch-proizvPractika':
                             include 'obrcenter/uch-proizvPractika.php';
                             break;
                           case 'upDocs':
                             include 'obrcenter/uch-proizvPractika/upDocs.php';
                             break;
                           case 'up_stranicaRractikanta':
                             include 'obrcenter/uch-proizvPractika/up_stranicaRractikanta.php';
                             break;

                             case 'vop':
                                 include 'apivop.php';
                                 break;
                            case 'classifiers_org':
                               include 'classifiers_org.php';
                               break;
                            case 'directory_mkb':
                                include 'directory.php';
                                break;
                             case 'clinical_protocols':
                                 include 'clinical_protocols.php';
                                 break;

                            default:
                                include 'api.php';
                         }
                     }
                     else
                         include 'api.php';

                }


                    ?>
      <?php include 'getIP.php';?>


    <!-- КОНЕЦ ПОДКЛЮЧЕНИЕ API -->

    <!-- /.content -->
  </div>
    <script>
        // let countUs = ym(93580285, "init", "countUsers");
        // $(function(){
        //     let counterUsers = document.getElementById("counterUsers");
        //     counterUsers.innerText = countUs.size();
        // });
    </script>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> &copy; 2023 <a href="https://rnpcmt.by/">РНПЦ МТ</a></strong>

    <div class="float-right d-none d-sm-inline-block">
      <b>Версия</b> 1.1.1
    </div>
  </footer>

  <!-- Control Sidebar -->
<!--  <aside class="control-sidebar control-sidebar-dark">-->
    <!-- Control sidebar content goes here -->
<!--  </aside>-->
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

<div class="modal" id="myModalFiles">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Документ</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal">X</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" id="modal-bodyFiles" style="height: 700px">
                <div style=" position: absolute; z-index: 999; width: 100%; height: 50px" id="dontDownload"></div>
<!--                <iframe src='https://view.officeapps.live.com/op/embed.aspx?src=https://formed.by/protected/akuserstvo-i-ginekologia/пмз№26_2007.doc' width='1366px' height='623px' frameborder='0'>This is an embedded <a target='_blank' href='http://office.com'>Microsoft Office</a> document, powered by <a target='_blank' href='http://office.com/webapps'>Office Online</a>.</iframe>-->
                <iframe src="" width="1110" height="670"></iframe>
<!--                <object data="" width="1110" height="670"></object>-->
<!--                <embed src="" width="1110" height="670"></embed>-->
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
            </div>

        </div>
    </div>
</div>
<?php include 'elements/cookie_note/cookie.php'?>
<!-- logoutModal FORMS-->

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
<!--caledar-->
<script src="elements/calendar/calendar.js"></script>
<script src="elements/cookie_note/cookie.js"></script>
<!-- DataTables  & Plugins -->
<script src="../dist/js/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
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
      "responsive": true, "lengthChange": false, "autoWidth": false,"ordering": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

  let item = document.querySelector(".nav-item");
  let myframe = document.getElementsByTagName("iframe")[0];
  if(window.screen.width > 1279) {
    item.style = "display: none";
  }

        if(window.screen.width < 600) {
            myframe.style = "width: 350px";
        }

        $(document).ready(() => {
            setHollydays();

        })
        $(document).ready( async function(){
            let yesterdayd = new Date(Date.now()-86400000).toLocaleDateString();
            let yesterday = new Date(Date.now()-86400000).toLocaleDateString().split('.');
            let today = new Date(Date.now()).toLocaleDateString().split('.');
            let strYesterday = yesterday[2]+"-"+yesterday[1]+"-"+yesterday[0];
            let strToday = today[2]+"-"+today[1]+"-"+today[0];
            //https://www.nbrb.by/api/exrates/rates?ondate=2023-04-02&periodicity=0
            let urlYesterday = "https://api.nbrb.by/exrates/rates?ondate=" + strYesterday + "&periodicity=0";
            let urlToday = "https://api.nbrb.by/exrates/rates?ondate=" + strToday + "&periodicity=0";
            let response = await fetch(urlToday);
            let responseurl = await fetch(urlYesterday);
            if (response.ok) {
                let tod = await response.json();
                let yest = await responseurl.json();
                console.log(yest);
                let val1 = document.getElementById("val1");
                let val2 = document.getElementById("val2");
                let yesterdayDate = document.getElementById("yesterdayDate");
                yesterdayDate.innerHTML = yesterdayd;
                let curDate = document.getElementById("curDate");
                val1.innerHTML = "1 " + tod[7]['Cur_Abbreviation'];
                val2.innerHTML = tod[7]['Cur_OfficialRate'];
                let arr = tod[7]['Date'].toString().substr(0,10).split('-');
                curDate.innerHTML = arr[2] + '.' + arr[1] + '.' + arr[0];

                //вчерашний курс
                let valy1 = document.getElementById("valy1");
                valy1.innerText = yest[7]['Cur_OfficialRate'];
                let valy2 = document.getElementById("valy2");
                valy2.innerText = yest[9]['Cur_OfficialRate'];
                let valy3 = document.getElementById("valy3");
                valy3.innerText = yest[21]['Cur_OfficialRate'];
                let valy4 = document.getElementById("valy4");
                valy4.innerText = yest[16]['Cur_OfficialRate'];
                let subUsd = parseFloat(val2.innerText) - parseFloat(valy1.innerText);
                if(subUsd > 0) {
                    val2.innerHTML += "&nbsp;<sup style='color: green'>" + subUsd.toFixed(4) + "</sup>";
                }
                else if(subUsd < 0){
                    val2.innerHTML += "&nbsp;<sup style='color: red'>" + subUsd.toFixed(4) + "</sup>";
                }
                else{
                    val2.innerHTML += "&nbsp;<sup style='color: grey'>" + subUsd.toFixed(4) + "</sup>";
                }

                let val3 = document.getElementById("val3");
                let val4 = document.getElementById("val4");
                val3.innerHTML = "1 " + tod[9]['Cur_Abbreviation'];
                val4.innerHTML = tod[9]['Cur_OfficialRate'];
                let subEur = parseFloat(val4.innerText) - parseFloat(valy2.innerText);
                if(subEur > 0) {
                    val4.innerHTML += "&nbsp;<sup style='color: green'>" + subEur.toFixed(4) + "</sup>";
                }
                else if(subEur < 0){
                    val4.innerHTML += "&nbsp;<sup style='color: red'>" + subEur.toFixed(4) + "</sup>";
                }
                else{
                    val4.innerHTML += "&nbsp;<sup style='color: grey'>" + subEur.toFixed(4) + "</sup>";
                }

                let val5 = document.getElementById("val5");
                let val6 = document.getElementById("val6");
                val5.innerHTML = "100 " + tod[21]['Cur_Abbreviation'];
                val6.innerHTML = tod[21]['Cur_OfficialRate'];
                let subRub = parseFloat(val6.innerText) - parseFloat(valy3.innerText);
                if(subRub > 0) {
                    val6.innerHTML += "&nbsp;<sup style='color: green'>" + subRub.toFixed(4) + "</sup>";
                }
                else if(subRub < 0){
                    val6.innerHTML += "&nbsp;<sup style='color: red'>" + subRub.toFixed(4) + "</sup>";
                }
                else{
                    val6.innerHTML += "&nbsp;<sup style='color: grey'>" + subRub.toFixed(4) + "</sup>";
                }

                let val7 = document.getElementById("val7");
                let val8 = document.getElementById("val8");
                val7.innerHTML = "10 " + tod[16]['Cur_Abbreviation'];
                val8.innerHTML = tod[16]['Cur_OfficialRate'];
                let subCny = parseFloat(val8.innerText) - parseFloat(valy4.innerText);
                if(subCny > 0) {
                    val8.innerHTML += "&nbsp;<sup style='color: green'>" + subCny.toFixed(4) + "</sup>";
                }
                else if(subCny < 0){
                    val8.innerHTML += "&nbsp;<sup style='color: red'>" + subCny.toFixed(4) + "</sup>";
                }
                else{
                    val8.innerHTML += "&nbsp;<sup style='color: grey'>" + subCny.toFixed(4) + "</sup>";
                }

            } else {
                alert("Ошибка HTTP: " + response.status);
            }
        })

        function showModalFiles(urlFile, ext){

            let dontDownload = document.getElementById("dontDownload");
            let modal = document.getElementById("myModalFiles");
            modal.classList.add("show");
            modal.style = "display: block";
            let obj = modal.getElementsByTagName("iframe")[0];

                if (getCookie('login') === "mgb-smp@mogilev.by") {

                    dontDownload.style = "position: absolute; z-index: 999; width: 100%; height: 100px";

                    if(ext === ".doc" || ext === ".docx")
                        obj.src = "https://view.officeapps.live.com/op/embed.aspx?src=" +"https://formed.by" + urlFile;
                    else
                        obj.src = "https://formed.by" + urlFile;
                }
                else {
                    if(ext === ".doc" || ext === ".docx")
                        obj.src = "https://view.officeapps.live.com/op/embed.aspx?src=" +"https://formed.by" + urlFile;
                    else
                        obj.src = "https://formed.by" + urlFile;
                    dontDownload.style="display: none";
                }

            $(".btn-close").on("click",() => {
                modal.classList.remove("show");
                modal.style = "display: none";

            });
            $(".btn-danger").on("click",() => {
                modal.classList.remove("show");
                modal.style = "display: none";

            });
        }


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
