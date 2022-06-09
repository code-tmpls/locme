<?php include_once 'templates/basic.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Locum Me : Lobby</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="styles/api/bootstrap.min.css">
  <link rel="stylesheet" href="styles/api/font-awesome.min.css">
  <link rel="stylesheet" href="styles/api/simple-sidebar.css">
  <script src="js/api/jquery.min.js"></script>
  <script src="js/api/bootstrap.min.js"></script>
  <script src="js/api/annyang.min.js"></script>
  <script type="text/javascript" src="js/common.js"></script>
  <link rel="stylesheet" href="styles/project.css">
  <link rel="stylesheet" href="styles/api/jquery-ui.css">
  <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<div id="wrapper" class="toggled">
	<!-- Core Skeleton : Side and Top Menu -->
	<?php include_once 'templates/menu.php'; ?>
	
	
	<div id="page-content-wrapper">
			<?php include_once 'templates/lobby_view.php'; ?>
	
	</div><!--/.page-content-wrapper -->
</div><!--/#wrapper -->

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-app.js"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.2/firebase-firestore.js"></script>
<script>
var LOBBY_ID = '<?php if(isset($_GET["lobbyId"])){ echo $_GET["lobbyId"]; } ?>';
</script>
<script type="text/javascript" src="js/pages/lobby_view.js"></script> 
<script>

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
var firebaseConfig = {
  apiKey: "AIzaSyChsvstzk-jLTmM7uY8LClK7VX6glMavhM",
  authDomain: "locum-me.firebaseapp.com",
  projectId: "locum-me",
  storageBucket: "locum-me.appspot.com",
  messagingSenderId: "1090042511603",
  appId: "1:1090042511603:web:b3b713229cc0a11f723786",
  measurementId: "G-5NZVPQ5XKK"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
  
var firestore = firebase.firestore();
const docRef = firestore.doc("lobby/"+LOBBY_ID);
var messages = [];
docRef.onSnapshot(function(doc){
 if(doc && doc.exists){
  messages = doc.data().info;
  var content='';
  if(messages!==undefined || messages.length!==0){
	   for(var index=0;index<messages.length;index++){
		  content+=messages[index].message+'<br/>';
	   }
  }
  document.getElementById("promptWriteChat").innerHTML = content;
 }    
});
function publishToUser(){
	var printPromptWrite = document.getElementById("printPromptWrite").value;
		messages.push({
			message: printPromptWrite
		});
	docRef.set({ info: messages }).then(function(){
		console.log("Status saved");
	}).catch(function(error){
		console.log(error);
	});
  }
</script>

</body>
</html>