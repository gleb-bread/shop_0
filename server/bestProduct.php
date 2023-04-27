<?php
    $ip = "127.0.0.1";
    $login = "root";
    $password = "g0f9d8s7A";
    $nameDB = "shop__SummerLight";

    $resultConntection = mysqli_connect($ip, $login, $password, $nameDB);

    if ($resultConntection == false){
        echo "Ошибка подключения БД";
    }

    $bestProduct;
    $maxNumProd = 8;
    $numIdCategories = 1;
    while($maxNumProd == 0){
        $product = mysqli_query($resultConntection, "SELECT * FROM `shop__product` WHERE `id__categories`=$numIdCategories LIMIT 1");
        $bestProduct += mysqli_fetch_assoc($product);
        $numIdCategories += 1;
        $maxNumProd -= 1;
    }
?>