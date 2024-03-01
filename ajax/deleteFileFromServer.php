<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $fileName = $_POST['fileName'];
  $loginUser = $_POST['loginUser'];

  $filePath = '../docs/practikant/' . $loginUser . '/' . $fileName; // Путь к файлу на сервере

  if (file_exists($filePath)) {
    unlink($filePath); // Удаление файла
    echo json_encode(['success' => true]);

  } else {
    echo json_encode(['success' => false]);
    echo $filePath . 'путь';

  }
}
?>
