<?php
include_once "Connections/cnStu.php";

$no = $_POST['no'];
$query = "SELECT * FROM `cart` where fid='$no'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

//減一購物車
if (mysqli_num_rows($result) == 0) {
    $query = "INSERT INTO `cart`(fid, qty, ip) VALUES ('$no','1' ,'" . $_SERVER['REMOTE_ADDR'] . "')";
    mysqli_query($link, $query);
} else {
    $num = $data['qty'];
    if ($num < 2) {
        // $num = 0;
        $query = "DELETE FROM `cart` where cart.fid='$no'";
        mysqli_query($link, $query);
    } else {
        $num -= 1;
        $query = "UPDATE `cart` set qty='$num' where fid='$no'";
        mysqli_query($link, $query);
    }
}
