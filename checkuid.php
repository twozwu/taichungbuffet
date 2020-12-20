<?php
include_once "Connections/cnStu.php";
if(isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $query = "SELECT shopid FROM `member` WHERE `uid` = '". $uid."'";
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