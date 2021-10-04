<?php
session_start();
include 'connection.php';
if(isset($_POST['send'])){
	$username=mysqli_escape_string($conn,$_POST['username']);
	$email=mysqli_escape_string($conn,$_POST['email']);
	$message=mysqli_escape_string($conn,$_POST['message']);

		/*if($username==''){
						echo "<script>alert('we cannot validate your name');</script>";
		}*/
		if(strlen($message)>100){
			echo "<script>alert('the message is too long!!');</script>";
		}
     $sql=$conn->prepare("INSERT INTO feedback(username,email,message,time) VALUES(?,?,?,?)");
     $sql->bind_param("ssss",$username,$email,$message,time());
     $result=$sql->execute();
		if($result){
			echo "<script>window.open('success.php','_self');</script>";
		}else{
			echo "<script>alert('message not delivered..try again to send');</script>";
			echo "<script>window.open('feedback.php','_self');</script>";
		}
}
/*if(!$_SESSION['email']){
	header("location:signin.php");
}*/
?>
<style type="text/css">
body{padding: 0;margin: 0;background: url(image1.jpg) no-repeat;background-size: cover;}
   .container{background: #fff;width: 400px;height: 500px;border-radius: 10px;margin-top: 2%;margin-left: 35%;}
   .container .head{background: blue;height: 100px;width: 100%;margin-left:0px;}
   .container .head p{color: #fff;font-weight: 400;font-size: 30px;margin-left: 25%;}
   .container input{margin-left: 20px;width: 90%;height: 40px;}
   .container textarea{margin-left: 20px;border-radius: 10px;overflow: hidden;width: 90%;height: 200px;font-size: 20px;}
   .container .btn{margin-left: 40%;width: 70px;height: 40px;background:blue;color: #fff;border-style:none;}
</style>
<body>
	<?php include 'header.php';?>
	<div class="container">
	<form action="feedback.php" method="post">
			<header class="head">
				<p>Send Feedback</p>
			</header><br>
			<input type="text" name="username" placeholder="enter your name" required><br><br>
			<input type="email" name="email" placeholder="enter email address" required><br><br>
			<textarea cols="10" rows="40" placeholder="type here" name="message" type="text" required></textarea><br><br>
			<input type="submit" name="send" value="send" class="btn">
		</div>
	</form>
</body>