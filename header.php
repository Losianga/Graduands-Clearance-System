	<style type="text/css">
		.head{background: #000;color: orange;width: 98%;height: 100px;margin-top: 0.5%;margin-left: 10px;display: flex;}
		.head img{width: 80px;height: 80px;border-radius: 50%;margin: 10px;animation: animate 5s linear infinite;}
		@keyframes animate{
			0%{transform: rotate(360deg);}
			25%{transform: rotate(216deg);}
			50%{transform: rotate(144deg);}
			75%{transform: rotate(72deg);}
			100%{transform: rotate(0deg);}
		}
	.head p{float:left;font-size: 30px;font-weight: 400;margin-left: 200px;}
	.head .links ul{list-style: none;display: inline-block;}
	.head .links ul li{display: inline-block;padding: 10px;margin-top: 3%;}
	.head .links ul li a{background: orange;color: #000;text-decoration: none;display:block;padding:10px;border-radius: 10px;}
	.head .links ul li a:hover{color: green;background: #fff;}
	.head .logout ul{list-style: none;display: inline-block;float: right;}
	.head .logout ul li{display: inline-block;}
	.head .logout ul li a{background: green;color: #fff;text-decoration: none;display: inline-block;padding: 10px;border-radius: 10px;}
	</style>
	<body>
	<header class="head">
		<img src="image1.jpg">
		<p>welcome to Online Clearance</p>
		<div class="links">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="Clearance_Panel.php">Request Clearance</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="profile.php">Your Profile</a></li>
			</ul>
		</div>
		<div class="logout">
			<ul>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</header>
</body>
