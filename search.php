<?php

include 'connection.php';
include "classDocFind.php";

$error = array();

function searchFiles($dir, $search_query) {
  global $con;

  $files = scandir($dir);
  foreach($files as $file) {

    if ($file == "." || $file == "..")
      continue;

    $filePath = $dir.'/'.$file;
    if (is_dir($filePath)) {
      searchFiles($filePath, $search_query);
      continue;
    }

    $converter = new DocxConversion($filePath);
    $content = $converter->convertToText();
    $content = mb_convert_encoding($content, 'UTF-8');
    $content = mb_strtolower($content);

    $search_query = mb_strtolower($search_query);

    if (stripos($content, $search_query) !== false) {

      $startpos = strpos ($filePath , '/')+1;
      $endpos = strripos ($filePath , '/');
      $respos =  substr($filePath,$startpos, $endpos-$startpos );



      $ext = '.docx';
      if ($respos == 'akuserstvo-i-ginekologia') {
        $respos = 'akusherstvo';
      }

      $query = "SELECT name, num_akt, file FROM `archive_". $respos ."` WHERE file = '/" . $filePath . "'";
      $result = $con->query($query);
      if (!$result) {
        die("Ошибка выполнения запроса: " . $con->error);
      }

      if ($result->num_rows > 0) {
        $rowData = $result->fetch_assoc();
        if ($respos == 'akusherstvo') {
          $respos = 'akusherstvo-i-ginekologiya';
        }
        echo '<div class="card w-75" style="margin-left: 20px">
                  <div class="card-body">
                    <h5 class="card-title">'.$rowData["num_akt"].'</h5>
                    <p class="card-text">'.$rowData["name"].'</p>
                    <button onclick="showModalFiles(\''.$rowData["file"].'\',\''.$ext.'\')" class="btn btn-primary">Просмотр</button><br/>
                    <a href="/index.php?' . $respos . '" target="_blank">ссылка на раздел</a>
                  </div>
              </div>';
      }
    }
  }

}

if ($_POST['search_field'] != "") {
  $search_query = $_POST['search_field'];

  $rootDir = "protected";
  searchFiles($rootDir, $search_query);

} else {
  $error[] = "The search field should not be empty!";
  return $error;
}

?>
