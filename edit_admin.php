<?php
require('top.inc.php');

$categories='';
$msg='';
if(isset($_GET['id']) && $_GET['id']!=''){
	$id=$_GET['id'];
	$res=mysqli_query($conn,"select * from admin where id='$id'");
	$check=mysqli_num_rows($res);
	if($check>0){
		$row=mysqli_fetch_assoc($res);
		$username=$row['username'];
	}else{
		header('location:admin_management.php');
		die();
	}
}

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$res=mysqli_query($conn,"select * from admin where username='$username'");
	$check=mysqli_num_rows($res);
	if($check>0){
		if(isset($_GET['id']) && $_GET['id']!=''){
			$getData=mysqli_fetch_assoc($res);
			if($id==$getData['id']){
			
			}else{
				$msg="CATEGORIES ALREADY EXIST";
			}
		}else{
			$msg="CATEGORIES ALREADY EXIST";
		}
	}
	
	if($msg==''){
		if(isset($_GET['id']) && $_GET['id']!=''){
			mysqli_query($con,"update admin set username='$username' email='$email' contact='$contact' where id='$id'");
		}else{
			mysqli_query($con,"insert into admin(username,email,contact) values('$username','$email','$contact')");
		}
		header('location:admin_management.php');
		die();
	}
}
?>
<div class="content pb-0">
            <div class="animated fadeIn">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header"><strong>ADMIN FORM</strong> </div>
                        <form method="post">
							<div class="card-body card-block">
							   <div class="form-group">
									<label for="admin" class=" form-control-label">Admin</label>
									<input type="number" name="contact" placeholder="ENTER USERNAME" class="form-control" required value="<?php echo $contact?>"><br>
									<input type="number" name="contact" placeholder="ENTER EMAIL" class="form-control" required value="<?php echo $email?>"><br>
									<input type="number" name="contact" placeholder="ENTER CONTACT" class="form-control" required value="<?php echo $contact?>"><br>
								</div>
							   <button id="payment-button" name="submit" type="submit" class="btn btn-lg btn-info btn-block">
							   <span id="payment-button-amount">SUBMIT</span>
							   </button>
							   <div class="field_error"><?php echo $msg?></div>
							</div>
						</form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
<?php
require('footer.php');
?>