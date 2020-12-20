<?php
include_once "Connections/cnStu.php";
(!isset($_SESSION)) ? session_start() : "";

$order =$_SESSION['shopid'];
$deleteGoTo="checkCart.php";
$query = sprintf("DELETE FROM uorder WHERE shopid='%s'",$order);
$result = mysqli_query($link,$query);
header(sprintf("Location: %s", $deleteGoTo));

?>