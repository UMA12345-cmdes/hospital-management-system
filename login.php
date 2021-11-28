
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
  <link rel="stylesheet" href="MDB/css/style.css">
<link rel="stylesheet"href="css/style.css">
<style type="text/css">



<?php
error_reporting(0);
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$error="";
$success="";

if(isset($_POST['submit'])) {
if($uname== "admin123@gmail.com") {
if($pass== "password123") {
$error="";
$success="Welcome Admin !!!";
//redirect to another page on successful login
header("location: index.php");
}
else
{
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
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<style type="text/css">

body
{
margin: 0px;
padding: 0px;
display: flex;
justify-content: center;
align-item: center;
float: center;
height: 80vh;


}
h1   {
margin: 0px;
padding: 0px;
color: #111;
font-size: 60px;
}
h1 span  {
display: table-cell;
margin: 0px;
padding: 0px;
animation: animate 3s linear infinite;
}
h1 span:nth-child(1)  {
animation-delay:  0s;
}
h1 span:nth-child(2)   {
animation-delay:  0.25s;
}
h1 span:nth-child(3){
animation-delay:  0.5s;
}
h1 span:nth-child(4){
animation-delay:  0.75s;
}
h1 span:nth-child(5){
animation-delay:  1s;
}
h1 span:nth-child(6){
animation-delay:  1.25s;
}
h1 span:nth-child(7){
animation-delay:  1.5s;
}
h1 span:nth-child(8)  {
animation-delay:  1.75s;
}

h1 span:nth-child(9)  {
animation-delay:  0s;
}
h1 span:nth-child(10)   {
animation-delay:  0.25s;
}
h1 span:nth-child(11){
animation-delay:  0.5s;
}
h1 span:nth-child(12){
animation-delay:  0.75s;
}
h1 span:nth-child(13){
animation-delay:  1s;
}
h1 span:nth-child(14){
animation-delay:  1.25s;
}
h1 span:nth-child(15){
animation-delay:  1.5s;
}
h1 span:nth-child(16)  {
animation-delay:  1.75s;
}

h1 span:nth-child(17)  {
animation-delay:  0s;
}
h1 span:nth-child(18)   {
animation-delay:  0.25s;
}
h1 span:nth-child(19){
animation-delay:  0.5s;
}
h1 span:nth-child(20){
animation-delay:  0.75s;
}
h1 span:nth-child(21){
animation-delay:  1s;
}
h1 span:nth-child(22){
animation-delay:  1.25s;
}
h1 span:nth-child(23){
animation-delay:  1.5s;
}
h1 span:nth-child(24)  {
animation-delay:  1.75s;
}


@keyframes animate
{
0%,100%
{
color: red;
filter: blur(4px);
text-shadow: 0 0  10px #00b3ff;
 }  
5%,95%
{
color: yellow;
filter: blur(4px);
text-shadow: 0 0  10px #00b3ff;
 }  
15%,90%   
{
color: black;
filter: blur(2px);
text-shadow: 0 0  10px #00b3ff;
 }     
10%,80%
{
color: green;
filter: blur(0px);
text-shadow: 0 0  10px #00b3ff;
 }                 
25%,80%
{
color: blue;
filter: blur(0px);
text-shadow: 0 0  10px #00b3ff;
 } 
20%,80%
{
color: white;
filter: blur(0px);
text-shadow: 0 0  10px #00b3ff;
 } 
30%,80%
{
color: red;
filter: blur(0px);
text-shadow: 0 0  10px #00b3ff;
 }   
35%,80%
{
color: white;
filter: blur(0px);
text-shadow: 0 0  10px #00b3ff;
 }                                                                                        
}



.container   {
position :  absolute;
top:  70%;
left:  50%;
transform:  translate(-50%,-50%);
width : 450px;
height : 470px;
box-sizing : border-box;
background : rgba(0,0,0,0.5);

}
.container  p
{
margin : 0;
padding : 0;
font-weight : bold;
color : blue;
}
.container input[type="text"],
.container input[type="password"]
{
border:none
border-bottom: 5px solid yellow;
background:  white;
outline: none;
height:40px;
color:black;
font-size:16px;
}
.container input[type="submit"]
{
border: none;
outline: none;
height: 50px;
color: #fff;
font-size : 20px;
cursor : pointer;
border-radius : 30px;
}
: :placeholder
{
color: rgba(255,255,255,0.5);
}




</style>
</head>
<center>

<body style="background-color: dodgerblue;">
<br>


<h1 > <big><big> 
<span>H</span>
<span>O</span>
<span>S</span>
<span>P</span>
<span>I</span>
<span>T</span>
<span>A</span>
<span>L</span>&nbsp;
<span>M</span>
<span>A</span>
<span>N</span>
<span>A</span>
<span>G</span>
<span>E</span>
<span>M</span>
<span>E</span>
<span>N</span>
<span>T</span>&nbsp;
<span>S</span>
<span>Y</span>
<span>S</span>
<span>T</span>
<span>E</span>
<span>M</span>

</h1>
</center>




<br><fieldset></fieldset>
</body>
<body>
<img src="6.jpg"height="auto"width="1600px">
<body ><br>
<div style="text-align: center;">
<div class="container"style="background-color:dodgerblue;border:2px solid black;">
<h4 style="color: white;"></h4>
<br>
<img src="image/admin.png"class="user"style="width:100px;height:100px;border-radius:60%;border:2px solid white;background-color:white;">
<p class="error"><?php echo $error;  ?></p><p class="success"><?php echo $success;  ?></p>
<form method="post">
<div class="form-input"><br>
<i class="fas fa-user"></i>
Email: 
<input type="text"name="uname" value=""placeholder="Enter Username"required></p><br/>
 <i class="fas fa-lock" ></i>
Password: 
<input type="password"name="pass" value=""placeholder="Enter Password"required></p><br/><br/><a href="#"style="color:white;">forget password</a>
<button type="submit" class="btn btn-primary pull-right" name="submit">
									Login <i class="fa fa-arrow-circle-right"></i>
								</button>

</div>
</form>
</div>
</div>


<head>
<style type="text/css">
.social_network{
top: 90px;
right: 90px;
position: relative;
}
.fa_icon{
width: 30px;
height: 30px;
float: center;
border: 90%;
position: relative;
background: linear-gradient(to bottom, #615cfd 0%, #d465ef 100%);
display: inline-flex;
justify-content: center;
align-icon: right;
}

.fa_icon:hover{
background: linear-gradient(to bottom, #d465ef 0%, #615cfd 100%);
}


</style>
</head>
<body>
<header></header>
<main> </main>
<div class="footer-body">
<footer style="background: #666;height:170px;padding:15px; width: 100%;
float: center;
border-radius: 5px;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;

margin-top: 2%;
margin-bottom: 0%;">


<div class="social_network">
<div class="fa_icon">
<a href="https://www.instagram.com/admin123/" target="_blank">    
<i class="fa fa-instagram" aria-hidden="true"></i>
</a>
</div>
<div class="fa_icon">
<a href="https://www.facebook.com/hospital/" target="_blank">    
<i class="fa fa-facebook"aria-hidden="true"></i>
</a>
</div>
<div class="fa_icon">
<a href="https://www.twitter.com/hospital/" target="_blank">    
<i class="fa fa-twitter"aria-hidden="true"></i>
</a>
</div>
<a href="https://www.google.com/hospital/" target="_blank">    
<div class="fa_icon">
<i class="fa fa-google-plus-square"aria-hidden="true"></i>
</a>
</div>
<a href="https://www.linked.com/hospital/" target="_blank">    
<div class="fa_icon">
<i class="fa fa-linkedin"aria-hidden="true"></i>
</a>
</div>
</div>
<a href="login.php"style="color: white;float: center">  @hospital management</a> 

</div>  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>
</body>
</html>