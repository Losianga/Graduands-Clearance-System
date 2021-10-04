<style type="text/css">
	.body a{text-decoration: none;}
	.body h1{font-size: 30px;font-weight: 400;color: blue;text-align: center;}
	.body p{font-size:;font-family: sans-serif;margin-left: 20px;line-height: 20px;letter-spacing: 3px;font-weight: 400;}
	.body .buttons{display: flex;}
	.body .buttons .btn1{background: orange;color: #fff;margin-left: 10%;width:300px;height: 30px;padding: 20px;display: inline-block;text-align: center;border-radius: 20px;}
	.body .buttons .btn2{background: blue;color: #fff;margin-left: 10%;width:300px;height: 30px;padding: 20px;display: inline-block;text-align: center;border-radius: 20px;}
	.body .buttons .btn3{background: blue;color: #fff;margin-left: 10%;width:300px;height: 30px;padding: 20px;display: inline-block;text-align: center;border-radius: 20px;}
	ul{list-style: none;display: inline-block;}
	ul li{list-style: none;display: inline-block;padding: 10px 25px;background: orange;}
	ul li:hover,ul li a:hover{background: #fff;color: orange;}
	ul li a{text-decoration: none;color: #fff;}
	th{color: #fff;background: gray;padding: 10px;}
    td{text-align: center;font-size: 15px;}
    td a{background: orange;color: #fff;display: inline-block;padding: 10px;text-decoration: none;}
</style>
<body>
	<?php include 'headers.php';?>
	<div class="body">
		<h1>UNIVERSITY COLLEGE ONLINE CLEARANCE PORTAL</h1>
		<p>Congratulations on taking the first step towards achieving your educational goals.<br>

            In order to keep track of your application, we need to first set you up with an account. Please use the <a href="account">REGISTER</a> <br>feature to set up your account.<br>

You will be required to enter some basic information, including your email address and to choose a password. We will then send you an email <br>to the address you entered, so that we can validate your account. When you have clicked on the validation link (sent to you in the <br>email), you will be able to log in to the application system using the "Login" box below<br>

For instructions on how to apply click <a href="apply.pdf">HERE</a>

</p>
<div class="buttons">
<a class="btn1" href="login.php">Student</a>
<a class="btn2" href="adminLogin.php">Administrator</a>
<a class="btn3" href="staffLogin.php">Department</a>
	</div><br><br><br>
			
	<?php include 'footer.php';?>
</body>