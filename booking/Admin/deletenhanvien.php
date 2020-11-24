<?php
include 'db.php';
if (isset($_GET['maxoa'])) {
    $maxoa = $_GET['maxoa'];
    $sql = "delete from nhanvien where id_nv='$maxoa'";
    $kq = $conn->prepare($sql);
    echo $sql;
    if ($kq->execute()) {
        header("Location:nhanvien.php");
    } else {
        echo "loi khong xoa duoc.";
    }
}
