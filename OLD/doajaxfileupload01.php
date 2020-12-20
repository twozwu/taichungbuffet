<?php
$output_dir = "uploads/";
if(isset($_FILES["fileToUpload"]))
{
	$error =$_FILES["fileToUpload"]["error"];
	if(!is_array($_FILES["fileToUpload"]["name"])) {		//single file
        $extName= pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
        $fileNameNew=strtotime("now").".".$extName;
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$output_dir.$fileNameNew);
    	$filenames[]= $fileNameNew;
	}
	else { 			//Multiple files, file[]
	  $fileCount = count($_FILES["fileToUpload"]["name"]);
	  for($i=0; $i < $fileCount; $i++)  {
	  	$extName = pathinfo($_FILES["fileToUpload"]["name"][$i],PATHINFO_EXTENSION);
        $fileNameNew=strtotime("now").".".$extName;
		move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i],$output_dir.$fileNameNew);
        $filenames[]+= $fileNameNew;
	  }
	}
    $retcode = array("success" => "true", "msg" => "完成檔案上傳", "error" => "","filename"=>$filenames);
    echo json_encode($retcode,JSON_UNESCAPED_UNICODE);
    return;
}
$retcode = array("success" => "false", "msg" => "無法完成檔案上傳", "error" => "upload to fail","filename"=>"");
echo json_encode($retcode,JSON_UNESCAPED_UNICODE);
return;
?>
