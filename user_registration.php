<html>
<!--start of form for insertion of a post-->
 <head>
  <title>Student Registration Form</title>

  </head>
  
  <body>
  <form method="post" action="user_registration.php" enctype="multipart/form-data">
  
  <table align="center" border="10" width="700">
   <tr>
   <td align="center" colspan="5" bgcolor="Yellow"><h1>Student Registration</h1></td>
   </tr> 
   
  <tr>
   <td align="right">Student Name:</td>
   <td><input type="text"  name="user_name" size="30"</td>
   </tr>
   
   <tr>
   <td align="right">Father name:</td>
   <td><input type="text"  name="father_name"size="30"</td>
   </tr>
   
   <tr>
   <td align="right">Student CNIC:</td>
   <td><input type="text" name="Student_cnic"size="30"</td>
   </tr>
   
   <tr>
   <td align="right">Student Email:</td>
   <td><input type="text" name="Student_email"size="30"</td>
   </tr
   
   <tr>
   <td align="right">Contact No:</td>
   <td> <input type="text" name="Student_contact"size="30"</td>
   </tr>
   
   <tr>
   <td align="right">Program</td>
   <td>
   <select name="u_program">

   <option>Select Program </option>
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
   <td> <input type="text" name="Student_session"size="30" </td>
   </tr>
   
   <tr>
   <td align="right">Thesis Title:</td>
   <td> <input type="text" name="thesis_title" size="50"</td>
   </tr>
   
   
   <tr>
   <td align="right">Supervisor:</td>
   <td> <input type="text" name="Student_Supervisor"size="30"</td>
   </tr>
  
   <tr>
   <td align="right">Co Supervisor:</td>
   <td> <input type="text" name="Co_Supervisor"size="30"</td>
   </tr>
   
   <tr>
   <td align="right">Recieved By:</td>
   <td> <input type="text" name="Rec_by"size="30"  </td>
   </tr>
   
   
   
   
   
   
   <tr>
   <td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"</td>
   
   </tr>
   
   
  </table>
  </form>
  </body>
  </html>
  
  <?php
  
   $conn =mysqli_connect("localhost","root","");
   $db =mysqli_select_db($conn,'students');
   if(isset($_POST['submit'])){
           $student_name=$_POST['user_name'];
           $student_father=$_POST['father_name'];
           $student_Cnic=$_POST['Student_cnic'];
		   $student_Email=$_POST['Student_email'];
	       $student_contact=$_POST['Student_contact'];
		   
	  	   $student_Program=$_POST['u_program'];
          
	       $student_Session=$_POST['Student_session'];
	  	    $student_Thesis=$_POST['thesis_title'];
	        $student_supervisor=$_POST['Student_Supervisor'];
		    $student_cosupervisor=$_POST['Co_Supervisor'];
			$student_recieved=$_POST['Rec_by'];
			
			
	
		$query="insert into s_reg(u_name,u_father,u_cnic,u_email,u_contact,u_program,u_session,u_thesis,u_supervisor,u_cod,u_rec)values('$student_name','$student_father','$student_Cnic','$student_Email','$student_contact','$student_Program','$student_Session','$student_Thesis','$student_supervisor','$student_cosupervisor','$student_recieved')";
			if (mysqli_query($conn,$query)){
			echo"This Post Has Been Published Successfully";
			 }
   }
		   
				 
  ?>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  