<?php
include_once "Connections/cnStu.php";

$no = $_POST['no'];
$query = "SELECT * FROM `uorder` where id='$no'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

if (isset($_SESSION['shopid'])) {
    $query = "SELECT * FROM `uorder` where shopid='" . $_SESSION['shopid'] . "'";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);
    $id = $data['id'];
    //更新購買者資料shopid
    $query = "UPDATE `` set shopid='$shopid' where id='$id'";
    mysqli_query($link, $query);
}

//加入購物車
if (mysqli_num_rows($result) == 0) {
    $query = "INSERT INTO `uorder`(id, qty) VALUES ('$no','1')";
    mysqli_query($link, $query);
} else {
    $num = $data['qty'];
    $num += 1;
    $query = "UPDATE `uorder` set qty='$num' where id='$no'";
    mysqli_query($link, $query);
}
