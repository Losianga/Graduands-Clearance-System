<?php
session_start();
include 'connection.php';

if(isset($_POST['signin'])){
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM staff_signup WHERE email='$email'";
$result=mysqli_query($conn,$sql);
if($result){
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
	echo "<script>window.open('staff_profile.php?email=$email','_self');</script>";
}else{
	echo "<script>alert('please check your email or password again');</script>";
	echo "<script>window.open('staffLogin.php','_self');</script>";
}
}
?>
<style type="text/css">
	body{background: url(image1.jpg) no-repeat;background-size: cover;}
	.container{margin-top:5%;height: 450px;width: 400px;background: #fff;margin-left: 35%;}
	.header{color: #fff;background: blue;width: 100%;height: 100px;text-align: center;font-weight: 400;font-size: 30px;}
	.container label{font-size: 20px;margin-left: 15px;}
	.container input{margin-left: 15px;width: 90%;height: 40px;}
	.container p{font-size: 20px;margin-left: 20px;}
	.container .btn{width: 30%;margin-left: 130px;background: blue;color: #fff;border-style: none;border-radius: 5px;margin-top: 30px;}
	.container a{text-decoration: none;}
	.container button{margin-left: 30%;background: blue;height: 40px;width: 90px;border-style: none;}
	.container button a{color: #fff;text-decoration: none;}
</style>
<body>
	<div class="container">
		<form action="staffLogin.php" method="post">
		<div class="header">
			<img src="man.png">
         <p>Student Login</p>
		</div><br>
		<label>Email</label><br>
		<input type="email" name="email" placeholder="Example : brian@gmail.com" required><br>
		<label>Password :</label><br>
		<input type="password" name="password" placeholder="Password" required><br>
		<input type="submit" name="signin" class="btn" value="sign in"><br>
		<p>Do not have an account?<a href="staffRegister.php">create one</a></p>
		</form>
	</div>
</body>
