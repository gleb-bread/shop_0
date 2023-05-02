<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'connectionDB.php';
    $idSession = $_COOKIE['id__session'];
    $idProduct = $_POST['id__product'];
    $result = mysqli_query($resultConntection, "DELETE FROM `shop__cart` 
    WHERE `id__session`='$idSession' AND `id__product`='$idProduct'");
    if ($result) {
        $resultQuery = array(
            "result" => true
        );
        echo json_encode($resultQuery);
    } else {
        $resultQuery = array(
            "message" => mysqli_error($resultConntection),
            "result" => false
        );
        echo json_encode($resultQuery);
    }
}
?>