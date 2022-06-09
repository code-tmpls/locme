<script type="text/javascript">
function addNewQuestion() {
 var platformName = document.getElementById("addNewQuestion_platformName").value;
 var question = document.getElementById("addNewQuestion_question").value;
 var questionType = document.getElementById("addNewQuestion_questionType").value;
 var answer = document.getElementById("addNewQuestion_answer").value;
 if(platformName.length>0){
	if(question.length>0){
		if(questionType.length>0){
			if(answer.length>0){
				$.ajax({type:'POST',url:API_URL+'question/add/new',data:{ platformName:platformName, question:question, 
					questionType:questionType, answer:answer },success:function(response){
					console.log(response.status);
					if(response.status==='Success'){
						console.log("Success Callback");
						build_selopt_platformName(function(resp){
							var displayPlatform = resp.filter(data=>data.platformName===platformName);
							display_platform_overview('addNewQuestion_display_platformName',displayPlatform);
							html_formAlert('addNewQuestion_alert','success','Your Question added to <b>'+platformName+'</b> Successfully.');
							document.getElementById("addNewQuestion_platformName").value='';
							document.getElementById("addNewQuestion_question").value='';
							document.getElementById("addNewQuestion_questionType").value='';
							document.getElementById("addNewQuestion_answer").value='';
						});
						
					} else {
						 html_formAlert('addNewQuestion_alert','error','Due to Internal Issues/Duplicate Question, Transaction got failed.');
					}
				}});
			} else {
				 html_formAlert('addNewQuestion_alert','error','Please Enter Answer.');
			} 
		} else {
			 html_formAlert('addNewQuestion_alert','error','Please Select Question Type.');
		} 
	} else {
		 html_formAlert('addNewQuestion_alert','error','Please Enter Question.');
	} 
 } else {
	 html_formAlert('addNewQuestion_alert','error','Please Select Platform Name.');
 }
}
</script>
<div><h4><b>Manage Questions and Answers</b></h4><hr/></div>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item" aria-current="page">Manage QA</li>
	<li class="breadcrumb-item active" aria-current="page">Add New Question</li>
  </ol>
</nav>
<div class="container-fluid">
 <div class="row">
  <div id="addNewQuestion_display_platformName" class="col-md-6">
  <!-- -->
  
  <!-- -->
  </div><!--/.col-md-6 -->
  <div class="col-md-6">
  <!-- -->
  <div class="list-group">
  <div class="list-group-item" style="background-color:#fefefe;">
   <div><h4><b>Add New Question</b></h4><hr style="border-bottom:1px solid #ccc;"/></div>
   <div style="padding-left:15px;padding-right:15px;">
	   <div id="addNewQuestion_alert" class="form-group"></div>
	   <div class="form-group">
		<label>Platform Name <span class="font-red">*</span></label>
		<select id="addNewQuestion_platformName" class="form-control" onchange="display_platform_info();">
			<option value="">Select Platform Name</option>
		</select>
	   </div><!--/.form-group -->
	   <div class="form-group">
		<label>Question <span class="font-red">*</span></label>
		<textarea id="addNewQuestion_question" class="form-control minHght100p" placeholder="Enter your Question"></textarea>
	   </div><!--/.form-group -->
	   <div class="form-group">
		<label>Question Type <span class="font-red">*</span></label>
		<select id="addNewQuestion_questionType" class="form-control">
			<option value="">Select QuestionType</option>
			<option value="PRACTICAL">Practical Question</option>
			<option value="THEORY">Theory Question</option>
		</select>
	   </div><!--/.form-group -->
	   <div class="form-group">
		<label>Answer <span class="font-red">*</span></label>
		<textarea id="addNewQuestion_answer" class="form-control minHght250p" placeholder="Enter your Answer"></textarea>
	   </div><!--/.form-group -->
	   <div class="form-group">
		<button class="btn btn-primary form-control" onclick="javascript:addNewQuestion();"><b>Add Question</b></button>
	   </div>
   </div><!--/.pad15p -->
  </div><!--/.list-group-item -->
  </div><!--/.list-group -->
  <!-- -->
  </div><!--/.col-md-6 -->
 </div><!--/.row -->
</div><!--/.container-fluid -->