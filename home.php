<?php
include 'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$regNo=$_POST['regNo'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$tribe=$_POST['tribe'];
	$parent_contact=$_POST['parent_contact'];
	$marks=$_POST['marks'];

	if(!empty($name) || !empty($regNo) || !empty($contact) || !empty($email) || !empty($gender) || !empty($tribe) || !empty($parent_contact) || !empty($marks)){
		$sql="INSERT INTO student(name,regNo,contact,email,gender) VALUES('$name','$regNo','$contact','$email','$gender','$tribe','$parent_contact','$marks')";
		if($name==''){
			echo "<script>alert('we cannot verify your name');</script>";
		}
		if($marks<230){
			echo "<script>alert('Not eligible to apply...contact admin');</script>";
			exit();
		}
		$result=mysqli_query($conn,$sql);
		if($result){
			echo "<script>alert('successfully applied!!');</script>";
			echo "<script>window.open('success.php','_self');</script>";
		}else{
			echo "<script>alert('Application Failed..Try again');</script>";
			echo "<script>window.open('index.php','_self');</script>";
		}
	}
}
/*if(!$_SESSION['email']){
	header("Location:signin.php");
	exit();
}*/
?>
<style type="text/css">
	body{background: url(image2.jpg) no-repeat;background-size: cover;padding: 0;margin: 0;}
	.heads{display: flex;}
	.heads img{height: 100px;width: 100px;border-radius: 50%;margin-top: 1%;margin-left: 40px;}
	.heads h1{margin-left: 27%;font-weight: 400;font-size: 40px;color:lime;text-transform: uppercase;text-decoration: underline;margin-top: 5%;}
	.cont{background: #fff;}
	.cont label{margin-left: 20px;font-size: 20px;}
	.cont input,.cont select{margin-left: 25px;width: 97%;height: 40px;border-style: groove;border-radius: 5px;}
	.cont .btn{color: #fff;background: darkblue;border-style: none;width: 80px;height: 40px;margin-left: 40%;}


</style>
<body>
    <?php include 'header.php';?>
   <form action="index.php" method="post">
   	<header class="heads">
   		<img src="image1.jpg">
   		<h1>Personal Details</h1>
   	</header><br><br>
   	<div class="cont">
   	<label>Username</label><br>
   	<input type="text" name="name" placeholder="enter username" required><br><br>
   	<label>Registration Number</label><br>
   	<input type="text" name="regNo" placeholder="enter Registration number" required><br><br>
   	<label>Contact</label><br>
    <input type="number" name="contact" placeholder="enter contact" required><br><br>
    <label>Email</label><br>
    <input type="email" name="email" placeholder="enter email" required><br><br>
    <label>Gender</label><br>
    <select name="gender" class="select">
    	<option value="">Select Gender</option>
    	<option value="Male">Male</option>
    	<option value="Female">Female</option>
    	<option value="Others">Others</option>
    </select><br>
    <label>Tribe</label><br>
    <select name="tribe" class="select">
    	<option value="">Select Tribe</option>
    	<option value="Luhya">Luhya</option>
    	<option value="Kikuyu">Kikuyu</option>
    	<option value="Luo">Luo</option>
    	<option value="Kalenjin">Kalenjin</option>
    	<option value="Swahili">Swahili</option>
    	<option value="Kamba">Kamba</option>
    	<option value="Kisii">Kisii</option>
    	<option value="Pokomo">Pokomo</option>
    	<option value="Turkana">Turkana</option>
    	<option value="Mijikenda">Mijikenda</option>
    </select><br>
    <label>Parent/Guardian No.</label><br>
    <input type="number" name="parent_contact" placeholder="enter parent_contact" required><br><br>
    <label>Marks Attained</label>
    <input type="number" name="marks" placeholder="enter marks attained" required><br><br>
    <input type="submit" name="submit" value="save" class="btn">
</div>
   </form>
</body>