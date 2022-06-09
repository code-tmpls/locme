<?php 
include_once 'templates/basic.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Locum Me : Admin Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/api/bootstrap.min.css">
  <link rel="stylesheet" href="styles/api/font-awesome.min.css">
  <link rel="stylesheet" href="styles/api/simple-sidebar.css">
  <script src="js/api/jquery.min.js"></script>
  <script src="js/api/bootstrap.min.js"></script>
  <script src="js/api/annyang.min.js"></script>
  <script type="text/javascript" src="js/common.js"></script> 
  <script type="text/javascript" src="js/ui.js"></script> 
  <script type="text/javascript" src="js/pages/admin_dashboard_managePlatforms.js"></script> 
  <link rel="stylesheet" href="styles/project.css">
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
					<!-- -->
				</div><!--/.col-md-9 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
		
	</div><!--/.page-content-wrapper -->
</div><!--/#wrapper -->
</body>
</html>