<?php
header( 'Access-Control-Allow-Origin:*' );
header( 'Content-Type: application/json;charset=utf-8' ); 
//return json string
include_once("Connection/dbset.php");
include_once("json_encode.php");
// include_once("json_encode.php");
$Town = "select * from Town where CNo='" . $_POST["CNo"] . "'";
$Town_rs = mysqli_query($link,$Town);
$Town_num = mysqli_num_rows($Town_rs);
$htmlstring="<option value=''>選擇鄉鎮</option>";
if ($Town_num > 0) {
	while ($Town_rows = mysqli_fetch_array($Town_rs)) {
		$htmlstring=$htmlstring."<option value='" . $Town_rows["AutoNo"] . "'>" . $Town_rows["Name"] . "</option>";
	}
	$retcode = array("c" => "1", "m" => $htmlstring);
}else {
	$retcode = array("c" => "0", "m" => '找不到相關資料');
}
// echo json_encode($retcode, JSON_UNESCAPED_UNICODE);
echo json_encode01($retcode);
// echo json_encode01($retcode);
return;
?>