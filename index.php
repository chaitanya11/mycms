<?php
if (!isset($_SESSION))
    {
      session_start();
    }
if($_GET){
  session_destroy();
  header('Location:http://localhost/mycms');
} 
else{
  @$user = $_SESSION["user"];
if($user){
  header('Location:http://localhost/mycms/layouts/layout1.php');
}
else{
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="validations/logval.js"></script>
<style type="text/css">
  .signup{
    position: absolute;
    top: 5%;
    right: 5%; 
  }
</style>
<title>Mycms</title>
</head>

<body>
<div class="signup">
  <a href="http://localhost/mycms/signup.html" class="btn btn-info"><span class="glyphicon glyphicon-copy">Signup</span></a>
</div>
<div class="container">
<h1>Login form</h1>
  <div><span style="color:red">* required field.</span></div>   <br />
  <form name="regform" action="http://localhost/mycms/admin/logs.php" onsubmit="return validateForm()" method="post"> 
  <div class="table-responsive">  
  <table style="width:50%" align="center" class="table table-striped">
    <tbody>
      <tr>
        <td width="39%">Username <span style="color:red">*</span>:</td>
        <td width="61%">
  <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1" name="username" id="username">
</td>
      </tr>

        <tr>
        <td width="39%" height="70">Passcode <span style="color:red">*</span>:</td>
        <td width="61%"><input type="password" class="form-control" placeholder="Passcode" aria-describedby="sizing-addon1" name="passcode" id="passcode">
</td>
      </tr>
    


    </tbody>
  </table>
  <center><input type="submit" class="btn btn-default" value="Submit" /></center></div>
</form>
</div>

</body>
<?php
}
}
?>