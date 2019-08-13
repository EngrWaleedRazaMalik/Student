<?php
 include 'connect.php';
  $edit_record = $_GET['edit'];
  
   $que="select * from s_reg where u_id='$edit_record'";
   $run=mysqli_query($conn,$que);
   
   
  
  while($row=mysqli_fetch_array ($run) ){
	 $student_name =$row['u_name'];
	 $student_father =$row['u_father'];
	 $student_cnic =$row['u_cnic'];
	 $student_email =$row['u_email'];
	 $student_contact =$row['u_contact'];
	 $student_program =$row['u_program'];
	 $student_session =$row['u_session'];
	 $student_thesis =$row['u_thesis'];
	 $student_supervisor =$row['u_supervisor'];
	 $student_cosupervisor =$row['u_cod'];
	 $student_recieved = $row['u_rec'];
 ?>
  <br><br>
  <table align='center' border='4'  width='100%'>
  <tr>
  <td colspan='12' bgcolor='green'><h2>Your Details Here</h2></td>
  
  
  
  </tr>
  
  
  <tr align='center'>
  <td> Name</td>
  <td> Father Name</td>
  <td> CNIC </td>
   <td> Email </td>
   <td> Contact </td>
   <td> Program</td>
    <td> Session </td>
	 <td> Thesis Title </td>
	  <td> Supervisor </td>
	   <td> Co-Supervisor </td>
	    <td> Recieved By</td>
  </tr>
   <tr align='center'>
  <td> <?php echo $student_name;?></td>
  <td> <?php echo $student_father ;?></td>
  <td> <?php echo $student_cnic;?></td>
  <td> <?php echo $student_email;?></td>
  <td> <?php echo $student_contact;?></td>
  <td> <?php echo $student_program;?></td>
  <td> <?php echo $student_session;?></td>
  <td> <?php echo $student_thesis ;?></td>
  <td> <?php echo $student_supervisor ;?></td>
  <td> <?php echo $student_cosupervisor;?></td>
  <td> <?php echo $student_recieved;?></td>
  
  </tr>
 <?php } ?>