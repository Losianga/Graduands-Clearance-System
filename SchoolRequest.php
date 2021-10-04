<?php
include 'connection.php';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$regNo=$_POST['regNo'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$school=$_POST['school'];

	if(!empty($name) || !empty($regNo) || !empty($contact) || !empty($email) || !empty($gender)){
		$sql="INSERT INTO school_request(name,regNo,contact,email,gender,school) VALUES('$name','$regNo','$contact','$email','$gender','$school')";
		if($name==''){
			echo "<script>alert('we cannot verify your name');</script>";
		}
		$result=mysqli_query($conn,$sql);
		if($result){
			echo "<script>alert('successfully applied!!');</script>";
			//echo "<script>window.open('success.php','_self');</script>";
		}else{
			echo "<script>alert('Application Failed..Try again');</script>";
			echo "<script>window.open('SchoolRequest.php','_self');</script>";
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
	.cont .btn{color: #fff;background: darkblue;border-style: none;width: 180px;height: 40px;margin-left: 40%;}
</style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<body>
    <?php include 'header.php';?>
   <form action="SchoolRequest.php" method="post">
   	<header class="heads">
   		<img src="image1.jpg">
   		<h1>Student School Clearance</h1>
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
    </select><br><br>
    <label>School/Faculty</label><br>
    <select name="school" class="select">
    	<option value="">Select Faculty</option>
    	<option value="SOBE">SOBE</option>
    	<option value="SCAI">SCAI</option>
    	<option value="FESS">FESS</option>
    	<option value="FS">FS</option>
    	<option value="SOL">School of Law</option>
    	<option value="SON">School of nursing</option>
    </select><br><br>
        <input type="submit" name="submit" value="Request Clearance" class="btn" onclick="messages">
</div>
   </form>

   <script type="text/javascript">
   	function messages(){
   		swal("School Clearance!", "School Clearance requst sent", "success");
   	}
   </script>
</body>

