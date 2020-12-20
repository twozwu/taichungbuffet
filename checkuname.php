<?php
include_once "Connections/cnStu.php";
if(isset($_GET['uname'])) {
    $uname = $_GET['uname'];
    $query = "SELECT shopid FROM `member` WHERE `username` = '". $uname."'";
    $result = mysqli_query($link,$query) ;
   $row = mysqli_num_rows($result); 
   if($row==0){
      echo 'true';
      return;
   }
} 
echo 'false';
return ;
?>