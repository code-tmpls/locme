<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/pages/index.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/api/core-skeleton.js"></script>
  <script src="js/pages/platformMenu.js"></script>
<style>
.curpoint { cursor:pointer; }
</style>
<script type="text/javascript">
function build_addForm_syllabus(techTitle, subjectTitle) {
 let techInfo = PLATFORM.filter(data=>(data.title===techTitle))[0];
 let content='<div>';
	 content+='<div id="addSyllabusForm-alertMessage" class="form-group"></div>';
	 content+='<div class="form-group">';
	 content+='<label>Syllabus Name</label>';
	 content+='<input id="addSyllabusForm-syllabusName" type="text" class="form-control" placeholder="Enter a Syllabus Name">';
	 content+='</div>';
	 
	 content+='<div class="form-group">';
	 content+='<label>Tech Name</label>';
	 content+='<select id="addSyllabusForm-techName" class="form-control">';
	 content+='<option value="">Select Technology</option>';
	 for(let index=0;index<PLATFORM.length;index++){
	   content+='<option value="'+PLATFORM[index].title+'">'+PLATFORM[index].title+'</option>';
	 }
	 content+='</select>';
	 content+='</div>';
	 
	 content+='<div class="form-group">';
	 content+='<label>Subject Name</label>';
	 content+='<select id="addSyllabusForm-subjectName" class="form-control">';
	 content+='<option value="">Select Subject Name</option>';
	 for(let index=0;index<techInfo.subject.length;index++){
	   content+='<option value="'+techInfo.subject[index].title+'">'+techInfo.subject[index].title+'</option>';
	 }
	 content+='</select>';
	 content+='</div>';
	 
	 
	 content+='<div class="form-group">';
	 content+='<label>Syllabus Description</label>';
	 content+='<textarea id="addSyllabusForm-syllabusDesc" class="form-control" placeholder="Enter a Subject Description"></textarea>';
	 content+='</div>';
	 
	 content+='<div class="form-group">';
	 content+='<label>Syllabus Folder</label>';
	 content+='<input id="addSyllabusForm-syllabusFolder" type="text" class="form-control" placeholder="Enter a Subject Folder">';
	 content+='</div>';
	 
	 content+='<div align="right" class="form-group">';
	 content+='<div class="btn-group">';
	 content+='<button class="btn btn-success" onclick="javascript:addSyllabus();"><b>Add New Syllabus</b></button>';
	 content+='<button class="btn btn-danger" onclick="javascript:resetSyllabus(\''+techTitle+'\',\''+subjectTitle+'\');"><b>Reset</b></button>';
	 content+='</div>';
	 content+='</div>'; 
	 content+='</div>';
 display_modal('pageModel', 'Add New Syllabus', content);
 document.getElementById("addSyllabusForm-techName").value = techTitle;
 document.getElementById("addSyllabusForm-subjectName").value = subjectTitle;
}

function addSyllabus() {
 let url = 'http://localhost/np/locumme_java/src/main/resources/backend/syllabus/add/new';
 let syllabusName = document.getElementById("addSyllabusForm-syllabusName").value;
 let subjectName = document.getElementById("addSyllabusForm-subjectName").value;
 let techName = document.getElementById("addSyllabusForm-techName").value;
 let syllabusDesc = document.getElementById("addSyllabusForm-syllabusDesc").value;
 let syllabusFolder = document.getElementById("addSyllabusForm-syllabusFolder").value;
 if(syllabusName.length>0) {
	 if(techName.length>0) {
		if(subjectName.length>0) {
			if(syllabusDesc.length>0){
				if(syllabusFolder.length>0){
					js_ajax('GET', url , { syllabusName:syllabusName, subjectName:subjectName, syllabusDesc: syllabusDesc, syllabusFolder: syllabusFolder },
					function(response){
						console.log(response); 
						document.getElementById("techPlatform").innerHTML = view_tech(response.platform);
						$('#pageModel').modal('hide');
						display_alert('success', 'global-alertMessage', 
						'Added New Syllabus - <b>"'+syllabusName+'"</b> in <b>"'+techName+'/'+subjectName+'"</b> successfully.');
					});  
				} else { display_alert('danger', 'addSyllabusForm-alertMessage', 'Missing Subject Folder');  }
			} else { display_alert('danger', 'addSyllabusForm-alertMessage', 'Missing Subject Description');  }
		} else { display_alert('danger', 'addSyllabusForm-alertMessage', 'Missing Subject Name'); }
	} else { display_alert('danger', 'addSyllabusForm-alertMessage', 'Missing Technology Name'); }
 } else { display_alert('danger', 'addSyllabusForm-alertMessage', 'Missing Syllabus Name'); }
}

function resetSyllabus(techTitle,subjectTitle) {
 document.getElementById("addSyllabusForm-syllabusName").value = '';
 document.getElementById("addSyllabusForm-techName").value = techTitle;
 document.getElementById("addSyllabusForm-subjectName").value = subjectTitle;
 document.getElementById("addSyllabusForm-syllabusDesc").value = '';
 document.getElementById("addSyllabusForm-syllabusFolder").value = '';
 document.getElementById("addSyllabusForm-alertMessage").innerHTML = ''; 
}


</script>
</head>
<body>

<div class="container-fluid">
<div class="row">
<div id="global-alertMessage" class="col-md-12"></div><!--/.col-md-12 -->
</div><!--/.row -->
<div class="row">
<div align="right" class="col-md-12">
<button class="btn btn-default" onclick="javascript:build_addForm_technologies();"><b>Add New Technologies</b></button>
</div><!--/.col-md-12 -->
</div><!--/.row -->
<div class="row">
<div id="techPlatform" class="col-md-12"></div><!--/.col-md-12 -->
</div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>
