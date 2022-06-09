<?php
session_start();
header("Content-Type: application/json");
require_once '../core/app.database.php';
require_once '../core/app.initiator.php';
require_once '../repo/data.module.platform.php';

if(isset($_GET["action"])){
/* VIEW PLATFORM ::: START */
	if($_GET["action"]=='GENERATE_PLATFORM_INFO'){
	  $techCategory = new TechCategory();
	  $techSql = $techCategory->query_get_Technologies();
	  $techContent = json_decode($database->getJSONData($techSql));

	  $data = array();
	  foreach($techContent as $tech) {
		$techTitle = $tech->{'title'};
		
		$tech = array();
		$tech['title'] = $techTitle;
		
		$subjectCategory = new SubjectCategory();
		$subjectSql = $subjectCategory->query_get_subjects($techTitle);
		$subjectContent = json_decode($database->getJSONData($subjectSql));
		
		if(count($subjectContent)>0){
			foreach($subjectContent as $subject) {
				$subjectId = $subject->{'id'};
				$subjectTitle = $subject->{'title'};
				
				$subject = array();
				$subject['id'] = $subjectId;
				$subject['title'] = $subjectTitle;
				
				$syllabusCategory = new SyllabusCategory();
				$syllabusSql = $syllabusCategory->query_get_syllabus($subjectTitle);
				$syllabusContent = json_decode($database->getJSONData($syllabusSql));
				
				if(count($syllabusContent)>0){
					foreach($syllabusContent as $syllabus) {
					  $syllabusId = $syllabus->{'id'};
					  $syllabusTitle = $syllabus->{'title'};
					  
					  $syllabus = array();
					  $syllabus['id'] = $syllabusId;
					  $syllabus['title'] = $syllabusTitle;
					  
					  $subject['syllabus'][] = $syllabus;
					}
				} else {
					$subject['syllabus']= [];
				}
				$tech['subject'][] = $subject;
			}
		} else {
			$tech['subject']= [];
		}
		$data[] = $tech;
	  }
	  echo json_encode($data);
	}
/* VIEW PLATFORM ::: END */

/* ADD PLATFORM ::: START */
	else if($_GET["action"]=='TECH_ADD_NEW'){
	  if(isset($_GET["techName"]) && isset($_GET["techDesc"])){
		$techName = $_GET["techName"];
		$techDesc = $_GET["techDesc"];
		$query = $techCategory->query_add_newTechnology($techName, $techDesc);
		$content = array();
		$content["status"] = $database->addupdateData($query);
		$content["insertId"] = $techName;
		$content["platform"] = json_decode(file_get_contents("http://localhost/np/locumme_java/src/main/resources/backend/platform/generate"));
		echo json_encode($content);
	  } else {
		  $content = array();
		  $content["status"] =  'Failed';
		  $message =  'Missing';
		  if(!isset($_GET["techName"])) { $message.=' techName,'; }
		  if(!isset($_GET["techDesc"])) { $message.=' techDesc,'; }
		  $message = chop($message,',');
		  $content["message"] = $message;
		  echo json_encode($content);
	  }
	}
	else if($_GET["action"]=='SUBJECT_ADD_NEW'){
	  if(isset($_GET["subjectName"]) && isset($_GET["techName"]) 
		  && isset($_GET["subjectDesc"]) && isset($_GET["subjectFolder"])){
		$subjectName = $_GET["subjectName"];
		$techName = $_GET["techName"];
		$subjectDesc = $_GET["subjectDesc"];
		$subjectFolder = $_GET["subjectFolder"];
		$query = $subjectCategory->query_add_newSubject($subjectName, $techName, $subjectDesc, $subjectFolder);
		$content = array();
		$content["status"] =  $database->addupdateData($query);
		$content["insertId"] = $subjectName;
		$content["platform"] = json_decode(file_get_contents("http://localhost/np/locumme_java/src/main/resources/backend/platform/generate"));
		echo json_encode($content);
	  } else {
		  $content = array();
		  $content["status"] =  'Failed';
		  $message =  'Missing';
		  if(!isset($_GET["subjectName"])) { $message.=' subjectName,'; }
		  if(!isset($_GET["techName"])) { $message.=' techName,'; }
		  if(!isset($_GET["subjectDesc"])) { $message.=' subjectDesc,'; }
		  if(!isset($_GET["subjectFolder"])) { $message.=' subjectFolder,'; }
		  $message = chop($message,',');
		  $content["message"] = $message;
		  echo json_encode($content);
	  }
	}
	else if($_GET["action"]=='SYLLABUS_ADD_NEW'){
	  if(isset($_GET["syllabusName"]) && isset($_GET["subjectName"]) 
		  && isset($_GET["syllabusDesc"]) && isset($_GET["syllabusFolder"])){
		$syllabus = $_GET["syllabusName"];
		$subject = $_GET["subjectName"];
		$syllabusDesc = $_GET["syllabusDesc"];
		$syllabusFolder = $_GET["syllabusFolder"];
		$query = $syllabusCategory->query_add_newSyllabus($syllabus, $subject, $syllabusDesc, $syllabusFolder);
		$content = array();
		$content["status"] =  $database->addupdateData($query);
		$content["insertId"] = $syllabus;
		$content["platform"] = json_decode(file_get_contents("http://localhost/np/locumme_java/src/main/resources/backend/platform/generate"));
		echo json_encode($content);
	  } else {
		  $content = array();
		  $content["status"] =  'Failed';
		  $message =  'Missing';
		  if(!isset($_GET["syllabusName"])) { $message.=' syllabusName,'; }
		  if(!isset($_GET["subjectName"])) { $message.=' subjectName,'; }
		  if(!isset($_GET["syllabusDesc"])) { $message.=' syllabusDesc,'; }
		  if(!isset($_GET["syllabusFolder"])) { $message.=' syllabusFolder,'; }
		  $message = chop($message,',');
		  $content["message"] = $message;
		  echo json_encode($content);
	  }
	}
/* ADD PLATFORM ::: END */

/* UPDATE PLATFORM ::: START */	
	else if($_GET["action"]=='TECH_UPDATE_NEW'){
	  if(isset($_GET["techName"]) && isset($_GET["techDesc"])){
		$techName = $_GET["techName"];
		$techDesc = $_GET["techDesc"];
		$query = $techCategory->query_update_newTechnology($techName, $techDesc);
		$content = array();
		$content["status"] =  $database->addupdateData($query);
		$content["updatedId"] = $techName;
		$content["platform"] = json_decode(file_get_contents("http://localhost/np/locumme_java/src/main/resources/backend/platform/generate"));
		echo json_encode($content);
	  } else {
		  $content = array();
		  $content["status"] =  'Failed';
		  $message =  'Missing';
		  if(!isset($_GET["techName"])) { $message.=' techName,'; }
		  if(!isset($_GET["techDesc"])) { $message.=' techDesc,'; }
		  $message = chop($message,',');
		  $content["message"] = $message;
		  echo json_encode($content);
	  }
	}
	else if($_GET["action"]=='SUBJECT_UPDATE_NEW'){
	  if(isset($_GET["subjectName"]) && isset($_GET["techName"]) 
		  && isset($_GET["subjectDesc"]) && isset($_GET["subjectFolder"])){
		$subject = $_GET["subjectName"];
		$techName = $_GET["techName"];
		$subjectDesc = $_GET["subjectDesc"];
		$subjectFolder = $_GET["subjectFolder"];
		$query = $subjectCategory->query_update_newSubject($subject, $techName, $subjectDesc, $subjectFolder);
		$content = array();
		$content["status"] =  $database->addupdateData($query);
		$content["updatedId"] = $subject;
		$content["platform"] = json_decode(file_get_contents("http://localhost/np/locumme_java/src/main/resources/backend/platform/generate"));
		echo json_encode($content);
	  } else {
		  $content = array();
		  $content["status"] =  'Failed';
		  $message =  'Missing';
		  if(!isset($_GET["subjectName"])) { $message.=' subjectName,'; }
		  if(!isset($_GET["techName"])) { $message.=' techName,'; }
		  if(!isset($_GET["subjectDesc"])) { $message.=' subjectDesc,'; }
		  if(!isset($_GET["subjectFolder"])) { $message.=' subjectFolder,'; }
		  $message = chop($message,',');
		  $content["message"] = $message;
		  echo json_encode($content);
	  }
	}
	else if($_GET["action"]=='SYLLABUS_UPDATE_NEW'){
	  if(isset($_GET["syllabusName"]) && isset($_GET["subjectName"]) 
		  && isset($_GET["syllabusDesc"]) && isset($_GET["syllabusFolder"])){
		$syllabus = $_GET["syllabusName"];
		$subject = $_GET["subjectName"];
		$syllabusDesc = $_GET["syllabusDesc"];
		$syllabusFolder = $_GET["syllabusFolder"];
		$query = $syllabusCategory->query_update_newSyllabus($syllabus, $subject, $syllabusDesc, $syllabusFolder);
		$content = array();
		$content["status"] =  $database->addupdateData($query);
		$content["updatedId"] = $syllabus;
		$content["platform"] = json_decode(file_get_contents("http://localhost/np/locumme_java/src/main/resources/backend/platform/generate"));
		echo json_encode($content);
	  } else {
		  $content = array();
		  $content["status"] =  'Failed';
		  $message =  'Missing';
		  if(!isset($_GET["syllabusName"])) { $message.=' syllabusName,'; }
		  if(!isset($_GET["subjectName"])) { $message.=' subjectName,'; }
		  if(!isset($_GET["syllabusDesc"])) { $message.=' syllabusDesc,'; }
		  if(!isset($_GET["syllabusFolder"])) { $message.=' syllabusFolder,'; }
		  $message = chop($message,',');
		  $content["message"] = $message;
		  echo json_encode($content);
	  }
	}
/* UPDATE PLATFORM ::: END */

/* DELETE PLATFORM ::: START */	
	else if($_GET["action"]=='TECH_DELETE'){
		if(isset($_GET["techName"])){
			$techName = $_GET["techName"];
			/* Get List of Subjects exists with TechName */
			$subjectQuery = $subjectCategory->query_get_SubjectNames($techName);
			$subjectNames = $database->getAColumnAsArray($subjectQuery,'title');
			if(count($subjectNames)>0){
				echo json_encode($subjectNames);
			} else {
			  $techQuery = $techCategory->query_delete_Technology($techName);
			  $content["status"] =  $database->addupdateData($techQuery);
			}
		} else {
			$content = array();
			$content["status"] =  'Failed';
			$message =  'Missing';
			if(!isset($_GET["techName"])) { $message.=' techName,'; }
			$message = chop($message,',');
			$content["message"] = $message;
			echo json_encode($content);
		}  
	}
	else if($_GET["action"]=='SUBJECT_DELETE'){
		if(isset($_GET["subjectName"])){
			$subjectName = $_GET["subjectName"];
			/* Get List of Subjects exists with TechName */
			// $subjectQuery = $subjectCategory->query_get_SubjectNames($subjectName);
			// $subjectNames = $database->getAColumnAsArray($subjectQuery,'title');
			// if(count($subjectNames)>0){
			//	echo json_encode($subjectNames);
			// } else {
			  $subjectQuery = $subjectCategory->query_delete_subject($subjectName);
			  $content["status"] =  $database->addupdateData($subjectQuery);
			// }
		} else {
			$content = array();
			$content["status"] =  'Failed';
			$message =  'Missing';
			if(!isset($_GET["subjectName"])) { $message.=' subjectName,'; }
			$message = chop($message,',');
			$content["message"] = $message;
			echo json_encode($content);
		}  
	}
/* DELETE PLATFORM ::: END */	

}
else if(isset($_POST["action"])){
	
}
else { 
 $content = array();
 $content["status"] = "MISSING_ACTION";
 $content["message"] = "Expecting Action Parameter";
 echo json_encode($content);
}