<?php
session_start();
header("Content-Type: application/json");

$jsonString = file_get_contents('../../static/menu.json');
$data = json_decode($jsonString, true);

if(isset($_GET["action"])){
 if($_GET["action"]=='ADD_TECH'){
	if(isset($_GET["title"])){
		$newTech = array();
		$newTech["title"] = $_GET["title"];
		$newTech["subject"] = array();
		$data[count($data)] = $newTech;
	}
 }
 else if($_GET["action"]=='ADD_SUBJECT'){ 
	if(isset($_GET["techTitle"])){
		foreach ($data as $key => $entry) {
			if ($entry['title'] == $_GET["techTitle"]) {
				$isUpdate = 0;
				foreach ($data[$key]['subject'] as $subjectKey => $subjectEntry) {
					if($data[$key]['subject'][$subjectKey]['id'] == $_GET["id"]){
						$isUpdate = 1;
						$data[$key]['subject']['title']=$_GET["title"];
						$data[$key]['subject']['syllabus']=array();
					}
				}
				if($isUpdate==0) {
					$subjectInfo = array();
					$subjectInfo['id']=$_GET["id"];
					$subjectInfo['title']=$_GET["title"];
					$subjectInfo['syllabus']=array();
					$data[$key]['subject'][count($data[$key]['subject'])] = $subjectInfo;
				}
			}
		}
	}
 }
}
$newJsonString = json_encode($data);
file_put_contents('../../static/menu.json', $newJsonString);
echo $newJsonString;