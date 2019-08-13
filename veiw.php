<html>
<!--start of form for Veiw  of a post-->
 <head>
  <title>Vewing The Record</title>

  </head>
  
  <body>
  <a href='user_registration.php'>Insert New Record</a>
  <a href='Logout'>LogOut</a>
 <center><font color='red' size='4'><?php echo @$_GET['deleted'];?></font></center>
  <table align='center'width='1000' border='4'>
  
  <tr>
  <td align='center'bgcolor='green' colspan='20'><h1> Veiwing All The Records</h1></td>
  </tr>
  
  <tr align='center'>
  <th>Serial Number</th>
  <th>Student Name</th>
  <th>Father Name</th>
  <th> Student CNIC</th>
  <th>Student Email</th>
  
  <th>Delete</th>
  <th>Edit</th>
  <th>Details </th>
  
  </tr>
  
  <tr align='center'>
  
  
  <?php
   include 'connect.php';
   $que="select * from s_reg order by 1 DESC";
   $run=mysqli_query($conn,$que);
   
   $i=1;
  
  while($row=mysqli_fetch_array ($run) )
   {
	   $u_id = $row[0];
       $u_name=$row[1];
	   $u_father=$row[2];
	   $u_cnic=$row[3];
	   $u_email=$row[4];
	  
	   
	   
	   
	   
	   
	  
  ?>
  
  <td><?php echo $i;$i++;?></td>
  <td><?php echo $u_name;?></td>
  <td><?php echo $u_father;?></td>
  <td><?php echo $u_cnic;?></td>
  <td><?php echo $u_email;?></td>
  
  <td><a href='delete.php ?del= <?php echo $u_id; ?>'>Delete</a></td>
  <td><a href='edit.php ?edit= <?php echo $u_id; ?>'>Edit</a></td>
  <td><a href='detail.php?edit= <?php echo $u_id; ?>'>Details</a></td>
  </tr>
  <?php  }?> 
  
  
  
  
  
  
  </table><br><br><br><br>
  
  
 
  
  
  </table>

 
 
  </body>
  
  </html>