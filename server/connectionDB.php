<?php
    $ip = "127.0.0.1";
    $login = "root";
    $password = "g0f9d8s7A";
    $nameDB = "shop__SummerLight";

    $resultConntection = mysqli_connect($ip, $login, $password, $nameDB);

    if ($resultConntection == false){
        echo "Ошибка подключения БД";
    }
?>