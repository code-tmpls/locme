let TECHNOLOGY_INDEX = 0;
let technologies = [];

function resetAllMenus(){
 document.getElementById("leftSyllabusMenu").innerHTML ='';
 document.getElementById("qaLeftColumn").innerHTML ='';
 document.getElementById("qaRightColumn").innerHTML ='';
}	

function buildMainMenu(divId,selectId){
  resetAllMenus();
  let subject = technologies[TECHNOLOGY_INDEX].subject;
  let content='<ul class="nav nav-pills">';
  for(let index=0;index<subject.length;index++) {
	content+='<li id="'+subject[index].id+'" class="'+((subject[index].id===selectId)?'active':'')+'" onClick="javascript:selMainMenu(this.id);">'; 
	content+='<a href="#"><b>'+subject[index].title+'</b></a></li>';
  }
  content+='</ul>';
  document.getElementById(divId).innerHTML = content;
  if(subject[0].syllabus.length>0){
	 buildSubMainMenu(0, 'leftSyllabusMenu', subject[0].syllabus[0].id); 
  }
}

function selSubMenu(mainMenuIndex, selectId){
  let subject = technologies[TECHNOLOGY_INDEX].subject;
  let syllabus = subject[mainMenuIndex].syllabus;
  for(let index=0;index<syllabus.length;index++){
	if(syllabus[index].id === selectId && !$('#'+syllabus[index].id).hasClass('active')) { $('#'+syllabus[index].id).addClass('active'); }
	else { $('#'+syllabus[index].id).removeClass('active'); }
  }
  $("#qaLeftColumn").load("templates/"+subject[mainMenuIndex].id+'/'+selectId+"/00_basic_01.php");
  $("#qaRightColumn").load("templates/"+subject[mainMenuIndex].id+'/'+selectId+"/00_basic_02.php");
}

function buildSubMainMenu(mainMenuIndex, divId, selectId){
  let subject = technologies[TECHNOLOGY_INDEX].subject;
  let syllabus = subject[mainMenuIndex].syllabus;
  let content='<ul class="nav nav-pills  nav-stacked">';
  for(let index=0;index<syllabus.length;index++) {
	content+='<li id="'+syllabus[index].id+'" class="'+((syllabus[index].id===selectId)?'active':'')+'" onClick="javascript:selSubMenu('+mainMenuIndex+', this.id);">'; 
	content+='<a href="#"><b>'+syllabus[index].title+'</b></a></li>';
  }
  content+='</ul>';
  document.getElementById(divId).innerHTML = content;
  console.log("templates/"+subject[mainMenuIndex].id+'/'+selectId);
  $("#qaLeftColumn").load("templates/"+subject[mainMenuIndex].id+'/'+selectId+"/00_basic_01.php");
  $("#qaRightColumn").load("templates/"+subject[mainMenuIndex].id+'/'+selectId+"/00_basic_02.php");
}


$(document).ready(function(){
 js_ajax('GET', 'static/menu.json', {}, function(data){ 
	technologies = JSON.parse(data);
	load_technology('technologyMenu');
	sel_technology(TECHNOLOGY_INDEX);
 });
});

function load_technology(id){
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
}

function sel_technology(index){
 TECHNOLOGY_INDEX = index;
 document.getElementById("selectedTechnologyMenu").innerHTML=technologies[index].title;
 console.log(technologies[index].subject);
 if(technologies[index].subject.length>0){
  buildMainMenu('mainTechMenu',technologies[index].subject[0].id); 
 }
} 

function selMainMenu(id){
  console.log(id);
  let subject = technologies[TECHNOLOGY_INDEX].subject;
  resetAllMenus();
  for(let index=0;index<subject.length;index++){
	if(subject[index].id === id && !$('#'+subject[index].id).hasClass('active')) { 
		$('#'+subject[index].id).addClass('active'); 
		if(subject[index].syllabus.length>0){
			buildSubMainMenu(index, 'leftSyllabusMenu', subject[index].syllabus[0].id);
		}
	}
	else { $('#'+subject[index].id).removeClass('active'); }
  }
}