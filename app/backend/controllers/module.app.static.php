<?php
session_start();
header("Content-Type: application/json");
require_once '../core/app.database.php';
require_once '../core/app.initiator.php';
require_once '../repo/data.module.app.static.php';

if(isset($_GET["action"])){
 if($_GET["action"]=='APP_VIEW_STATDATA'){
	$appStaticModule->query_view_appStaticData($list);	
 } 
 else if($_GET["action"]=='APP_ADDUPDATE_STATDATA'){
	if(isset($_POST["configKey"]) && isset($_POST["configValue"])) {
	 $configKey = $_POST["configKey"];
	 $configValue = $_POST["configValue"];
	 $query = $appStaticModule->query_addUpdate_appStaticData($configKey, $configValue);
	 $content["status"] =  $database->addupdateData($query);
	 $content["message"] = "Data Added/Updated Successfully";
	 echo json_encode($content);
	} else {
	   $message='Missing';
	   if(!isset($_POST["configKey"])){ $message.=' configKey,'; }
	   if(!isset($_POST["configValue"])){ $message.=' configValue,'; }
	   $message=chop($message,',');
	   $content = array();
	   $content["status"] =  "Failed";
	   $content["message"] = $message;
	   echo json_encode($content);
	}
 } else if($_POST["action"]=='APP_DELETE_STATDATA'){
	$appStaticModule->query_delete_appStaticData($configKey);	
 } 
}
else if(isset($_POST["action"])){

}
else { 
 $content = array();
 $content["status"] = "Failed";
 $content["message"] = "Expecting Action Parameter";
 echo json_encode($content);
}
	