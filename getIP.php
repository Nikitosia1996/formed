<?php



?>

<?php

function getIp() {
    $keys = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'REMOTE_ADDR'
    ];
    foreach ($keys as $key) {
        if (!empty($_SERVER[$key])) {
            $array = explode(',', $_SERVER[$key]);
            $ip = trim(end($array));
            if (filter_var($ip, FILTER_VALIDATE_IP)) {
                return $ip;
            }
        }
    }
}

$ip = getIp();
// выведем IP клиента на экран
//echo 'ip = ' . $ip;
mysqli_query($con, "Insert into ips(`ip`) values ('$ip')");
?>
