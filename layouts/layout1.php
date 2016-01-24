<?php
	require_once("../db/connection.inc");
	require_once("layout_con.inc");
	estcon("localhost","root","");
	selcdb("mycms");
	$squery = "SELECT * FROM layouts WHERE title='srirama'";
	$sresult = mysql_query($squery);
	$srow = mysql_fetch_array($sresult);
	$i = $srow['nav_items'];
	$stitle = $srow['title'];
	$query = "SELECT * FROM pages";
	$result = mysql_query($query);
	if(isset($_GET['title'])){
		$ttitle = $_GET['title'];
		$tquery = "SELECT * FROM pages WHERE page_title='$ttitle' LIMIT 1";
		$tresult = mysql_query($tquery);
		$trow = mysql_fetch_array($tresult);
	}
	else{
		$ttitle = $stitle;
		$trow = $srow;		
	}
	if (session_status() !== PHP_SESSION_ACTIVE) {
		session_start();
		@$user = $_SESSION["user"] or die(invalid_session());
?>
<head>
  <title><?php echo $stitle; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  	$("li").click(function(){
  		$("li").removeClass("active");
  		$(this).addClass("active");
  	});
  	$("#btn-edit").click(function(){
  		//alert("inside");
  		$("#toggle").toggle("slow");
  	});
  });
  </script>
</head>
<body>	
        <?php       
        if ( $_POST )
        insert_page($_POST);
    else { ?>

	<h1><i>Welcome!!</i></h1>
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">SRIRAMA</a>
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Home</a></li>
<?php
		for($j=0;$j<$i;$j++){
			$row = mysql_fetch_array($result);	?>
			<li><a href="<?php echo $_SERVER['PHP_SELF']."?title=".$row['page_title']; ?>"><?php echo $row['page_title']; ?>
			</a>
			</li>
	<?php	}	?>

      </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="http://localhost/mycms/index.php?status=signout"><span class="glyphicon glyphicon-user"></span> Sign Out
      </a>
      </li>
    </ul>      
    </div>
  </div>
</nav>
  
<div class="container">
<b><h5>Hello <?php echo $_SESSION["user"]; ?></h5></b>
  <h3><?php echo $trow['title']; ?></h3>
  <p><?php echo $trow['content']; ?></p></br></br>
  <?php 
		$cat = $_SESSION["cat"]; 
 		
		if($cat == "admin"){  ?>
			<div class="row">
				<button class="btn btn-success" id="btn-edit">Edit</button>
			<div style="display:none" id="toggle">
			</br></br>
				<form method="post">
					  <script src="cke/ckeditor.js"></script>
					<table class="table table-striped">
					<tbody>
						<tr>
							<td>Title:</td>
							<td><input type="text" id="title" name="title"></td>
						</tr>	
						<tr>
							<td>PageTitle:</td>
							<td><input type="text" id="pagetitle" name="pagetitle"></td>
						</tr>
						<tr>
							<td>Textarea:</td>
						 	<td><textarea id="content" name="content"></textarea>
						            <script>
						                CKEDITOR.replace('content');
						            </script>
						 	</td>
						 </tr>
						 <tr>
						 	<td></td>
							<td><input type="submit" value="Add Page"></td>
						</tr>
					</tbody>
					</table>
		
				</form>	
				</div>		
			</div>
<?php
		}

   ?>
</div>
<?php } 

}
?>
</body>