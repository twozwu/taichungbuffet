<?php
(!isset($_SESSION))?session_start():"";
$logoutGoTo = "login.php";
session_unset();
header("Location: $logoutGoTo");
