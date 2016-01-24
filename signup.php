<?php 
@mysql_connect("localhost","root","") or die("connection failed");
@mysql_select_db("mycms") or die("database not found");
$name=$_POST['username'];
$pass=$_POST['passcode']; 
$emailid = $_POST['emailid'];
if(isset($_POST['admin'])){
$cat = $_POST['admin'];
}
if(isset($_POST['client'])){
$cat = $_POST['client'];
}
$name = mysql_real_escape_string($name);
$pass = mysql_real_escape_string($pass);
$emailid = mysql_real_escape_string($emailid);
$query = "INSERT INTO login VALUES('','$name','$pass','$emailid','$cat')";
mysql_query($query);
$string = <<<login_link
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
	  		left: 40%;
	  	}
	  </style>
	 </head>
			<div class="center">
				<div class="row">
					<div class="col-md-12">
						<h3>Now you can login  <a href="http://localhost/mycms/" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-log-in"></span> Here</a></h3>
					</div>
				</div>
			</div>	
login_link;
echo $string;
?>