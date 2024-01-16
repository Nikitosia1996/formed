<?php
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
    $textSubj = "Письмо МЗРБ №10-42/3942 о форме заявления";
    $subj = iconv("utf-8","cp1251",$textSubj);
    $text = "Для учета в работе заместителю директора по экономическим технологиям и международным проектам Шарало В.В.\n Форма заявления:";
    $message=iconv("utf-8","cp1251",$text);
    if (mail("sharalo@rnpcmt.by", $subj, $message." https://vagcom.com.ua/upload/medialibrary/6fd/028.webp?1650639229" ,"From: mzrb@belcmt.by \r\n")){
        echo "Сообщение успешно отправлено";
    } else {
        echo "При отправке сообщения возникли ошибки";
    }
}
?>
