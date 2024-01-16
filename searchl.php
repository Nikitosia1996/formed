<?php

include 'connection.php';
include "classDocFind.php";

$error = array();

function searchFiles($dir, $search_query) {

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

    if (strripos($content, $search_query) !== false) {
      $parentDirName = basename(dirname($filePath));
      $ext = '.docx';
      echo '<div class="card w-75" style="margin-left: 20px">
                    <div class="card-body">
                        <h5 class="card-title">'. $file .'</h5>
                         <button onclick="showModalFiles(\'/' . $filePath . '\',\''.$ext.'\')" class="btn btn-primary">Просмотр</button><br/>

                        <a href="' . $filePath . '" target="_blank">Скачать</a>
                         <a href="/index.php?' . $parentDirName . '" target="_blank">ссылка на раздел</a>
                    </div>
                </div>';
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
