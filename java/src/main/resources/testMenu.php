<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/pages/index.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/api/core-skeleton.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 /* ADD_TECH ::: START */
 // js_ajax('GET', 'backend/controllers/module.static.files.php', {  action:'ADD_TECH', title:'TEST TECHNOLOGIES' }, function(response){
	// document.write(JSON.stringify(response));
 // });
/* ADD_TECH ::: END */ 

 js_ajax('GET', 'backend/controllers/module.static.files.php', {  action:'ADD_SUBJECT', techTitle:'BACKEND TECHNOLOGIES', id:'python', title:'Python' }, 
 function(response){ document.write(JSON.stringify(response)); });
});
</script>
</head>
<body>

</body>
</html>
