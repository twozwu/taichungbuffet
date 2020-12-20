<?php
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json;charset=utf-8'); //return json string
include_once("Connection/dbset.php");
include_once("json_encode.php");
$Zip = "SELECT `town`.`Name`,`town`.`Post`,`city`.`Name` as Cityname FROM `town`,`city` where `town`.`CNo`=`city`.`AutoNo` and `town`.`AutoNo`='" . $_GET["TNo"] . "'";
$Zip_rs = mysqli_query($link,$Zip);
$Zip_num = mysqli_num_rows($Zip_rs);
if ($Zip_num > 0) {//區域(鄉鎮)編號帶入後如果有資料存在顯示底下郵遞區號內容後回傳
	$Town_rows = mysqli_fetch_array($Zip_rs);
	$retcode = array("c" => "1", "Post" =>$Town_rows['Post'],"Name"=>$Town_rows['Name'],"Cityname"=>$Town_rows['Cityname']);
} else {
	$retcode = array("c" => "0", "m" => '找不到相關資料');
}
// echo json_encode($retcode, JSON_UNESCAPED_UNICODE);
echo json_encode01($retcode);
return;
?>
