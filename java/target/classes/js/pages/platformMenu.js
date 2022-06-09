var PLATFORM;
$(document).ready(function(){
 load_platform();
});

/* ================= VIEW PLATFORM ================= */

function load_platform() {
 js_ajax('GET', 'http://localhost/np/locumme_java/src/main/resources/backend/platform/generate', {}, function(response){
	console.log(response);
	document.getElementById("techPlatform").innerHTML = view_tech(response);
 });
}

function view_syllabus(techTitle, subjectTitle, syllabusList) {
 let content='<div class="list-group">';
	 content+='<div class="list-group-item">';
	
	 content+='<div class="container-fluid">';
	 content+='<div class="row">';
	
	 content+='<div align="right" class="col-md-12" style="margin-bottom:15px;">';
	 content+='<button class="btn btn-default" onclick="javascript:build_addForm_syllabus(\''+techTitle+'\', \''+subjectTitle+'\');"><b>Add New Syllabus</b></button>';
	 content+='</div>';
	
	 for(let index=0;index<syllabusList.length;index++){
	  content+='<div id="'+syllabusList[index].id+'" style="padding:5px;">'+(index+1)+'. '+syllabusList[index].title;
	  content+='<i class="fa fa-times-circle pull-right" style="font-size:16px;color:red;"></i>';
	  content+='</div>';	 
	 }
	 
	 content+='</div>';
	 
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>';
 return content;
}

function view_subject(techTitle, subjectList) {
 let content='';
 for(let index=0;index<subjectList.length;index++){
	let subjectTitle = subjectList[index].title;
	content+='<div class="col-md-3">';
	content+='<div><h4 id="'+subjectList[index].id+'"><b>'+(index+1)+'. '+subjectTitle+'</b></h4></div>';	
	content+=view_syllabus(techTitle, subjectTitle, subjectList[index].syllabus);
	content+='</div>';
 }
 return content;
}

function view_tech(techList){
 PLATFORM = techList;
 let content='';
 for(let index=0;index<techList.length;index++){
	let techTitle = techList[index].title;
	content+='<div class="row curpoint" style="border-bottom:1px solid #ccc;margin-top:5px;">';
	
	content+='<div class="col-md-8" data-toggle="collapse" data-target="#techList-'+index+'">';
	content+='<h4 style="padding-bottom:8px;color:#555;">';
	content+='<i class="fa fa-angle-double-down"></i>&nbsp;&nbsp;&nbsp;<b>'+techTitle+'</b>';
	content+='</h4>';
	content+='</div>';
	
	content+='<div align="right" class="col-md-4">';
//	content+='<button class="btn btn-default btn-xs" style="margin-top:15px;"><b>Rename</b> <i class="fa fa-edit" onclick="javascript:alert(\'\');"></i></button>';
	content+='</div>';
	
	content+='</div>';
	
	content+='<div class="row">';
	content+='<div id="techList-'+index+'" class="collapse">';
	
	content+='<div align="right" class="col-md-12" style="margin-top:15px;">';
	content+='<button class="btn btn-default" onclick="javascript:build_addForm_subject(\''+techTitle+'\');"><b>Add New Subject</b></button>';
	content+='</div>';
	
	content+=view_subject(techTitle, techList[index].subject);
	
	content+='</div>';
	content+='</div>';
 }
 
 return content;	
}

/* ================= ADD TECHNOLOGIES ================= */

function build_addForm_technologies() {
 let content='<div>';
	 content+='<div id="addTechForm-alertMessage" class="form-group"></div>';
	 content+='<div class="form-group">';
	 content+='<label>Tech Name</label>';
	 content+='<input id="addTechForm-techName" type="text" class="form-control" placeholder="Enter a Technology">';
	 content+='</div>';
	 content+='<div class="form-group">';
	 content+='<label>Tech Description</label>';
	 content+='<textarea id="addTechForm-techDesc" class="form-control" placeholder="Enter a Technology Description"></textarea>';
	 content+='</div>';
	 content+='<div align="right" class="form-group">';
	 content+='<div class="btn-group">';
	 content+='<button class="btn btn-success" onclick="javascript:addTechnology();"><b>Add Technology</b></button>';
	 content+='<button class="btn btn-danger" onclick="javascript:resetTechnology();"><b>Reset</b></button>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
 display_modal('pageModel', 'Add New Technology', content);
}

function addTechnology() {
 let url = 'http://localhost/np/locumme_java/src/main/resources/backend/tech/add/new';
 let techName = document.getElementById("addTechForm-techName").value;
 let techDesc = document.getElementById("addTechForm-techDesc").value;
 if(techName.length>0) {
   if(techDesc.length>0){
	js_ajax('GET', url , { techName:techName, techDesc: techDesc }, function(response){
		console.log(response); 
		document.getElementById("techPlatform").innerHTML = view_tech(response.platform);
		$('#pageModel').modal('hide');
		display_alert('success', 'global-alertMessage', 'Added New Technology - "'+techName+'" successfully.');
	});  
   } else { display_alert('danger', 'addTechForm-alertMessage', 'Missing Technology Description');  }
 } else { display_alert('danger', 'addTechForm-alertMessage', 'Missing Technology Name'); }
}

function resetTechnology() {
 document.getElementById("addTechForm-techName").value = '';
 document.getElementById("addTechForm-techDesc").value = '';
 document.getElementById("addTechForm-alertMessage").innerHTML = '';
}

/* =================== ADD SUBJECT ==================== */

function build_addForm_subject(techTitle) {
 let content='<div>';
	 content+='<div id="addSubjectForm-alertMessage" class="form-group"></div>';
	 content+='<div class="form-group">';
	 content+='<label>Subject Name</label>';
	 content+='<input id="addSubjectForm-subjectName" type="text" class="form-control" placeholder="Enter a Subject Name">';
	 content+='</div>';
	 
	 content+='<div class="form-group">';
	 content+='<label>Tech Name</label>';
	 content+='<select id="addSubjectForm-techName" class="form-control">';
	 content+='<option value="">Select Technology</option>';
	 for(let index=0;index<PLATFORM.length;index++){
	   content+='<option value="'+PLATFORM[index].title+'">'+PLATFORM[index].title+'</option>';
	 }
	 content+='</select>';
	 content+='</div>';
	 content+='<div class="form-group">';
	 content+='<label>Subject Description</label>';
	 content+='<textarea id="addSubjectForm-subjectDesc" class="form-control" placeholder="Enter a Subject Description"></textarea>';
	 content+='</div>';
	 
	 content+='<div class="form-group">';
	 content+='<label>Subject Folder</label>';
	 content+='<input id="addSubjectForm-subjectFolder" type="text" class="form-control" placeholder="Enter a Subject Folder">';
	 content+='</div>';
	 
	 content+='<div align="right" class="form-group">';
	 content+='<div class="btn-group">';
	 content+='<button class="btn btn-success" onclick="javascript:addSubject();"><b>Add New Subject</b></button>';
	 content+='<button class="btn btn-danger" onclick="javascript:resetSubject(\''+techTitle+'\');"><b>Reset</b></button>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
 display_modal('pageModel', 'Add New Subject', content);
 document.getElementById("addSubjectForm-techName").value = techTitle;
}

function addSubject() {
 let url = 'http://localhost/np/locumme_java/src/main/resources/backend/subject/add/new';
 let subjectName = document.getElementById("addSubjectForm-subjectName").value;
 let techName = document.getElementById("addSubjectForm-techName").value;
 let subjectDesc = document.getElementById("addSubjectForm-subjectDesc").value;
 let subjectFolder = document.getElementById("addSubjectForm-subjectFolder").value;
 if(subjectName.length>0) {
	if(techName.length>0) {
		if(subjectDesc.length>0){
			if(subjectFolder.length>0){
				js_ajax('GET', url , { subjectName:subjectName, techName:techName, subjectDesc: subjectDesc, subjectFolder: subjectFolder },
				function(response){
					console.log(response); 
					document.getElementById("techPlatform").innerHTML = view_tech(response.platform);
					$('#pageModel').modal('hide');
					display_alert('success', 'global-alertMessage', 'Added New Subject - <b>"'+subjectName+'"</b> in <b>"'+techName+'"</b> successfully.');
				});  
			} else { display_alert('danger', 'addSubjectForm-alertMessage', 'Missing Subject Folder');  }
		} else { display_alert('danger', 'addSubjectForm-alertMessage', 'Missing Subject Description');  }
	} else { display_alert('danger', 'addSubjectForm-alertMessage', 'Missing Technology Name'); }
 } else { display_alert('danger', 'addSubjectForm-alertMessage', 'Missing Subject Name'); }
}

function resetSubject(techTitle) {
 document.getElementById("addSubjectForm-subjectName").value = '';
 document.getElementById("addSubjectForm-techName").value = techTitle;
 document.getElementById("addSubjectForm-subjectDesc").value = '';
 document.getElementById("addSubjectForm-subjectFolder").value = '';
 document.getElementById("addSubjectForm-alertMessage").innerHTML = ''; 
}

/* ================== ADD SYLLABUS ==================== */
