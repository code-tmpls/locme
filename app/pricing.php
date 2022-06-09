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
  <script src="<?php echo $PROJECT_URL; ?>js/api/bootstrap-advanced.js"></script>
  <script src="<?php echo $PROJECT_URL; ?>js/api/annyang.min.js"></script>
  <script type="text/javascript" src="<?php echo $PROJECT_URL; ?>js/common.js"></script>
  <script type="text/javascript" src="<?php echo $PROJECT_URL; ?>js/ui.js"></script>
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/project.css">
  <link rel="stylesheet" href="<?php echo $PROJECT_URL; ?>styles/api/bootstrap-advanced.css">
<style>
body { background-color:#3f3a4c;color:#fff; }
</style>
</head>
<body>

<?php include_once 'templates/header_default.php'; ?>

<div class="container-fluid">
 <div class="row" style="margin-top:20px;">
	<div align="center" class="col-md-12"><h2>Premium Plans</h2></div>
 </div>
 <div class="row" style="margin-top:15px;">
   <div class="col-md-3">
	<?php include_once 'templates/pricing_01.php'; ?>
   </div><!--/.col-md-3 -->
   <div class="col-md-3">
	<?php include_once 'templates/pricing_02.php'; ?>
   </div><!--/.col-md-3 -->
   <div class="col-md-3">
	<?php include_once 'templates/pricing_03.php'; ?>
   </div><!--/.col-md-3 -->
   <div class="col-md-3">
	<?php include_once 'templates/pricing_04.php'; ?>
   </div><!--/.col-md-3 -->
 </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>