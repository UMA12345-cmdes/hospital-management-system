<?php 

include('include/connection.php');

if(isset($_POST['submit']))
{

$ret=mysqli_query($conn,"SELECT * FROM adminlogin WHERE username='".$_POST['username']."' and password='".$_POST['password']."'");
$num=mysqli_fetch_array($ret);
if($num>0)
{

$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];

header("location:AdminDashboard/dashboard.php");
exit();
}
else
{
echo"invalid password";
} 
}
?>

<html>
<head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
 <!-- MDB icon -->
  <link rel="icon" href="MDB/img/mdb-favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="MDB/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">


<style type="text/css">
#box1 {
box-sizing:border-box;
background-color:white;
width:550px;
height:530px;
padding:30px;
border:2px solid black;

}</style>
<head>
<link rel="stylesheet"href="login/css.css">
<link rel="stylesheet"href="http://fonts.googleapis.com/css?
family=PT+sans">
</head>

<body>
<?php include('include/slide.php'); ?>

<div class="content">
<div style="height:2240px;background:dodgerblue;">

<div class="card-body">
	<article class="card-body mx-auto"style="max-width: 600px;">
				
					<form class="form-login" method="post"><br>

<br>
<br>

<div id="box1">
Admin Login<hr>
<br>


<div style="text-align: center;">

<div class="container">

<img src="login/admin.png"class="user"style="width:100px;height:100px;border-radius:60%;border:2px solid white;background-color:navy;"><br>
<form action=""method="post">
<div class="form-input"><br>
<i class="fas fa-user "></i>
username:<input type="text"name="username"value=""><br><br>
<i class="fa fa-lock "></i>
password:<input type="password"name="password"value=""/><br><br>
							<a href="forgot-password.php">
									Forgot Password ?
								</a>	
<button type="submit" class="btn btn-primary pull-right" name="submit">
								Login <i class="fa fa-arrow-circle-right"></i>
								</button>
</div>
</form>
</div>
</div>

</body>
</div>
</div>
</div>
</div>
</div>
</body><br>
<br><br>
<br><br>
<br>
<?php include('include/icon-footer.php'); ?>