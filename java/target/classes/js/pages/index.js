let technologies = [];
let technologiesIndex = 0;
let subjectIndex = 0;
let syllabusIndex = 0;
$(document).ready(function(){
 js_ajax('GET', 'static/menu.json', {}, function(data){ 
	technologies = JSON.parse(data);
	loadTechnology('technologyMenu');
 });
});

function loadTechnology(id){
 let content='<div class="dropdown">';
	 content+='<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">';
	 content+='<span id="selectedTechnologyMenu">'+technologies[0].title+'</span> &nbsp;<span class="caret"></span></button>';
	 content+='<ul class="dropdown-menu">';
	for(let index=0;index<technologies.length;index++){
	  let techId = technologies[index].id;
	  let techTitle = technologies[index].title;
	  content+='<li><a id="'+techId+'" href="#" onclick="javascript:sel_technology('+index+');">'+techTitle+'</a></li>';
	}
	 content+='</ul>';
	 content+='</div>';
 document.getElementById(id).innerHTML=content;
 loadSubjectMenu(technologies[technologiesIndex]);
}

function sel_technology(index) {
 technologiesIndex = index;
	 subjectIndex = 0;
 console.log("[sel_technology] technologiesIndex: "+technologiesIndex+" subjectIndex: "+subjectIndex);
 let technology = technologies[technologiesIndex];
 document.getElementById("selectedTechnologyMenu").innerHTML = technology.title;
 loadSubjectMenu(technology);
}

function loadSubjectMenu(technology){
 let content='<ul class="nav nav-pills">';
 for(let index=0;index<technology.subject.length;index++) {
   let subject = technology.subject[index];
   if(index===subjectIndex){
      content+='<li class="active"><a data-toggle="pill" onclick="javascript:sel_subject('+index+');"><b>'+subject.title+'</b></a></li>';
   } else {
	  content+='<li><a data-toggle="pill" onclick="javascript:sel_subject('+index+');"><b>'+subject.title+'</b></a></li>'; 
   }
 }
 content+='</ul>';
 document.getElementById("subjectMenu").innerHTML = content;
 loadSyllabusMenu(technology.subject[subjectIndex]);
}

function sel_subject(index){
  let technology = technologies[technologiesIndex];
  subjectIndex = index;
  console.log("[sel_subject] technologiesIndex: "+technologiesIndex+" subjectIndex: "+subjectIndex);
  loadSubjectMenu(technology); 
}

function resetSyllabus(){
 document.getElementById("leftSyllabusMenu").innerHTML ='';
 document.getElementById("qaColumn").innerHTML ='';
}

function loadSyllabusMenu(subject){
 console.log(subject);
 let content='<ul class="nav nav-pills nav-stacked">';
 for(let index=0;index<subject.syllabus.length;index++){
	let syllabus = subject.syllabus[index];
	if(index===syllabusIndex){
		content+='<li class="active"><a href="#" onclick="javascript:sel_syllabus('+index+');"><b>'+syllabus.title+'</b></a></li>';
	} else {
		content+='<li><a href="#" onclick="javascript:sel_syllabus('+index+');"><b>'+syllabus.title+'</b></a></li>';
	}
	console.log(subject.syllabus[index].title); 
 }
 content+='</ul>';
 document.getElementById("leftSyllabusMenu").innerHTML = content;
 let subjectId = technologies[technologiesIndex].subject[subjectIndex].id;
 let syllabusId = technologies[technologiesIndex].subject[subjectIndex].syllabus[syllabusIndex].id;
 loadContent(subjectId, syllabusId);
}

function sel_syllabus(index){
  resetSyllabus();
  let technology = technologies[technologiesIndex];
  syllabusIndex = index;
  console.log("[sel_subject] technologiesIndex: "+technologiesIndex+" subjectIndex: "+subjectIndex+" syllabusIndex: "+syllabusIndex);
  loadSyllabusMenu(technology.subject[subjectIndex]);
}

function loadContent(subjectId, syllabusId){
  $("#qaColumn").load("templates/"+subjectId+"/"+syllabusId+"/00_basic_01.html");
}