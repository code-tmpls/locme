if (annyang) {
	var commands = {
					'*variable': function(variable) {
						console.log(variable);
						document.getElementById("printPromptWrite").value = variable;
						lobbyView_lookSuggestion();
					}
	};
	
	annyang.addCommands(commands);
	annyang.setLanguage('en-US');
	annyang.start({ autoRestart: true, continuous: true });
}	

function lobbyView_htmlDisplay_allowPrompting(){
  return '<i class="fa fa-volume-up"></i>&nbsp; Now, you are allowed for Prompting <i class="fa fa-check-circle"></i>';
}
function lobbyView_htmlDisplay_allowWriting(){
  return '<i class="fa fa-file-text"></i>&nbsp; Now, you are allowed for Writing <i class="fa fa-check-circle"></i>';
}
function lobbyView_promptTxt(){
  document.getElementById("printPromptWrite").disabled = true;
  document.getElementById("prompt-status").innerHTML = lobbyView_htmlDisplay_allowPrompting();
  document.getElementById("lookForSuggestionBtn").style.display='none';
  lobbyView_promptWriteToggle('prompt');
  annyang.resume();
}
function lobbyView_writeTxt(){
  document.getElementById("printPromptWrite").disabled = false;
  document.getElementById("prompt-status").innerHTML = lobbyView_htmlDisplay_allowWriting();
  document.getElementById("lookForSuggestionBtn").style.display='block';
  lobbyView_promptWriteToggle('write');
  annyang.abort();
}
function lobbyView_lookSuggestion(){
 var promptWrite = document.getElementById("printPromptWrite").value;
 // Search in Database
 
}
function lobbyView_promptWriteToggle(display){
  if(display==='prompt'){
	if(!$("#promptTxtBtn").hasClass('btn-primary')){ $("#promptTxtBtn").addClass('btn-primary'); }
	if($("#promptTxtBtn").hasClass('btn-primary-o')){ $("#promptTxtBtn").removeClass('btn-primary-o'); }
	if(!$("#writeTxtBtn").hasClass('btn-primary-o')){ $("#writeTxtBtn").addClass('btn-primary-o'); }
	if($("#writeTxtBtn").hasClass('btn-primary')){ $("#writeTxtBtn").removeClass('btn-primary'); }
  } else {
	 if(!$("#promptTxtBtn").hasClass('btn-primary-o')){ $("#promptTxtBtn").addClass('btn-primary-o'); }
	 if($("#promptTxtBtn").hasClass('btn-primary')){ $("#promptTxtBtn").removeClass('btn-primary'); }
	 if(!$("#writeTxtBtn").hasClass('btn-primary')){ $("#writeTxtBtn").addClass('btn-primary'); }
	 if($("#writeTxtBtn").hasClass('btn-primary-o')){ $("#writeTxtBtn").removeClass('btn-primary-o'); }
  }
} 
function lobbyView_printPromptWriteOnChange(){
 var keyword = document.getElementById("printPromptWrite").value;
 if(keyword.length>0){
	console.log("keyword: "+keyword);
	console.log("API_URL: "+API_URL);
	$.ajax({type:'GET',url:API_URL+'question/autocomplete',data:{ keyword:keyword },success:function(response){
	 var autoComplete = response.map(data=>data.question);
	  $( "#printPromptWrite" ).autocomplete({
      source: autoComplete
    });
	console.log(autoComplete);
	}});
 }
}