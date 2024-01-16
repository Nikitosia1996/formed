<?php
    include 'processing/auth.php';

    if(isset($_POST['log_in']))
    {
      $sesId = $_COOKIE['PHPSESSID'];
        $error = enter($sesId); //функция входа на сайт

        if (count($error) == 0) //если ошибки отсутствуют, авторизируем пользователя
        {
            $UID = $_SESSION['id_user'];


            header('Location: http://'.$_SERVER['HTTP_HOST'].'/index.php');
        }
        else if(count($error) == 2)
            echo "<script> alert('Данный аккаунт занят'); </script>";
        else
            echo "<script> alert('Неверный логин или пароль'); </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Личный кабинет - авторизация</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Авторизация</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Войдите, чтобы начать сеанс</p>

      <form action="/login.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="login" placeholder="Почта" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Пароль" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        <!--  <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div> -->
          <!-- /.col -->
<!--          <div class="col-4">-->
<!--            <button type="submit" class="btn btn-primary btn-block" name="log_in">Войти</button>-->
<!--          </div>-->
          <!-- /.col -->
        </div>
        <div class="social-auth-links text-center mb-3">
          <button type="submit" class="btn btn-block btn-primary" name="log_in">
            Войти
          </button>
        </div>
      </form>


      <!-- /.social-auth-links -->

<!--      <p class="mb-1">-->
<!--        <a href="forgot-password.html">I forgot my password</a>-->
<!--      </p>-->
<!--      <p class="mb-0">-->
<!--        <a href="register.html" class="text-center">Register a new membership</a>-->
<!--      </p>-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
