<?php
session_start(); 
include('include/connection.php');
?>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
body{
background-color: blue;
}
.icon {
  padding: 10px;
  background: blue;
  color: blue;
  min-width: 50px;
  text-align: center;
}
</style>

		<script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.password_again.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.password_again.focus();
return false;
}
return true;
}
</script>

</head>
<body>

<div class="container"style="width:500px;margin-top:100px;background-color: yellow;border:4px solid black;">
<div class="card-body">
	<article class="card-body mx-auto"style="max-width: 400px;color:black;float:center;">
		<h4 class="card-title mt-3 text-center">User Login</h4><hr>
		
		
		<form action =""method="post"><center> 
<img src="login/admin.png"class="user"style="width:100px;height:100px;border-radius:60%;border:2px solid black;background-color:navy;"></center>
			<div class="form-group input-group">
	<div class="input-group-prepend">

					<span class="input-group-text"><i class="fa fa-user"></i></span>
				</div>
				<input name="fullname" class="form-control"placeholder="Full Name"type="text"required>
			</div>
<div class="form-group input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fa fa-lock"></i></span>
				</div>
				<input name="password" class="form-control"placeholder="Create password"type="password"required>
			</div>
<center><input type="submit"name="submit"value="Login"class="btn btn-primary"/></center>
</form>
<p class="divider-text">
			<h2 class="bg-blue"><center>OR</center></h2>
		</p>
  <div class="col">
        <a href="facebook.com" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
         </a>
        <a href="hospital123.com" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="google.com" class="google btn"><i class="fa fa-google fa-fw">
          </i> Login with Google+
        </a>
      </div>
		<br>
<h4>Create an account? <a href="registration.php">&nbsp;SignUp</a></h4>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$fname=$_POST['fullname'];
$password=($_POST['password']);
$query="SELECT * FROM USER WHERE fullname='$fname'&& password='$password'";
$data=mysqli_query($conn, $query);
$total=mysqli_num_rows($data);
if($total==1)
{

$_SESSION['login']=$_POST['fullname'];

$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
// For stroing log if user login successfull
$log=mysqli_query($conn,"insert into userlog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:UserDashboard/dashboard.php");
exit();
}
else
{
$_SESSION['login']=$_POST['fullname'];	
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($conn,"insert into userlog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$_SESSION['errmsg']="Invalid username or password";
$extra="user_login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');

exit();
}
}
?>
