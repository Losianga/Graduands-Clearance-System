<?php
require('connection.php');
require('function.php');
?>
<!doctype html>
<html class="no-js" lang="">
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>ADMIN DASHBOARD PAGE</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   </head>
   <body>
      <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">MENU</li>
				   <li class="menu-item-has-children dropdown">
                     <a href="admin_management.php" > ADMIN MANAGEMENT </a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="student_details.php"> STUDENT MANAGEMENT </a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="ViewClearance.php" > CLEARANCE MANAGEMENT </a>
                  </li>
                  <li class="menu-item-has-children dropdown">
                     <a href="staffDetails.php" > STAFF MANAGEMENT </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="contact_us.php" > CONTACT US</a>
                  </li>
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left" padding="20px">
               <div class="navbar-header">
                  <a class="navbar-brand" href="adminDashboard.php"><img src="man.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="adminDashboard.php"><img src="man.png" alt="Logo" height="20px"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WELCOME Admin?></a>
                     <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="adminLogout.php"><i class="fa fa-power-off"></i>LOGOUT</a>
                     </div>
                  </div>
               </div>
            </div>
         </header>