<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=$_GET['type'];
		
	if($type=='delete'){
		$id=$_GET['id'];
		$delete_sql="delete from student_signup where id='$id'";
		mysqli_query($conn,$delete_sql);
	}
	if($type=='approve'){
		$id=$_GET['id'];
		$email=$_GET['email'];
		$message=$_GET['message'];
		$delete_sql="delete from student_signup where id='$id'";
		mysqli_query($conn,$delete_sql);
		
		if($result){
			echo "<script>window.open('success.php','_self');</script>";
		}else{
			echo "<script>alert('message not delivered..try again to send');</script>";
			echo "<script>window.open('adminDashboard.php','_self');</script>";
		}
	}
}

$sql="select * from student_signup order by name asc";
$res=mysqli_query($conn,$sql);
?>
<div class="content pb-0">
	<div class="orders">
	   <div class="row">
		  <div class="col-xl-12">
			 <div class="card">
				<div class="card-body"><br><br>
				    <form action="generate.php" method="POST">
				   	<button class='btn btn-success' type="submit" name="btn_pdf">Generate</button>
				   </form>
				   <h4 class="box-title" margin="40px">STUDENTS</h4>
				</div>
				<div class="card-body--">
				   <div class="table-stats order-table ov-h">
					  <table class="table ">
						 <thead>
							<tr>
							   <th class="serial">#</th>
							   <th>ID</th>
							   <th>USERNAME</th>
							   <th>EMAIL</th>
							   <th>REG NO</th>
							   <th>CONTACT</th>
							   <th>GENDER</th>
							   <th></th>
							</tr>
						 </thead>
						 <tbody>
							<?php 
							$i=1;
							while($row=mysqli_fetch_assoc($res)){?>
							<tr>
							   <td class="serial"><?php echo $i?></td>
							   <td><?php echo $row['id']?></td>
							   <td><?php echo $row['name']?></td>
							   <td><?php echo $row['email']?></td>
							   <td><?php echo $row['regNo']?></td>
							   <td><?php echo $row['contact']?></td>
							   <td><?php echo $row['gender']?></td>
							   <td>
								<?php
								echo "<span class='badge badge-success'><a href='?type=approve&id=".$row['id']."'>Approve</a></span>";
								echo "<span class='badge badge-delete'><a href='?type=delete&id=".$row['id']."'>Delete</a></span>";
								
								?>
							   </td>
							</tr>
							<?php } ?>
						 </tbody>
					  </table>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
</div>
<?php
require('footer.php');
?>