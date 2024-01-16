<?php
session_start();
$keys = array('Qdx^%YYLKfgd9i#a','Cc5R7F9#BBnk&6KR','3st@@jEjoZYZBsUm' ,'7WMXR%msoVhQuuRc' , '7Gg3u%8bc$FnL2Cc' , 'am6ie&^DHfK#^us6' , 'YBgenjdV7Y$!4xiY' , 'S8esbuxz', 'prosmotr');

$locationKeys = $_POST['key'];
$isKeyCorrect = false;

switch ($locationKeys) {
  case $keys[0]:
    setcookie('key', 'Витебск');
    $isKeyCorrect = true;
    break;

  case $keys[1]:
    setcookie('key', 'Гродно');
    $isKeyCorrect = true;
    break;

  case $keys[2]:
    setcookie('key', 'Гомель');
    $isKeyCorrect = true;
    break;

  case $keys[3]:
    setcookie('key', 'Могилев');
    $isKeyCorrect = true;
    break;

  case $keys[4]:
    setcookie('key', 'Могилевский ОЛДЦ');
    $isKeyCorrect = true;
    break;

  case $keys[5]:
    setcookie('key', 'Могилевская областная детская больница');
    $isKeyCorrect = true;
    break;

  case $keys[6]:
    setcookie('key', 'РНПЦ');
    $isKeyCorrect = true;
    break;

  case $keys[7]:
    setcookie('key', 'Admin');
    $isKeyCorrect = true;
    break;

  case $keys[8]:
    setcookie('key', 'AdminProsmotr');
    $isKeyCorrect = true;
    break;

  default:
    setcookie("key", "");
}

echo json_encode(array("isKeyCorrect" => $isKeyCorrect));
?>
