<?php
	require_once("../db/connection.inc");
	estcon("localhost","root","");
	selcdb("mycms");
	function insert_page($p){
		$t = $_POST['title'];
		$p_t = $_POST['pagetitle'];
		$c = $_POST['content'];		
		$query = "INSERT INTO pages (title,page_title,content) VALUES ('$t','$p_t','$c')";
		@mysql_query($query);
		$query = "UPDATE layouts SET nav_items=nav_items+1 WHERE id=1";
		@mysql_query($query);	
		header('Location:http://localhost/mycms/');	
	}
  function invalid_session(){
  	return <<<text
 <head>
 	<title>MyCms</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.center{
  		position:absolute;
  		top: 50%;
  		left: 30%;
  	}
  </style>
 </head>
		<div class="center">
			<div class="row">
				<div class="col-md-12">
					<h3>you haven't loggined in yet please login <a href="http://localhost/mycms/" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-in"></span> Here</a></h3>
				</div>
			</div>
		</div>
text;
  }
?>
