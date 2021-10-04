<?php 
include 'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$pfNo=$_POST['pfNo'];
	$contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$password=$_POST['password'];
	$password=md5("password");

	if(!empty($name) || !empty($email) || !empty($pfNo) || !empty($contact) || !empty($gender) || !empty($password)){
		$sql="INSERT INTO staff_signup(name,email,pfNo,contact,gender,password) VALUES('$name','$email','$pfNo','$contact','$gender','$password')";
		
		$result=mysqli_query($conn,$sql);
		if($result){
			echo "<script>alert('successfully applied!!');</script>";
			echo "<script>window.open('staffLogin.php','_self');</script>";
		}else{
			echo "<script>alert('Application Failed..Try again');</script>";
			echo "<script>window.open('staffRegister.php','_self');</script>";
		}
	}
}
?>
<head>
	<title>create account</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{background-image:url(image1.jpg);}
		.container{background: white;color: black;height: 600px;width: 450px;margin-left: 350px;margin-top: 30px;border-radius: 10px;}
        .head{background: blue;color: red;display: flex;height: 100px;width: 450px;border-top-right-radius: 10px;border-top-left-radius: 10px;}
        .head img{height: 80px;width: 80px;border-radius: 50px;margin: 10px;-webkit-animation:brian 1s infinite;}
        @-webkit-keyframes brian{
        	0%{transform: rotateY(360deg);}
        }
        .head h1{font-size: 20px;float: right;text-align: center;padding: 15px;color: white;}
        input{width: 400px;padding: 10px;height: 40px;margin-left: 15px;}
        select{width: 400px;padding: 10px;height: 40px;margin-left: 15px;}
        .btn{border-radius:0px;background: blue;width: 70px;height: 40px;border:none;margin-left: 180px;color: white;}
        p {color: blue;text-decoration: none;text-align: center;}
	</style>
</head>
<body>
<div class="container">
	<form action="staffRegister.php" method="post">
<header class="head">
	<img src="logo.jpg">
	<h1>WELCOME TO ONLINE CLEARANCE SYSTEM</h1>
</header><br><br>
	<input type="text" name="name" placeholder="enter username" required><br><br>
	<input type="text" name="email" placeholder="enter email" required><br><br>
	<input type="text" name="pfNo" placeholder="PF Number" required><br><br>
	<input type="number" name="contact" placeholder="Phone Number" required><br><br>
	<select name="gender" class="select">
    	<option value="">Select Gender</option>
    	<option value="Male">Male</option>
    	<option value="Female">Female</option>
    	<option value="Others">Others</option>
    </select><br><br>
	<input type="password" name="password" placeholder="enter password" required><br><br>
	<input type="submit" name="submit" value="Sign Up" class="btn"><br><br>
	<p><a href="staffLogin.php">Already have an account?Signin</a></p>
</form>	
</div>
</body>