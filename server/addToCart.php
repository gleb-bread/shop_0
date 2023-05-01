<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'connectionDB.php';

    $idUser = $_POST['user__id'];
    $idProduct = $_POST['id__product'];
    $countProduct = $_POST['count__product'];
    $idSession = $_COOKIE['id__session'];
    if (isset($idUser)){
        $checkProductOnCart = mysqli_query($resultConntection, "SELECT * FROM `shop__cart` WHERE 
        `id__user`='$idUser' AND `id__product`='$idProduct'");
        if (mysqli_num_rows($checkProductOnCart)){
            $infoProduct = mysqli_fetch_assoc($checkProductOnCart);
            $newCount =  $infoProduct['count__product'] + $countProduct;
            $changeCountProduct = mysqli_query($resultConntection, "UPDATE `shop__cart` SET `count__product`=$newCount
            WHERE `id__user`='$idUser' AND `id__product`='$idProduct'");
        }else{
            $inputToCart = mysqli_query($resultConntection, "INSERT INTO `shop__cart`(`id__user`,`id__session`,
            `id__product`,`count__product`) VALUES ($idUser, $sessionId, $idProduct, $countProduct)");
        }
    } else {
        $checkProductOnCart = mysqli_query($resultConntection, "SELECT * FROM `shop__cart` WHERE 
        `id__session`='$idSession' AND `id__product`='$idProduct'");
        if (mysqli_num_rows($checkProductOnCart)){
            $infoProduct = mysqli_fetch_assoc($checkProductOnCart);
            $newCount =  $infoProduct['count__product'] + $countProduct;
            $changeCountProduct = mysqli_query($resultConntection, "UPDATE `shop__cart` SET `count__product`=$newCount
            WHERE `id__session`='$idSession' AND `id__product`='$idProduct'");
        }else{
            $inputToCart = mysqli_query($resultConntection, "INSERT INTO `shop__cart`(`id__user`,`id__session`,`id__product`,`count__product`)
            VALUES(NULL,'$idSession', '$idProduct', '$countProduct')");
            if ($inputToCart) {
                echo "Данные успешно добавлены в таблицу.";
            } else {
                echo mysqli_error($resultConntection);
            }
        }
    }
}
?>
