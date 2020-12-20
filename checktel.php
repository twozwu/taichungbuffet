<?php
include_once "Connections/cnStu.php";
if(isset($_GET['tel'])) {
    $tel = $_GET['tel'];
    $query = "SELECT shopid FROM `member` WHERE `tel` = '". $tel."'";
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