<?php
include 'connect.php';
$edit_record = $_GET['edit'];

$query = "select * from s_reg where u_id='$edit_record'";

$run=mysqli_query($conn,$query);

while($row=mysqli_fetch_array ($run)){
	
        $s_id=$row['u_id'];
		$s_name= $row['1'];
		$s_father= $row['2'];
		$s_Cnic=$row['3'];
		$s_email=$row['4'];
		$s_contact=$row['5'];
		$s_program=$row['6'];
		$s_session=$row['7'];
		$s_thesis=$row['8'];
		$s_supervisor=$row['9'];
		$s_cosupervisor=$row['10'];
		$s_recieved=$row['11'];
		
		
		
		
		
}


?>

<html>
<!--start of form for insertion of a post-->
 <head>
  <title>Update Registration form </title>

  </head>
  
  <body>
  <form method="post" action="edit.php?edit=<?php echo $edit_record; ?> ">
  
  <table align="center" border="10" width="700">
   <tr>
   <td align="center" colspan="5" bgcolor="Yellow"><h1>Updating Form</h1></td>
   </tr> 
   
  <tr>
   <td align="right">Student Name:</td>
   <td><input type="text"  name="user_name1" value=' <?php echo$s_name;?>'></td>
   </tr>
   
   <tr>
   <td align="right">Father name:</td>
   <td><input type="text"  name="father_name1" value=' <?php echo$s_father;?> '></td>
   </tr>
   
   <tr>
   <td align="right">Student CNIC:</td>
   <td><input type="text" name="Student_cnic1"  value=' <?php echo$s_Cnic;?> '  ></td>
   </tr>
   
   <tr>
   <td align="right">Student Email:                                                    
   </td>
   <td><input type="text" name="Student_email1" value='<?php echo$s_email;?>'></td>                  
   </tr
   
   <tr>
   <td align="right">Contact No:</td>
   <td> <input type="text" name="Student_contact1" value='<?php echo$s_contact;?>'></td>    
   </tr>
   
   <tr>
   <td align="right">Program </td>     
   <td>
   <select name="u_program"  value='<?php echo$s_program;?>'>

   <option     value='<?php echo$s_program;?>'>Select Program </option>
     <option>MSC </option>
     <option>BS</option>
	 <option>M.PHILL</option>
	 <option>MS</option>
	 <option>PHD </option>
   </select>
   </td>
   </tr>
   
   
   
   <tr>
   <td align="right">Student Session</td>
   <td> <input type="text" name="Student_session1"value='<?php echo$s_session;?>'></td>
   </tr>
   
   <tr>
   <td align="right">Thesis Title:</td>
   <td> <input type="text" name="thesis_title1"value='<?php echo$s_thesis;?>'></td>
   </tr>
   
   
   <tr>
   <td align="right">Supervisor:</td>
   <td> <input type="text" name="Student_Supervisor1" value='<?php echo$s_supervisor;?>'></td>
   </tr>
  
   <tr>
   <td align="right">Co Supervisor:</td>
   <td> <input type="text" name="Co_Supervisor1" value='<?php echo$s_cosupervisor;?>'></td>
   </tr>
   
   <tr>
   <td align="right">Recieved By:</td>
   <td> <input type="text" name="Rec_by1" value='<?php echo$s_recieved;?>'></td>
   </tr>
   
  
   
   
   
   
   <tr>
   <td align="center" colspan="6"><input type="submit" name="update"value="Update"</td>
   </tr>
   
   
  </table>
  </form>
  </body>
  </html>
  
  <?php
  
 if(isset($_POST['update'])){
	 
	 
	 $student_name = $_POST['user_name1'];
	 $student_father = $_POST['father_name1'];
	 $student_cnic = $_POST['Student_cnic1'];
	 $student_email = $_POST['Student_email1'];
	 $student_contact = $_POST['Student_contact1'];
	 $student_program = $_POST['u_program'];
	 $student_session = $_POST['Student_session1'];
	 $student_thesis = $_POST['thesis_title1'];
	 $student_supervisor = $_POST['Student_Supervisor1'];
	 $student_cosupervisor = $_POST['Co_Supervisor1'];
	 $student_recieved = $_POST['Rec_by1'];
	
	 
	 $query1 ="update s_reg set u_name='$student_name',u_father='$student_father',u_cnic='$student_cnic',u_email='$student_email',u_contact='$student_contact',u_program='$student_program',u_session='$student_session',u_thesis='$student_thesis',u_supervisor='$student_supervisor', u_cod='$student_cosupervisor',u_rec='$student_recieved'where u_id='$edit_record'";
	 
	 if(mysqli_query($conn,$query1)){
		

    echo "<script>window.open('veiw.php?updated=Record Updated..!','_self')</script>";		
		 
		 
		 
		 
	 }
 
	 
 }
  
  ?>
  
  
  
  
  
  
  
  
  
  
  
  