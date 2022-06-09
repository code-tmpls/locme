<?php 
include_once 'templates/basic.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Locum Me : Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/simple-sidebar.css">
  <script src="<?php echo $PROJECT_URL; ?>js/api/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>js/api/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>js/api/annyang.min.js"></script>
  <script type="text/javascript" src="<?php echo $PROJECT_URL; ?>js/common.js"></script> 
  <script type="text/javascript" src="<?php echo $PROJECT_URL; ?>js/pages/admin_dashboard_manageQA_addNewQuestion.js"></script>
  <script type="text/javascript" src="<?php echo $PROJECT_URL; ?>js/ui.js"></script> 
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/project.css">

<script type="text/javascript">
var PLATFORM_INFO;
function build_selopt_platformName(funcArgs){
 $.ajax({type:'GET',url:API_URL+'platform/view',data:{},success:function(response){
	 console.log(response);
	 PLATFORM_INFO = response;
	 var content = '<option value="">Select Platform Name</option>';
	 for(var index=0;index<response.length;index++){
		 var platformName = response[index].platformName;
		 content+= '<option value="'+platformName+'">'+platformName+'</option>';
	 }
	 document.getElementById("addNewQuestion_platformName").innerHTML = content;
	 if(funcArgs!==undefined){ funcArgs(response); }
 }});
}
function display_platform_info(){
 var platformName = document.getElementById("addNewQuestion_platformName").value;
 var displayPlatform = PLATFORM_INFO.filter(data=>data.platformName===platformName);
 display_platform_overview('addNewQuestion_display_platformName',displayPlatform);
}
$(document).ready(function(){
  select_adminDashboardMenu("adminDashboard_manageQA");
  build_selopt_platformName();
});
</script>
</head>
<body>

<div id="wrapper" class="toggled">
	<!-- Core Skeleton : Side and Top Menu -->
	<?php include_once 'templates/menu.php'; ?>
	
	
	<div id="page-content-wrapper">
		<?php include_once 'templates/header_user.php'; ?>
		<div class="container-fluid font-texgyreadventor">
			<div class="row">
				<div class="col-md-3">
					<!-- -->
					<?php include_once 'templates/admin_dashboard_menu.php'; ?>
					<!-- -->
				</div><!--/.col-md-3 -->
				<div class="col-md-9">
					<!-- -->
					<div id="adminDashboard_managePlatform_content" class="hide-block">
						<?php include_once 'templates/admin_dashboard_managePlatforms.php'; ?>
					</div>
					<div id="adminDashboard_manageQA_content" class="hide-block">
						<?php include_once 'templates/admin_dashboard_manageQA_addNewQuestion.php'; ?>
					</div>
					<!-- -->
				</div><!--/.col-md-9 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
		
	</div><!--/.page-content-wrapper -->
</div><!--/#wrapper -->
</body>
</html>