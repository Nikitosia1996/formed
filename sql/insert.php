


<?php

$host='localhost'; 
  $user='root'; 
  $password='root';
  $database='database'; 
  $con = mysqli_connect($host, $user, $password, $database) or die ("Ошибка подключения " . mysqli_error($link));
    if (isset($_POST['submit'])) {
          $person=$_POST['person'];

          $insertquery = "INSERT INTO forms_statements(person) VALUES('$person')";

          $result = mysqli_query($con, $insertquery) or die("Ошибка ". mysqli_error($con));

          if($result){
            header("Location: ".$_SERVER['REQUEST_URI']);
          }

          $id = "SELECT id_form FROM forms_statements ORDER BY id_form DESC LIMIT 1";
        
        if (isset($_FILES['inform']['name']))
        {
          $file_name = $_FILES['inform']['name'];
          $file_tmp = $_FILES['inform']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./documents/".$file_name);

          $insertquery = "INSERT INTO documents(id_type,id_form,file) VALUES(1,'$file_name')";

          $result = mysqli_query($con, $insertquery) or die("Ошибка ". mysqli_error($con));

          if($result){
            header("Location: ".$_SERVER['REQUEST_URI']);
          }
          
        }

        if (isset($_FILES['copiya']['name']))
        {
          $file_name = $_FILES['copiya']['name'];
          $file_tmp = $_FILES['copiya']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./documents/".$file_name);

          $insertquery =
          "INSERT INTO documents(id_type,file) VALUES(2,'$file_name')";

          $result = mysqli_query($con, $insertquery) or die("Ошибка ". mysqli_error($con));

          if($result){
            header("Location: ".$_SERVER['REQUEST_URI']);
          }
          
        }

        if (isset($_FILES['doveren']['name']))
        {
          $file_name = $_FILES['doveren']['name'];
          $file_tmp = $_FILES['doveren']['tmp_name'];
 
          move_uploaded_file($file_tmp,"./documents/".$file_name);

          $insertquery =
          "INSERT INTO documents(id_type,file) VALUES(3,'$file_name')";

          $result = mysqli_query($con, $insertquery) or die("Ошибка ". mysqli_error($con));

          if($result){
            header("Location: ".$_SERVER['REQUEST_URI']);
          }
          
          
        }
        mysql_close($con);
    }
?>