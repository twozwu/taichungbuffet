<?php
include_once "Connections/cnStu.php";

$no = $_POST['no'];
$query = "SELECT * FROM `uorder` where id='$no'";
$result = mysqli_query($link, $query);
$data = mysqli_fetch_assoc($result);

//減一購物車
if (mysqli_num_rows($result) == 0) {
    $query = "INSERT INTO `uorder`(id, qty) VALUES ('$no','1')";
    mysqli_query($link, $query);
} else {
    $num = $data['qty'];
    if ($num < 2) {
        // $num = 0;
        $query = "DELETE FROM `uorder` where uorder.id='$no'";
        mysqli_query($link, $query);
    } else {
        $num -= 1;
        $query = "UPDATE `uorder` set qty='$num' where id='$no'";
        mysqli_query($link, $query);
    }
}
