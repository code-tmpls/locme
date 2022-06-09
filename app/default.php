<?php 
include_once 'templates/basic.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Locum Me : AI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/simple-sidebar.css">
  <script src="<?php echo $PROJECT_URL; ?>js/api/jquery.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>js/api/bootstrap.min.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>js/api/annyang.min.js"></script>
  <script type="text/javascript" src="<?php echo $PROJECT_URL; ?>js/common.js"></script>
  <script type="text/javascript" src="<?php echo $PROJECT_URL; ?>js/ui.js"></script>
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/project.css">
<script type="text/javascript">
$(document).ready(function(){
 sel_header_mainMenu("locumme_header_home");
 managePlatform_view_platformList("managePlatform_viewPlatform_info",false); // loads Technologies in Page
});
</script>
</head>
<body>

<?php include_once 'templates/header_default.php'; ?>

<div class="container-fluid">
 <div class="row" style="background-color:#337ab7;padding-top:25px;padding-bottom:25px;">
  <img class="col-md-4" src="https://otter.ai/static/product-image.png"/><!--/.col-md-6 -->
  <div class="col-md-7">
	<div class="mtop25p">
		<div style="color:#337ab7;font-family:bitcrusher;font-size:32px;letter-spacing:1px;color:#fff;">locum me </div> 
		<div style="font-size:22px;font-family:texgyreadventor;margin-top:8px;color:#cdd3f1;">Artificial Intelligence powered Technical Screening Boostup Tool</div>
		<div style="font-size:18px;font-family:texgyreadventor;margin-top:15px;line-height:32px;color:#777;color:#f1eded;">
		 Tool empowers the Candidate's Technical Efficiency and Candidate presentation during Interview with this Artifical Intelligence powered Technical Screening Boostup Tool.
		</div>
		<div align="center" class="font-texgyreadventor mtop15p">
		 <button class="btn btn-sm btn-primary-o" style="letter-spacing:0.8px;"><b>See How it works?</b></button>
		</div>
	</div>
  </div><!--/.col-md-6 -->
 </div><!--/.row -->
 <div class="row mtop35p">
  <div align="center" class="col-md-12">
	<div style="color:#000;font-family:texgyreadventor;font-size:20px;letter-spacing:0.4px;">This Artificial Intelligence Tool is powered by</div> 
  </div><!--/.col-md-12 -->
  <div id="managePlatform_viewPlatform_info" class="col-md-12 font-texgyreadventor mtop35p"></div>
 </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>