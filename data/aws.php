<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body { font-size:12px;padding:15px; }
.hide-block { display:none; }
</style>
<script type="text/javascript">

function selMenu(id){
 let menuId = ["menu_aws_basic","menu_äws_products","menu_aws_ec2","menu_aws_s3","menu_aws_rds","menu_aws_dynamoDb","menu_aws_lambda","menu_aws_vpc","menu_aws_kinesis","menu_aws_cloudFront"];
 let contentId = ["content_aws_basic","content_äws_products","content_aws_ec2","content_aws_s3","content_aws_rds","content_aws_dynamoDb","content_aws_lambda","content_aws_vpc","content_aws_kinesis","content_aws_cloudFront"];
 for(let index=0;index<menuId.length;index++){
	if(menuId[index]===id){ 
		if(!$('#'+menuId[index]).hasClass('active')){ $('#'+menuId[index]).addClass('active'); } 
		if($('#'+contentId[index]).hasClass('hide-block')){ $('#'+contentId[index]).removeClass('hide-block'); } 
	} else {
		if($('#'+menuId[index]).hasClass('active')){ $('#'+menuId[index]).removeClass('active'); } 
		if(!$('#'+contentId[index]).hasClass('hide-block')){ $('#'+contentId[index]).addClass('hide-block'); } 
	}
 }
}
</script>
</head>
<body>
  
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2">
      <!-- -->
	  <ul class="nav nav-pills nav-stacked">
		  <li id="menu_aws_basic" class="active" onClick="javascript:selMenu(this.id);"><a href="#"><b>Basic</b></a></li>
		  <li id="menu_äws_products" onClick="javascript:selMenu(this.id);"><a href="#"><b>AWS Products</b></a></li>
		  <li id="menu_aws_ec2" onClick="javascript:selMenu(this.id);"><a href="#"><b>Amazon EC2</b></a></li>
		  <li id="menu_aws_s3" onClick="javascript:selMenu(this.id);"><a href="#"><b>Amazon S3</b></a></li>
		  <li id="menu_aws_rds" onClick="javascript:selMenu(this.id);"><a href="#"><b>Amazon RDS</b></a></li>
		  <li id="menu_aws_dynamoDb" onClick="javascript:selMenu(this.id);"><a href="#"><b>Amazon Dynamo DB</b></a></li>
		  <li id="menu_aws_lambda" onClick="javascript:selMenu(this.id);"><a href="#"><b>Amazon Lambda</b></a></li>
		  <li id="menu_aws_vpc" onClick="javascript:selMenu(this.id);"><a href="#"><b>Amazon VPC</b></a></li>
		  <li id="menu_aws_kinesis" onClick="javascript:selMenu(this.id);"><a href="#"><b>Amazon Kinesis</b></a></li>
		  <li id="menu_aws_cloudFront" onClick="javascript:selMenu(this.id);"><a href="#"><b>Amazon Cloud Front</b></a></li>
	  </ul>
	  <!-- -->
    </div><!--/.col-sm-2 -->
    <div class="col-sm-10">
      <!-- -->
	  <div id="content_aws_basic">
		<!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/00_basic_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/00_basic_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
		<!-- -->
	  </div>
	  <div id="content_äws_products" class="hide-block">
	  <!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/01_products_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/01_products_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
	  <!-- -->
	  </div>
	  <div id="content_aws_ec2" class="hide-block">
	  <!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/02_ec2_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/02_ec2_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
	  <!-- -->
	  </div>
	  <div id="content_aws_s3" class="hide-block">
	  <!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/03_s3_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/03_s3_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
	  <!-- -->
	  </div>
	  <div id="content_aws_rds" class="hide-block">
	  <!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/04_rds_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/04_rds_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
	  <!-- -->
	  </div>
	  <div id="content_aws_dynamoDb" class="hide-block">
	  <!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/04_dynamoDb_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/04_dynamoDb_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
	  <!-- -->
	  </div>
	  <div id="content_aws_lambda" class="hide-block">
	  <!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/05_lambda_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/05_lambda_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
	  <!-- -->
	  </div>
	  <div id="content_aws_vpc" class="hide-block">
		<!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/06_vpc_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/06_vpc_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
		<!-- -->
	  </div><!--/# -->
	  <div id="content_aws_kinesis" class="hide-block">
	    <!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/07_kinesis_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/07_kinesis_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
		<!-- -->
	  </div>
	  <div id="content_aws_cloudFront" class="hide-block">
	  <!-- -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-6">
					<?php include_once 'templates/aws/08_cloudFront_01.php'; ?>
				</div><!--/.col-sm-6 -->
				<div class="col-sm-6">
					<?php include_once 'templates/aws/08_cloudFront_02.php'; ?>
				</div><!--/.col-sm-6 -->
			</div><!--/.row -->
		</div><!--/.container-fluid -->
		<!-- -->
	  </div>
	  <!-- -->
    </div><!--/.col-sm-10 -->
  </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>
