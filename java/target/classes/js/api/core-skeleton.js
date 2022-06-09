function js_ajax(type, url, data, func) {
 $.ajax({type:type, url: url, data:data, success: func });
}

function display_modal(modalId, modalTitle, modalContent) {
 let content='<div id="'+modalId+'" class="modal fade" role="dialog">';
	 content+='<div class="modal-dialog">';
	 content+='<div class="modal-content">';
     content+='<div class="modal-header">';
     content+='<button type="button" class="close" data-dismiss="modal">&times;</button>';
     content+='<h4 class="modal-title">'+modalTitle+'</h4>';
     content+='</div>';
     content+='<div class="modal-body">';
     content+=modalContent;
     content+='</div>';
     content+='</div>';
	 content+='</div>';
	 content+='</div>';
 let elem = document.createElement('div');
 elem.id='modal-popup';
 document.body.appendChild(elem);
 document.getElementById('modal-popup').innerHTML = content;
 $('#'+modalId).modal({backdrop: "static"});
}

function display_alert(alertType, alertId, alertMessage) {
 let content='<div class="alert alert-'+alertType+' alert-dismissible">';
	 content+='<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
	 if(alertType==='danger' || alertType==='warning'){
		content+='<i class="fa fa-exclamation-circle" style="font-size:14px;" aria-hidden="true"></i> ';
	 } else if(alertType==='success') {
		content+='<i class="fa fa-check-circle" style="font-size:14px;" aria-hidden="true"></i> ';
	 }
	 content+='&nbsp;'+alertMessage;
	 content+='</div>';
 document.getElementById(alertId).innerHTML = content;
}