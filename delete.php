<?php
include 'connect.php';

 $delete_record=$_GET['del'];
 
 $query = "delete from s_reg where u_id='$delete_record'";
 
 if(mysqli_query($conn,$query)){
	 
	 echo"<script>window.open('veiw.php?deleted=record has been deleted!','_self')</script>";
	 
 }
 
?>