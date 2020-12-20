<?php
include_once "Connections/cnStu.php";

$no = $_POST['no'];
$query = "SELECT * FROM `cart` where fid='$no'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

if (isset($_SESSION['username'])) {
    $query = "SELECT * FROM `member` where username='" . $_SESSION['username'] . "'";
    $result = mysqli_query($link, $query);
    $data = mysqli_fetch_assoc($result);
    $shopid = $data['shopid'];
    $username = $_SESSION['username'];
    //更新購買者資料shopid
    $query = "UPDATE `cart` set  where username='$username'";
    mysqli_query($link, $query);
}

//加入購物車
if (mysqli_num_rows($result) == 0) {
    $query = "INSERT INTO `cart`(fid, qty, ip) VALUES ('$no','1' ,'" . $_SERVER['REMOTE_ADDR'] . "')";
    mysqli_query($link, $query);
} else {
    $num = $data['qty'];
    $num += 1;
    $query = "UPDATE `cart` set qty='$num' where fid='$no'";
    mysqli_query($link, $query);
}
