
<?php
session_start(); 
include('include/connection.php');
?>
<html>
<head>
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
<link rel="stylesheet"href="css/style.css">




<?php
error_reporting(0);
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$error="";
$success="";

if(isset($_POST['submit'])) {
if($uname== "doctor") {
if($pass== "password") {
$error="";
$success="Welcome Doctor !!!";
$_SESSION['login']=$_POST['uname'];

$host=$_SERVER['HTTP_HOST'];
$uip=$_SERVER['REMOTE_ADDR'];
$status=1;
$log=mysqli_query($conn,"insert into doctorslog(uid,username,userip,status) values('".$_SESSION['id']."','".$_SESSION['login']."','$uip','$status')");
//redirect to another page on successful login
header("location: ./DoctorDashboard/dashboard.php");
}
else
{
  $_SESSION['login']=$_POST['uname'];  
$uip=$_SERVER['REMOTE_ADDR'];
$status=0;
mysqli_query($conn,"insert into doctorslog(username,userip,status) values('".$_SESSION['login']."','$uip','$status')");
$error="Invalid password !!!";
$success="";
}
}
else{
$error="Invalid password !!!";
$success="";
}
}
?>

<head>
<link rel="stylesheet"href="css/style.css">
<style type="text/css">
#box1 {
box-sizing:border-box;
background-color:yellow;
width:550px;
height:530px;
padding:30px;
float:center;
border:5px solid black;
}


</style>
</head>
<body>
<?php include('include/slide.php'); ?>
<div class="content">
<div style="height:630px;background:blue">

<div id="nav">
<ul>
<li><a href="#"><a href="contact.php">Contact</a></a></li>
<li><a href="#"><a href="doctor_login.php">Doctor</a></a></li>
<li><a href="#"><a href="admin_login.php">Admin</a></a></li>
<li><a href="#"><a href="user_login.php">Patients</a></a></li>
<li><a href="#"><a href="index.html">Home</a></a></li>
</ul></div>
</body>
<br>
<br>
<body><div id="box1">
Doctor Login<hr>
<br>
<br>


<div style="text-align: center;">
<div class="container">

<img src="login/admin.png"class="user"style="width:100px;height:100px;border-radius:60%;border:2px solid black;background-color:navy;">
<p class="error"><?php echo $error;  ?></p><p class="success"><?php echo $success;  ?></p>
<form method="post">
<div class="form-input">
<i class="fa fa-user"></i>Name
<input type="text"name="uname" value=""required><br /><br />
<i class="fa fa-lock "></i>Password
<input type="password"name="pass" value=""required><br /><br>
<input type="submit"name="submit"value="Login"class="btn btn-primary"><br />
<a href="#">forget password</a>
</div>
</form>
</div>
</div>
</div>


</body>
</html>
<?php include('include/icon-footer.php'); ?>