<?php
@session_start();
if(isset($_COOKIE['user']) and (isset($_COOKIE['pass'])) and (isset($_COOKIE['username'])))
{
 
$user=$_COOKIE['user'];
$pass=$_COOKIE['pass'];
$username=$_COOKIE['username'];
$_SESSION['luser']=$user;
$_SESSION['lusername']=$username;
setcookie('user','',time()-3600,"/");
setcookie('pass','',time()-3600,"/");
setcookie('username','',time()-3600,"/");
setcookie('user',$user,time()+60*60*7,"/");
setcookie('pass',$pass,time()+60*60*7,"/");
setcookie('username',$username,time()+60*60*7,"/");
header('location: game.php?');
}
else if(isset($_COOKIE['auser']))
{
header('location: try.php');
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <meta  charset="utf-8" name="viewport" content="width=device-width" scale="initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/css/default.css">
 <style>
 body{
  background: #1A237E;
}
</style>
</head>
<body>
<div class="snowflakes" aria-hidden="true">
  <div class="snowflake">
  ❄
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
  <div class="snowflake">
  ❅
  </div>
  <div class="snowflake">
  ❆
  </div>
  <div class="snowflake">
  ❄
  </div>
</div>
<div class="wrapper">
<div class="overlay">
<div class="container col-md-offset-4 col-md-4" style="margin-top:2%;">
<div align="center">
      <h1 style=" font-size: 400%; color: #E0E0E0;"><img src="assets/images/d.gif" width="35%" height="20%">Sign Up</h1>
</div>
<div class="forms">
  <form class="form-horizontal" method="post" action="register.php">
    <div class="form-group">
      <label style="color: #E0E0E0;">Username:<span class="req">*</span></label>
      <input class="form-control" type="text" name="fname" placeholder="Enter Username" required>
    </div>
  
    <div class="form-group">
      <label style="color: #E0E0E0;">Email:<span class="req">*</span></label>
      <input class="form-control" type="email" name="remail" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
      <label style="color: #E0E0E0;">Password:<span class="req">*</span></label>
      <input class="form-control" type="password" name="rpass" placeholder="Enter your password" required>
    </div>
    <div class="form-group">
      <button class="btn btn-primary btn-block" type="submit"><label style="color: #E0E0E0;">Sign up</label></button>
    </div>
    </form>
    </div>
</div>
</div>
<div class="cart"></div>
</div>
</body>
</html>