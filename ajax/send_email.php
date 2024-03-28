<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $time = $_POST['time'];
  $selectedValue1 = $_POST['selectedValue1'];
  $dateMP = $_POST['dateMP'];
  $newDateMP = date('d.m.Y', strtotime($dateMP));

  $messageForUser = "Вы записаны на мероприятие $selectedValue1<br>";
  $messageForUser .= "Дата мероприятия: $newDateMP<br>";
  $messageForUser .= "Время: $time<br>";


  $message = "ФИО: $name<br>";
  $message .= "Email: $email<br>";
  $message .= "Номер телефона: $phone<br>";
  $message .= "Записан на мероприятие: $selectedValue1<br>";
  $message .= "Дата мероприятия: $newDateMP<br>";

  $headers = 'From: obrcenter@rnpcmt.by' . "\r\n" .
    'Content-type: text/html; charset=utf-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

  // Send email
  if (mail("kuryshka@rnpcmt.by", "Заявка с сайта", $message ,$headers) && mail($email, "Запись на мероприятие", $message ,$headers)) {
    echo "good"; // Email sent successfully
  } else {
    echo "bad"; // Error sending email
  }
}
?>
