function managePlatform_view_platformList(id,access){
 $.ajax({type:'GET',url:API_URL+'platform/view',data:{ },success:function(response){
	console.log(response);
	var content='<div class="container-fluid">';
		content+='<div class="row">';
	for(var index=0;index<response.length;index++){
		var platformName = response[index].platformName;
		var platformDesc = response[index].platformDesc;
		var questions = response[index].questions;
		content+='<div class="col-md-4">';
		content+='<div class="list-group">';
		content+='<div class="list-group-item pad0 blue-border curpoint platformViewField" ';
		if(access===true){
		content+='onclick="javascript:loadURL(\'admin/qa/view/'+platformName+'\');"';
		}
		content+='>';
		content+='<div align="right"><span class="box-tag">'+questions+' Questions</span></div>';
		
		content+='<div class="container-fluid mbot15p">';
		content+='<div class="row">';
		content+='<div class="col-md-12">';
		
		content+='<div><h4>'+platformName+'</h4></div>';
		content+='<div class="font-grey">'+platformDesc+'</div>';
		
		content+='</div>';
		content+='</div>';
		content+='</div>';
	
		content+='</div>';
		content+='</div>';
		content+='</div>';
	}
	content+='</div>';
	content+='</div>';
	document.getElementById(id).innerHTML = content;
  }
 });
}

function display_platform_overview(id,data){
 var content='<div class="list-group">';
	 content+='<div class="list-group-item curpoint" onclick="javascript:loadURL(\'admin/qa/view/'+data[0].platformName+'\');">';
	 content+='<div><h4><b>'+data[0].platformName+'</b></h4></div>';
	 content+='<div class="font-grey">'+data[0].platformDesc+'</div>';
	 content+='<div class="container-fluid mtop15p">';
	 content+='<div class="row">';
	 content+='<div class="col-md-6 pad5p"><b>Practical Questions: </b></div><div class="col-md-6 fs-20p font-grey">'+data[0].practicalQuestions+'</div>';
	 content+='</div>';
	 content+='<div class="row mtop5p">';
	 content+='<div class="col-md-6 pad5p"><b>Theory Questions: </b></div><div class="col-md-6 fs-20p font-grey">'+data[0].theoryQuestions+'</div>';
	 content+='</div>';
	 content+='<div class="row mtop5p">';
	 content+='<div class="col-md-6 pad5p"><b>Total Questions: </b></div><div class="col-md-6 fs-20p font-grey">'+data[0].questions+'</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
 document.getElementById(id).innerHTML = content;
}
function editView_platform_question(question_Id, mode){
 if(mode==='edit'){
	if(!$('#viewQuestions_display_'+question_Id).hasClass('hide-block')){ $('#viewQuestions_display_'+question_Id).addClass('hide-block'); }
	if($('#viewQuestions_div_ta_'+question_Id).hasClass('hide-block')){ $('#viewQuestions_div_ta_'+question_Id).removeClass('hide-block'); }
 } else if(mode==='save'){
	if($('#viewQuestions_display_'+question_Id).hasClass('hide-block')){ $('#viewQuestions_display_'+question_Id).removeClass('hide-block'); }
	if(!$('#viewQuestions_div_ta_'+question_Id).hasClass('hide-block')){ $('#viewQuestions_div_ta_'+question_Id).addClass('hide-block'); }
	save_platform_question(question_Id);
 }
}
function save_platform_question(question_Id) {
 var answer = document.getElementById("viewQuestions_ta_"+question_Id).value;
 console.log(answer);
 // Encode and Upload Updated value into Database using question_Id
 $.ajax({type:'POST',url:API_URL+'question/update',data:{ question_Id:question_Id,answer:answer },success:function(response){
	 console.log(response);
 },error:function(response){
	 console.log(response);
 }});
 document.getElementById("viewQuestions_viewAnswer_"+question_Id).innerHTML = answer.replaceAll("\'","'");
}
function display_platform_question(id,data){
 var content='<div class="container-fluid mbot15p">';
	 
 for(var index=0;index<data.length;index++){
	 var question_Id = data[index].question_Id;
	 var questionType='Practical Question';
	 if(data[index].questionType==='THEORY'){ questionType='Theory Question'; }
	 content+='<div class="row">';
	 content+='<div class="col-md-9">';
	 content+=(index+1)+'. '+data[index].question;
	 content+='</div>';
	 content+='<div align="right" class="col-md-3"><span class="tag">'+questionType+'</span></div>';
	 content+='</div>';
	 
	 content+='<div class="row mtop15p font-grey">';
	 content+='<div class="col-md-12">';
	 
	 content+='<div id="viewQuestions_display_'+question_Id+'" class="list-group">';
	 content+='<div class="list-group-item blue-border pad0">';
	 
	 content+='<div align="right"><span class="box-tag curpoint font-blue" onclick="editView_platform_question('+question_Id+',\'edit\');">';
	 content+='<i class="fa fa-edit"></i> Edit</span></div>';
	 
	 content+='<div class="container-fluid mtop15p mbot25p">';
	 content+='<div class="row">';
	 content+='<div id="viewQuestions_viewAnswer_'+question_Id+'" class="col-md-12" style="line-height:25px;">'+data[index].answer+'</div>';
	 content+='</div>';
	 content+='</div>';
	 
	 content+='</div>';
	 content+='</div>';
	 
	 content+='<div id="viewQuestions_div_ta_'+question_Id+'" class="hide-block">';
	 content+='<textarea id="viewQuestions_ta_'+question_Id+'" class="form-control blue-border minHght250p">'+data[index].answer+'</textarea>';
	 content+='<div align="right"><button class="btn btn-sm btn-primary mtop15p mbot15p"  onclick="editView_platform_question('+question_Id+',\'save\');"><b>Save Answer</b></button></div>';
	 content+='</div>';
	 
	 content+='</div>';
	 content+='</div>';
 }
 
 content+='</div>';
 document.getElementById(id).innerHTML = content;
}