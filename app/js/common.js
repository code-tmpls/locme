$(document).ready(function(){
 if($(window).width()<=768){ sideWrapperToggle(); }
});
function sideWrapperToggle(){
 if($("#wrapper").hasClass('toggled')) { $("#wrapper").removeClass('toggled'); }
 else { $("#wrapper").addClass("toggled"); }
}
function html_formAlert(id,msgType,msg){
 var icon = 'fa-check-circle';
 if(msgType==='error'){ msgType='danger';icon = 'fa-exclamation-triangle'; }
 var content='<div class="alert alert-'+msgType+' alert-dismissible">';
	 content+='<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <i class="fa '+icon+'"></i> '+msg;
	 content+='</div>';
 document.getElementById(id).innerHTML = content;
}
function loadURL(url){
 window.location.href=PROJECT_URL+url;
}