<?php
    include 'connectionDB.php';
    $result = mysqli_query($resultConntection, "DELETE FROM `shop__cart`");
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
?>