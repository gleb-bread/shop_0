<?php 
    include './connectionDB.php';
    $idSession = $_COOKIE['id__session'];
    $countProductOnCart = mysqli_query($resultConntection, "SELECT * FROM `shop__cart`
    WHERE `id__session`='$idSession'");
    while($row = mysqli_fetch_assoc($countProductOnCart)){
        $_COOKIE['count__product']++;
    }
    if ($_COOKIE['count__product'] > 0)
        echo $_COOKIE['count__product'];
?>