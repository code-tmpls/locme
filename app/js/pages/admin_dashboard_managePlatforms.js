$(document).ready(function(){
	load_adminDashboardMenu_managePlatform();
});
function load_adminDashboardMenu_managePlatform(){
  select_adminDashboardMenu("adminDashboard_managePlatform");
  managePlatform_view_platformList("managePlatform_viewPlatform_info",true);
}
function managePlatform_add_newPlatform(){
 var platformName = document.getElementById("managePlatform_addPlatform_platformName").value;
 var platformDesc = document.getElementById("managePlatform_addPlatform_platformDesc").value;
 if(platformName.length>0){
	if(platformDesc.length>0){
	  $.ajax({type:'GET',url:API_URL+'platform/add/new',data:{ platformName:platformName, platformDesc:platformDesc },success:function(response){
		  console.log(response);
		  if(response.status==='Success'){
			html_formAlert('managePlatform_addPlatform_alert','success','New Platform has been added Successfully');
			document.getElementById("managePlatform_addPlatform_platformName").value='';
			document.getElementById("managePlatform_addPlatform_platformDesc").value='';
			setTimeout(function(){ $("#managePlatformModal").modal('hide'); },3000);
			managePlatform_view_platformList();
		  } else {
			html_formAlert('managePlatform_addPlatform_alert','error','Due to Duplicate Platform Name/Database Internal Issue, transaction got failed');
		  }
	  }});
	} else { html_formAlert('managePlatform_addPlatform_alert','error','Please Enter Platform Description'); }
 } else { html_formAlert('managePlatform_addPlatform_alert','error','Please Enter Platform Name'); }
}