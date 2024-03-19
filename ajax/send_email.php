<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $to = "anastasiya.kurishko2020@gmail.com";

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $selectedValue1 = $_POST['selectedValue1'];
  $dateMP = $_POST['dateMP'];

  $message = "Name: $name\n";
  $message .= "Email: $email\n";
  $message .= "Phone: $phone\n";
  $message .= "Selected Event: $selectedValue1\n";
  $message .= "Event Date: $dateMP\n";

  $headers = "From: bourakovskaia@rnpcmt.by";

  // Send email
  if (mail("kuryshka@rnpcmt.by", "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: bourakovskaia@rnpcmt.by \r\n")) {
    echo "good"; // Email sent successfully
  } else {
    echo "bad"; // Error sending email
  }
}
?>
