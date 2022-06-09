<script type="text/javascript">
function select_adminDashboardMenu(id){
 var menu = ["adminDashboard_managePlatform","adminDashboard_manageQA"];
 for(var index=0;index<menu.length;index++){
	if(menu[index]===id){ 
		if(!$('#'+menu[index]).hasClass('active')){ $('#'+menu[index]).addClass('active'); } 
		if($('#'+menu[index]+'_content').hasClass('hide-block')){ $('#'+menu[index]+'_content').removeClass('hide-block'); } 
	} else { 
		if($('#'+menu[index]).hasClass('active')){ $('#'+menu[index]).removeClass('active');  }
		if(!$('#'+menu[index]+'_content').hasClass('hide-block')){ $('#'+menu[index]+'_content').addClass('hide-block'); } 
	}
 }
}
</script>
<div class="list-group">
	<div id="adminDashboard_managePlatform" class="list-group-item curpoint" onclick="javascript:loadURL('admin/dashboard');">
	  <b>Manage Platforms</b>
	</div><!--/.list-group-item -->
	<div id="adminDashboard_manageQA" class="list-group-item curpoint" onclick="javascript:loadURL('admin/qa/add');">
	  <b>Manage Q/A</b>
	</div><!--/.list-group-item -->
</div><!--/.list-group -->