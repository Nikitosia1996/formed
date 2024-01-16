<?php
$host='localhost';
$user='f0770416_database';
$password='root';
$database='f0770416_database';
$link = mysqli_connect($host, $user, $password, $database) or die ("Ошибка подключения " . mysqli_error($link));



$row = 1;
if (($handle = fopen("common-question_osnovnyye-zakony-rb.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
        $num = count($data);
        echo "<p> $num полей в строке $row: <br /></p>\n";

        $insertquery = "INSERT INTO `archive_common-question_osnovnyye-zakony-rb`(`id_akt`,
                                     `num_akt`, `name`, `date_prik`, `type`, `file`, `url`)
                                     VALUES (NULL, '{$data[2]}', '{$data[3]}', '{$data[1]}',
                                       '{$data[0]}', NULL, '/index.php?common-question_osnovnyye-zakony-rb')";
//        $insertquery = "UPDATE `archive_common-question_osnovnyye-zakony-rb`
//                        SET `file` = 'Alfred Schmidt'
//                        WHERE `id_akt` = '{$row}'";
        $result = mysqli_query($link, $insertquery) or die("Ошибка ". mysqli_error($link));
        $row++;
    }
    echo "се ок";
    fclose($handle);
}
?>
