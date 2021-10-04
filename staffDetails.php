<?php
require('top.inc.php');
if(isset($_GET['type']) && $_GET['type']!=''){
	$type=$_GET['type'];
		
	if($type=='delete'){
		$id=$_GET['id'];
		$delete_sql="delete from staff_signup where id='$id'";
		mysqli_query($conn,$delete_sql);
	}
}

$sql="select * from staff_signup order by name asc";
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
				   <h4 class="box-title" margin="40px">STAFF</h4>
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