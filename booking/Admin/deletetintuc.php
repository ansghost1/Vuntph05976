<?php
include 'db.php';
if (isset($_GET['maxoa'])) {
    $maxoa = $_GET['maxoa'];
    $sql = "delete from tintuc where id='$maxoa'";
    $kq = $conn->prepare($sql);
    echo $sql;
    if ($kq->execute()) {
        header("Location:tintuc.php");
    } else {
        echo "loi khong xoa duoc.";
    }
}
