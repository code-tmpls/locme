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
				<div class="col-md-9">
					<!-- -->
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-2"></div><!--/.col-md-2 -->
							<div class="col-md-4">
								<h4><span style="border-bottom:1px solid #000;padding:5px;"><b>My Profile</b></span></h4>
							</div><!--/.col-md-4 -->
							<div class="col-md-2"></div><!--/.col-md-2 -->
							<div class="col-md-4">
						
							</div><!--/.col-md-4 -->
							<div class="col-md-2"></div><!--/.col-md-2 -->
							
						</div><!--/.row -->
						<div class="row"><hr  style="margin-top:0px;"/></div>
					</div><!--/.container-fluid -->
					<!-- -->
				</div><!--/.col-md-9 -->
				<div class="col-md-3">
					<!-- -->
					<div class="list-group">
						<div class="list-group-item blue-border">
							<div>
							  <span class="blue-text-montserrat">My Voice Credits 
								<i class="fa fa-exclamation-circle pull-right"></i>
							  </span></div>
							<div class="container-fluid">
								<div class="row">
									<div align="right" class="col-md-12">
										<h4><b>60000 minutes</b></h4>
									</div><!--/.col-md-12 -->
								</div><!--/.row -->
							</div><!--/.container-fluid -->
						</div><!--/.list-group-item -->
					</div><!--/.list-group -->
					<!-- -->
				</div><!--/.col-md-3 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
		
	</div><!--/.page-content-wrapper -->
</div><!--/#wrapper -->
</body>
</html>