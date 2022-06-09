<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/api/simple-sidebar.css">  
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/api/core-skeleton.js"></script>
<style>
.fa-1x { font-size:16px; }
</style>
<script type="text/javascript">
let menuJSON = [{	id:'PlatformManagement',
					title:'Platform Management', 
					icon: 'fa-angle-double-down',
					url:'#', submenu:[{ id:'ManagePlatform', title:'Manage Platform', url:'#', icon: 'fa-dashboard', },
									  { id:'ManageQuestions', title:'Manage Questions', url:'#', icon: 'fa-question-circle-o', }] },
				{ id:'VendorManagement', title:'Vendor Management', url:'#', icon: 'fa-angle-double-down', submenu:[] }];
$(document).ready(function(){
 if($(window).width()<=768){ sideWrapperToggle(); }
 buildSideWrapperMenu();
});
function sideWrapperToggle(){
 if($("#wrapper").hasClass('toggled')) { $("#wrapper").removeClass('toggled'); } // hides SideMenu
 else { $("#wrapper").addClass("toggled"); } // adds SideMenu
}
let hgh_prev_mainMenuId;
function highlightMainMenu(id){
 removeHighlightMainMenu();
 hgh_prev_mainMenuId = id;
 $('#'+id+'-icon, #'+id+'-title').css('color','#d0254e');
}
function removeHighlightMainMenu(){
 if(hgh_prev_mainMenuId!=='undefined') {
	$('#'+hgh_prev_mainMenuId+'-icon, #'+hgh_prev_mainMenuId+'-title').css('color','#024279'); 
 }
}
function buildSideWrapperMenu() {
 console.log(menuJSON);
 let content='<ul class="sidebar-nav">';
 for(let menuIndex=0;menuIndex<menuJSON.length;menuIndex++){
	let menuId = menuJSON[menuIndex].id;
	let menuTitle = menuJSON[menuIndex].title;
	let menuUrl = menuJSON[menuIndex].url;
	let menuIcon = menuJSON[menuIndex].icon;
	let submenu = menuJSON[menuIndex].submenu;
	console.log(menuId);
	content+='<li><a id="'+menuId+'" href="'+menuUrl+'" data-toggle="collapse" data-target="#'+menuId+'-subMenus" ';
	content+='onclick="javascript:highlightMainMenu(this.id);">';
	content+='<i id="'+menuId+'-icon" class="fa fa-1x '+menuIcon+'" aria-hidden="true" ></i>&nbsp;&nbsp;';
	content+='<span  id="'+menuId+'-title"><b>'+menuTitle+'</b></span>';
	content+='</a>';
	content+='</li>';
	if(submenu.length>0) {
		content+='<div id="'+menuId+'-subMenus" class="collapse" style="padding-left:15px;padding-right:15px;">';
		for(let subMenuIndex=0;subMenuIndex<submenu.length;subMenuIndex++){
			let subMenuId = submenu[subMenuIndex].id;
			let subMenuTitle = submenu[subMenuIndex].title;
			let subMenuUrl = submenu[subMenuIndex].url;	
			let subMenuIcon = submenu[subMenuIndex].icon;
			content+='<li><a href="'+subMenuUrl+'">';
			content+='<i class="fa fa-1x '+subMenuIcon+'" aria-hidden="true"></i>&nbsp;&nbsp;<span><b>'+subMenuTitle+'</b></span>';
			content+='</a>';
			content+='</li>';	
		}
		content+='</div>';
	}
 }
  content+='</ul>';
  document.getElementById("sidebar-wrapper").innerHTML = content;
}
</script> 
</head>
<body>

<div id="wrapper" class="toggled">
	<!-- Core Skeleton : Side and Top Menu -->
	<div id="sidebar-wrapper"></div>
	<div id="page-content-wrapper">
	   <nav id="header_bot" class="navbar" style="margin-bottom:0px;border-radius:0px;">
	   <div id="applogo-header">
		<a class="navbar-brand a-custom" style="cursor:pointer;color:#d0254e;" onclick="javascript:sideWrapperToggle();">
			<span class="glyphicon glyphicon-align-justify white-font"></span>
		</a>
		<div class="container-fluid" style="padding-left:0px;padding-right:0px;">
		
		<div id="div_app_logo" class="col-md-2 col-sm-4 col-xs-10" style="padding-left:0px;"></div>
		
	  </div>
   </div>
   
</nav>
	</div>
</div>
</body>
</html>