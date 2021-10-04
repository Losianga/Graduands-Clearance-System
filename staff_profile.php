<?php
session_start();
include 'connection.php';

if(isset($_POST['edit'])){
	$username=$_POST['username'];
	$staffNo=$_POST['staffNo'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];

	$query="UPDATE staff_signup SET username='$username',pfNo='$pfNo',contact='$contact',email='$email',gender='$gender' WHERE email='".$_SESSION['email']."'";
	$result=mysqli_query($conn,$query);
	if($result){
		echo "<script>alert('Information updated successfully!!');</script>";
		header("location:index.php");
}
$q=mysqli_query($conn,"select * from staff_signup where email='".$_SESSION['email']."'");
$n=  mysqli_fetch_assoc($q);
$email= $n['email'];
}
?>
<title>Update Staff Data</title>
<style type="text/css">
	body{background: url(image2.jpg) no-repeat;background-size: cover;padding: 0;margin: 0;}
	.heads h1{text-align: center;color: lime;font-weight: 400;font-family: sans-serif;}
	.cont{background: #fff;}
	.cont label{margin-left: 20px;font-size: 20px;}
	.cont input,.cont select{margin-left: 25px;width: 97%;height: 40px;border-style: groove;border-radius: 5px;}
	.cont .btn{color: #fff;background: darkblue;border-style: none;width: 80px;height: 40px;margin-left: 40%;}
</style>
    <?php include 'head.php';?>
    <div class="cont">
   		<form action="staff_profile.php" method="post">

   	<header class="heads">
   	   		<h1>Primary Information</h1>
   	</header><br><br>
<table>
	<?php
	$query = mysqli_query($conn,"SELECT * FROM staff_signup");
while($row = mysqli_fetch_array($query)){
?>
   	<label>Username</label><br>
   	<input type="text" name="name" value="<?php echo $row['username'];?>" required><br><br>
   	<label>PF Number</label><br>
    <input type="text" name="pfNo" value="<?php echo $row['pfNo'];?>" required><br><br>
   	<label>Contact</label><br>
    <input type="number" name="contact" value="<?php echo $row['contact'];?>" required><br><br>
    <label>Email</label><br>
    <input type="email" name="email" value="<?php echo $row['email'];?>" required><br><br>
    <label>Gender</label><br>
    <select name="gender" class="select" value="<?php echo $row['gender'];?>">
    	<option value="">Select Gender</option>
    	<option value="Male">Male</option>
    	<option value="Female">Female</option>
    	<option value="Others">Others</option>
    </select><br><br>
    	<input type="submit" name="edit" value="update" class="btn">

   </form>
   </div>
   </table>
   <?php include 'footer.php'?>
   <?php } ?>   