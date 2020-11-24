<?php
include 'db.php';
if (isset($_GET['maxoa'])) {
    $maxoa = $_GET['maxoa'];
    $sql = "delete from slide where id_slide='$maxoa'";
    $kq = $conn->prepare($sql);
    echo $sql;
    if ($kq->execute()) {
        header("Location:silde.php");
    } else {
        echo "loi khong xoa duoc.";
    }
}
