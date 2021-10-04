<style type="text/css">
	body{background: url(image1.jpg) no-repeat;background-size: cover;}
	.container{margin-top:2%;height: 450px;width: 400px;background: #fff;margin-left: 35%;}
	.hd{color: #fff;background: blue;width: 100%;height: 100px;text-align: center;font-weight: 400;font-size: 30px;}
	.container label{font-size: 20px;margin-left: 15px;}
	.container input{margin-left: 15px;width: 90%;height: 40px;}
	.container p{font-size: 20px;margin-left: 20px;}
	.container .btn{width: 30%;margin-left: 130px;background: blue;color: #fff;border-style: none;border-radius: 5px;margin-top: 30px;}
	.container a{text-decoration: none;}
	.body .buttons{display: flex;}
	.container button{margin-top: 20px;}
	.container .school{background: orange;color: #fff;margin-left: 5%;width:90%;height: 70px;padding: 20px;display: inline-block;text-align: center;border-radius: 5px;border-style: none;}
	.container .school a{color: white;}
	.container .administration{background: blue;color: #fff;margin-left: 5%;width:90%;height: 70px;padding: 20px;display: inline-block;text-align: center;border-radius: 5px;border-style: none;}
	.container .administration a{color: white;}
	.container .finance{background: gray;color: #fff;margin-left: 5%;width:90%;height: 70px;padding: 20px;display: inline-block;text-align: center;border-radius: 5px;border-style: none;}
	.container .finance a{color: white;}
	.container .health{background: lightblue;color: #fff;margin-left: 5%;width:90%;height: 70px;padding: 20px;display: inline-block;text-align: center;border-radius: 5px;border-style: none;}
	.container .health a{color: white;}
</style>
<body>
	<?php include 'header.php';?>
	<div class="container">
		<div class="hd">
         <p>Choose Clearance Department</p>
		</div><br>
		<button class="school"><a href="SchoolRequest.php">School</a></button>
		<button class="administration"><a href="AdminRequest.php">Administration</a></button>
		<button class="finance"><a href="FinanceRequest.php">Finance</a></button>
		<button class="health"><a href="ClinicRequest.php">Clinic</a></button>
	</div>
</body>
