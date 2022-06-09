<?php

class TechCategory {
 function query_add_newTechnology($techName, $techDesc){
	return "INSERT INTO platform_tech(techName, techDesc) VALUES ('".$techName."','".$techDesc."');";
 }
 function query_update_newTechnology($techName, $techDesc){
	$sql="UPDATE platform_tech SET";
	if(strlen($techName)>0){ $sql.=" techDesc='".$techDesc."'"; }
	$sql.=" WHERE techName='".$techName."';";
	return $sql;
 }
 function query_get_Technologies() {
	return "SELECT techName As title FROM platform_tech;";
 }
 function query_delete_Technology($techName){
	return "DELETE FROM platform_subject WHERE techName='".$techName."';";
 }
}
$techCategory = new TechCategory();

class SubjectCategory {
 function query_add_newSubject($subject, $techName, $subjectDesc, $subjectFolder){
	return "INSERT INTO platform_subject(subject, techName, subjectDesc, subjectFolder) ".
	"VALUES ('".$subject."','".$techName."','".$subjectDesc."','".$subjectFolder."');";
 }
 function query_update_newSubject($subject, $techName, $subjectDesc, $subjectFolder){
	$sql="UPDATE platform_subject SET";
	if(strlen($techName)>0){ $sql.=" techName='".$techName."',"; }
	if(strlen($subjectDesc)>0){ $sql.=" subjectDesc='".$subjectDesc."',"; }
	if(strlen($subjectFolder)>0){ $sql.=" subjectFolder='".$subjectFolder."',"; }
	$sql=chop($sql,',');
	$sql.=" WHERE subject='".$subject."';";
	return $sql;
 }
 function query_get_subjects($techName) {
	return "SELECT subjectFolder As id, subject As title FROM platform_subject WHERE techName='".$techName."';";
 }
 function query_get_SubjectNames($techName) {
	return "SELECT subject As title FROM platform_subject WHERE techName='".$techName."';";
 }
 function query_delete_subject($subjectName) {
	return "DELETE FROM platform_subject WHERE subject='".$subjectName."';"; 
 }
}
$subjectCategory = new SubjectCategory();

class SyllabusCategory {
 function query_add_newSyllabus($syllabus, $subject, $syllabusDesc, $syllabusFolder) {
  return "INSERT INTO platform_syllabus(syllabus, subject, syllabusDesc, syllabusFolder) ".
  "VALUES ('".$syllabus."', '".$subject."', '".$syllabusDesc."', '".$syllabusFolder."');";
 }
 function query_update_newSyllabus($syllabus, $subject, $syllabusDesc, $syllabusFolder) {
	$sql="UPDATE platform_subject SET";
	if(strlen($subject)>0){ $sql.=" subject='".$subject."',"; }
	if(strlen($syllabusDesc)>0){ $sql.=" syllabusDesc='".$syllabusDesc."',"; }
	if(strlen($syllabusFolder)>0){ $sql.=" syllabusFolder='".$syllabusFolder."',"; }
	$sql=chop($sql,',');
	$sql.=" WHERE syllabus='".$syllabus."';";
	return $sql; 
 }
 function query_get_syllabus($subject) {
	return "SELECT syllabusFolder As id, syllabus As title FROM platform_syllabus WHERE subject='".$subject."' ORDER BY syllabusFolder ASC;";
 }
 function query_get_syllabusNames($subjectName) {
	return "SELECT syllabus As title FROM platform_syllabus WHERE subject='".$subjectName."';";
 }
 function query_delete_syllabus($syllabusName) {
	return "DELETE FROM platform_syllabus WHERE syllabus='".$syllabusName."';"; 
 }
}
$syllabusCategory = new SyllabusCategory();

?>