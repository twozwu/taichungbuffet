<?php
include_once "Connections/cnStu.php";

$ip =$_SERVER['REMOTE_ADDR'];
$deleteGoTo="shopcart.php";
$query = sprintf("DELETE FROM cart WHERE ip='%s'",$ip);
$result = mysqli_query($link,$query);
header(sprintf("Location: %s", $deleteGoTo));
?>