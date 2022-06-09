<?php
$PROJECT_IMG_PATH = 'http://localhost/np/locumme_data/images/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<style>
a { color: #024279; }
pre { background:none;border:0px; }
body { font-size:12px;padding:15px; }
.hide-block { display:none; }
.output-bg { background-color:#fefefe; }
.mbot5p { margin-bottom:5px; }
img { width:300px;height:100%;padding:5px; }
.pad5p { padding:5px; }
.mbot15p { margin-bottom:15px; }
.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover { background-color:#d0254e; }
.dropdown-menu>li>a { padding: 5px 20px; }
</style>
<script type="text/javascript">
let TECHNOLOGY_INDEX = 0;
let technologies = [{id:"",
					 title:"FRONTEND TECHNOLOGIES",
					 subject:[{ id:"html",
								title:"HTML",
								syllabus:[{id:"html_01_programming",title:"Programming Language"},
										 {id:"html_02_dom",title:"HTML DOM"}] },
							   { id:"css",
								 title:"CSS",
								 syllabus:[{id:"css_01_CascadeStyles",title:"Cascade Stylesheets"}] },
							   { id:"js",
								 title:"Javascript",
								 syllabus:[{id:"js_01_introduction",title:"Introduction"},
										  {id:"js_02_ecmascript",title:"ECMAScript"},
										  {id:"js_03_grammar",title:"Grammar and types"},
										  {id:"js_04_control",title:"Control flow and Error handling"},
										  {id:"js_05_loops",title:"Loops and iteration"},
										  {id:"js_06_functions",title:"Functions"},
										  {id:"js_07_expressions",title:"Expressions and operators"},
										  {id:"js_08_numbers",title:"Numbers and dates"},
										  {id:"js_09_txtFormat",title:"Text formatting"},
										  {id:"js_10_regularExp",title:"Regular expressions"},
										  {id:"js_11_indexCollections",title:"Indexed collections"},
										  {id:"js_12_keyCollections",title:"Keyed collections"},
										  {id:"js_13_workingObjects",title:"Working with objects"},
										  {id:"js_14_detailObjectModel",title:"Details of the object model"},
										  {id:"js_15_usingPromises",title:"Using promises"},
										  {id:"js_16_iteratorsGenerators",title:"Iterators and generators"},
										  {id:"js_17_metaProgramming",title:"Meta programming"},
										  {id:"js_18_javascriptModules",title:"JavaScript modules"},
										  {id:"js_19_designPatterns",title:"Design Patterns"},
										  {id:"js_20_reflections",title:"Reflections"},
										  {id:"js_21_all",title:"All"}]},
								{ id:"typescript",
								  title:"TypeScript",
								  syllabus:[{id:"typescript_01_introduction",title:"Introduction"}] },
								{ id:"nodejs",
								 title:"Node JS",
								 syllabus:[{id:"nodejs_01_introduction",title:"Introduction"}] },
								{ id:"react",
								  title:"React JS",
								  syllabus:[{id:"react_01_introduction",title:"Introduction"},
											{id:"react_02_dom",title:"React DOM"},
											{id:"react_03_programming",title:"React Basics"},
											{id:"react_04_state",title:"React State"},
											{id:"react_05_props",title:"React Props"},
											{id:"react_06_events",title:"React Events"},
											{id:"react_07_classcomponents",title:"Class Components"},
											{id:"react_08_funccomponents",title:"Functional Components"},
											{id:"react_09_databwcomponents",title:"Data b/w Components"},
											{id:"react_10_libraries",title:"React Support Libraries"},
											{id:"react_11_redux",title:"React Redux"},
											{id:"react_12_reactprod",title:"React in Production"}]},
								{ id:"frontendUnitTesting",
								  title:"Testing Technologies",
								  syllabus:[{id:"frontendUnitTesting_01_basics",title:"Basics"},
											{id:"frontendUnitTesting_02_mochaJs",title:"Mocha JS"},
											{id:"frontendUnitTesting_03_jasmine",title:"Jasmine"},
											{id:"frontendUnitTesting_04_selenium",title:"Selenium"},
											{id:"frontendUnitTesting_05_protractor",title:"Protractor"},
											{id:"frontendUnitTesting_06_jest",title:"Jest"},]}
								]
					},
					{id:"",
					 title:"BACKEND TECHNOLOGIES",
					 subject:[{ id:"java",
								title:"Java",
								syllabus:[{id:"java_01_basics",title:"Basics"},
										 {id:"java_02_oops",title:"OOPS"},
										 {id:"java_03_nestedInnerClasses",title:"Nested / Inner Classes"},
										 {id:"java_06_strings",title:"Strings & Arrays"},
										 {id:"java_07_controlFlow",title:"Control Flow & Error Handling"},
										 {id:"java_08_exceptionHandling",title:"Exception Handling"},
										 {id:"java_09_collections",title:"Collections"},
										 {id:"java_10_multiThreading",title:"Multi-Threading"},
										 {id:"java_11_garbageCollectors",title:"Garbage Collectors"},
										 {id:"java_12_jdbc",title:"JDBC"},
										 {id:"java_13_rmi",title:"RMI"},
										 {id:"java_14_jspsServlets",title:"JSPs & Servlets"},
										 {id:"java_15_gui",title:"Java GUI"},
										 {id:"java_16_sockets",title:"Socket Programming"}] },
							  { id:"springFramework",
								title:"Spring Framework",
							    syllabus:[{id:"springFramework_00_basics",title:"Spring Basics"},
										  {id:"springFramework_01_core",title:"Spring Core"},
										  {id:"springFramework_02_annotations",title:"Spring Annotations"},
										  {id:"springFramework_03_data",title:"Spring Data"},
										  {id:"springFramework_04_aop",title:"Spring AOP"},
										  {id:"springFramework_05_mvc",title:"Spring MVC"},
										  {id:"springFramework_06_boot",title:"Spring Boot"},
										  {id:"springFramework_07_security",title:"Spring Security"},
										  {id:"springFramework_08_OAuth",title:"Spring OAuth"},
										  {id:"springFramework_09_cloud",title:"Spring Cloud"},
										  
										  {id:"springFramework_07_batch",title:"Spring Batch"},
										  {id:"springFramework_08_microservices",title:"Spring Microservices"}
										 ] },
							  { id:"hibernate",
								title:"Hibernate",
							    syllabus:[{id:"hibernate_01_core",title:"Hibernate Core"}] },
							  { id:"all",
								title:"all",
							    syllabus:[{id:"javabasics_01_core",title:"Java Basics"},
										  {id:"javabasics_02_oops",title:"Java OOPs"},
										  {id:"javabasics_03_inheritance",title:"Java Inheritance"},
										  {id:"javabasics_04_static",title:"Java Static"},
										  {id:"javabasics_05_methodOverloadingOverriding",title:"Method Overloading / Overriding"},
										  {id:"javabasics_06_polymorphism",title:"Java Polymorphism"},
										  {id:"javabasics_07_abstraction",title:"Abstraction"},
										  {id:"javabasics_08_final",title:"Final"},
										  {id:"javabasics_09_packages",title:"Packages"},
										  {id:"javabasics_10_internationalization",title:"Internationalization"},
										  {id:"javabasics_11_serialization",title:"Serialization"},
										  {id:"javabasics_12_reflection",title:"Reflection"},
										  {id:"javabasics_13_garbageCollection",title:"Garbage Collection"},
										  {id:"javabasics_14_innerClasses",title:"Inner Classes"},
										  {id:"javabasics_15_string",title:"String"},
										  {id:"javabasics_16_exceptionHandling",title:"Exception Handling"},
										  {id:"javabasics_17_collections",title:"Collections"},
										  {id:"javabasics_18_multiThreading",title:"Multi-Threading"},
										  {id:"javabasics_19_java8",title:"Java 8"},
										  {id:"javabasics_20_trickyQuestions",title:"Java Tricky Questions"},
										  {id:"javabasics_21_mixedQuestions",title:"Mixed Questions"},
										  {id:"javabasics_22_jsp",title:"JSPs"},
										  {id:"javabasics_23_javaDesignPatterns",title:"Java Design Patterns"},
										  {id:"javabasics_24_spring",title:"Spring Framework"},
										  {id:"javabasics_25_hibernate",title:"Hibernate"},
										  {id:"javabasics_26_maven",title:"Maven"},
										  {id:"javabasics_27_git",title:"Git Repository"},
										  {id:"javabasics_28_aws",title:"AWS"},
										  {id:"javabasics_29_cloudComputing",title:"Cloud Computing"},
										  {id:"javabasics_30_docker",title:"Docker"},
										  {id:"javabasics_31_microservices",title:"Microservices"}
										 ] },
							  { id:"microservices",
								title:"Microservices",
							    syllabus:[{id:"microservices_01_core",title:"Microservices"}] },
							 ]
					},
					{id:"",
					 title:"MESSAGING QUEUES",
					 subject:[{ id:"amqp",
								title:"AMQP",
								syllabus:[{id:"amqp_01_basics",title:"Basics"}] },
							  { id:"kafka",
								title:"Apache Kafka",
							    syllabus:[{id:"kafka_01_basics",title:"Basics"}] }]
					},
					{id:"",
					 title:"WEB SERVER AND WEB BROWSER",
					 subject:[{ id:"httpWeb",
								 title:"HTTP/HTTPS Protocol",
								 syllabus:[{id:"httpWeb_01_httpProtocol",title:"Introduction"},
										   {id:"httpWeb_02_webBrowser",title:"Web Browser"}] },
							  { id:"cors",
								 title:"CORS",
								 syllabus:[{id:"cors_01_introduction",title:"Introduction"}] },
							  { id:"websockets",
								 title:"WebSockets",
								 syllabus:[{id:"websockets_01_introduction",title:"Introduction"}] },
							  { id:"webservers",
								 title:"Web Servers",
								 syllabus:[{id:"webservers_01_apacheTomcat",title:"Apache Tomcat"},
										   {id:"webservers_02_iis",title:"IIS"}] },
							 ]
					},
					{id:"devops",
					 title:"DEVOPS",
					 subject:[{ id:"progLang",
								title:"Programming Language",
								syllabus:[{id:"progLang_01_python",title:"Python"}] },
							  { id:"serverAdmin",
								title:"Server Administration",
								syllabus:[{id:"serverAdmin_01_linux",title:"Linux"},
										  {id:"serverAdmin_02_windows",title:"Windows"}] }]
					},
					{id:"",
					 title:"CLOUD COMPUTING",
					 subject:[]
					},
					{id:"",
					 title:"SQL / NO-SQL DATABASES",
					 subject:[{ id:"dbBasics",
								title:"Basics",
								syllabus:[{id:"dbBasics_01_introduction",title:"Introduction"}] },
							  { id:"mysql",
								title:"MySQL Server",
								syllabus:[{id:"mysql_01_introduction",title:"Introduction"}] },
							  { id:"mssql",
								title:"Microsoft SQL Server",
								syllabus:[{id:"mssql_01_dbmsKnowledge",title:"DBMS knowledge"},
										  {id:"mssql_02_designProgram",title:"Design & Programming"},
										  {id:"mssql_02_indexes",title:"Indexes"},
										  {id:"mssql_03_view",title:"View"},
										  {id:"mssql_04_sqlserverAdministration",title:"SQL Server Administration"},
										  {id:"mssql_05_replication",title:"Replication"},
										  {id:"mssql_06_security",title:"Security"},
										  {id:"mssql_07_transactions",title:"Transactions"},
										  {id:"mssql_08_triggers",title:"Triggers"},
										  {id:"mssql_09_storedProcedures",title:"Stored Procedures"},
										  {id:"mssql_10_cursors",title:"Cursors"},
										  {id:"mssql_11_datatypes",title:"Data Types"},
										  {id:"mssql_12_xmlSql",title:"XML in SQL"},
										  {id:"mssql_13_clustering",title:"Clustering"}] },
							  { id:"oracleDb",
								title:"Oracle DB Server",
								syllabus:[{id:"oracleDb_01_introduction",title:"Introduction"}] },
							 ]
					}
					];
				  
function resetAllMenus(){
 document.getElementById("leftSyllabusMenu").innerHTML ='';
 document.getElementById("qaLeftColumn").innerHTML ='';
 document.getElementById("qaRightColumn").innerHTML ='';
}	

function buildMainMenu(divId,selectId){
  resetAllMenus();
  let subject = technologies[TECHNOLOGY_INDEX].subject;
  let content='<ul class="nav nav-pills">';
  for(let index=0;index<subject.length;index++) {
	content+='<li id="'+subject[index].id+'" class="'+((subject[index].id===selectId)?'active':'')+'" onClick="javascript:selMainMenu(this.id);">'; 
	content+='<a href="#"><b>'+subject[index].title+'</b></a></li>';
  }
  content+='</ul>';
  document.getElementById(divId).innerHTML = content;
  if(subject[0].syllabus.length>0){
	 buildSubMainMenu(0, 'leftSyllabusMenu', subject[0].syllabus[0].id); 
  }
}

function selMainMenu(id){
  console.log(id);
  let subject = technologies[TECHNOLOGY_INDEX].subject;
  resetAllMenus();
  for(let index=0;index<subject.length;index++){
	if(subject[index].id === id && !$('#'+subject[index].id).hasClass('active')) { 
		$('#'+subject[index].id).addClass('active'); 
		if(subject[index].syllabus.length>0){
			buildSubMainMenu(index, 'leftSyllabusMenu', subject[index].syllabus[0].id);
		}
	}
	else { $('#'+subject[index].id).removeClass('active'); }
  }
}

function selSubMenu(mainMenuIndex, selectId){
  let subject = technologies[TECHNOLOGY_INDEX].subject;
  let syllabus = subject[mainMenuIndex].syllabus;
  for(let index=0;index<syllabus.length;index++){
	if(syllabus[index].id === selectId && !$('#'+syllabus[index].id).hasClass('active')) { $('#'+syllabus[index].id).addClass('active'); }
	else { $('#'+syllabus[index].id).removeClass('active'); }
  }
  $("#qaLeftColumn").load("templates/"+subject[mainMenuIndex].id+'/'+selectId+"/00_basic_01.php");
  $("#qaRightColumn").load("templates/"+subject[mainMenuIndex].id+'/'+selectId+"/00_basic_02.php");
}

function buildSubMainMenu(mainMenuIndex, divId, selectId){
  let subject = technologies[TECHNOLOGY_INDEX].subject;
  let syllabus = subject[mainMenuIndex].syllabus;
  let content='<ul class="nav nav-pills  nav-stacked">';
  for(let index=0;index<syllabus.length;index++) {
	content+='<li id="'+syllabus[index].id+'" class="'+((syllabus[index].id===selectId)?'active':'')+'" onClick="javascript:selSubMenu('+mainMenuIndex+', this.id);">'; 
	content+='<a href="#"><b>'+syllabus[index].title+'</b></a></li>';
  }
  content+='</ul>';
  document.getElementById(divId).innerHTML = content;
  console.log("templates/"+subject[mainMenuIndex].id+'/'+selectId);
  $("#qaLeftColumn").load("templates/"+subject[mainMenuIndex].id+'/'+selectId+"/00_basic_01.php");
  $("#qaRightColumn").load("templates/"+subject[mainMenuIndex].id+'/'+selectId+"/00_basic_02.php");
}
</script>
</head>
<body>

<script type="text/javascript">
function load_technology(id){
 let content='<div class="dropdown">';
	 content+='<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">';
	 content+='<span id="selectedTechnologyMenu">'+technologies[0].title+'</span> &nbsp;<span class="caret"></span></button>';
	 content+='<ul class="dropdown-menu">';
	for(let index=0;index<technologies.length;index++){
	  let techId = technologies[index].id;
	  let techTitle = technologies[index].title;
	  content+='<li><a id="'+techId+'" href="#" onclick="javascript:sel_technology('+index+');">'+techTitle+'</a></li>';
	}
	 content+='</ul>';
	 content+='</div>';
 document.getElementById(id).innerHTML=content;
}
$(document).ready(function(){
 load_technology('technologyMenu');
 sel_technology(TECHNOLOGY_INDEX);
 
});
function sel_technology(index){
 TECHNOLOGY_INDEX = index;
 document.getElementById("selectedTechnologyMenu").innerHTML=technologies[index].title;
 console.log(technologies[index].subject);
 if(technologies[index].subject.length>0){
  buildMainMenu('mainTechMenu',technologies[index].subject[0].id); 
 }
}
</script>  

<div class="container-fluid">
  <div class="row">
	 <div class="col-sm-12 mbot15p">
		<div id="technologyMenu" class="col-sm-3" style="padding-top:3px;">
			<div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">WEB SERVER AND WEB BROWSER &nbsp;
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#" onclick="javascript:sel_technology();">FRONTEND TECHNOLOGIES</a></li>
					<li><a href="#" onclick="javascript:sel_technology();">BACKEND TECHNOLOGIES</a></li>
					<li><a href="#" onclick="javascript:sel_technology();">WEB SERVER AND WEB BROWSER</a></li>
					<li><a href="#" onclick="javascript:sel_technology();">DEVOPS</a></li>
					<li><a href="#" onclick="javascript:sel_technology();">CLOUD COMPUTING</a></li>
				</ul>
			</div>
		</div>
		<div id="mainTechMenu" class="col-sm-9"></div>
	 </div>
  </div>
  <div class="row">
    <div id="leftSyllabusMenu" class="col-sm-2"></div><!--/.col-sm-2 -->
    <div class="col-sm-10">
		<div id="qaLeftColumn" class="col-sm-6"></div><!--/.col-sm-6 -->
		<div id="qaRightColumn" class="col-sm-6"></div><!--/.col-sm-6 -->
      <!-- -->
	  <!-- -->
    </div><!--/.col-sm-10 -->
  </div><!--/.row -->
</div><!--/.container-fluid -->

<link rel="stylesheet" href="vendor/highlight/css/androidstudio.css">
<script src="vendor/highlight/js/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
  
</body>
</html>
