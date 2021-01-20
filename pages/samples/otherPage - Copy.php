<?php
session_start();
require 'conn.php';
$ID     = $_SESSION['user'];
$q       = "SELECT * from personal_information WHERE ID = '" . $ID . "'";
$result  = mysqli_query($conn, $q);
$notPaid = 0;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    <style type="text/css">
    	.table th img, .table td img {
   		width: 200px;
   	 	height: 200px;
    	
		}
		.containerA {
		    background-color: #C5C9B8;
		    margin: 0 auto;
		    overflow: hidden;
		    padding: 10px 0;
		    justify-content: space-around;
		    display: flex;
		    float: none;
		}
	</style>
  </head>
  <body>    
      <div class="containerA" >
        <div style="margin:2px " >    		
    		<div class="card" style="width: fit-content;">              			
				<h1 class="text-center">Student Personal Information</h1>
				<div class="table-responsive">
					<table class="table">    
              				<?php 
              				while ($row = mysqli_fetch_assoc($result)) {
              					$val = $row['birthday_certificate'];
		              			echo" 		              			
		              			<tr>
		              				<td>Photo : </td>
		              				<td><img src='images/photo/". $row['Photo'] ."'></td>
		              			</tr>
		              			<tr>
		              				<td>ID : </td>
		              				<td>". $row['ID'] ."</td>
		              			</tr>
		              			<tr>
		              				<td>First Name: </td>
		              				<td>". $row['FirstName'] ."</td>
		              			</tr>
								<tr>
									<td>Last Name: </td>
									<td>". $row['LastName'] ."</td>
								</tr>
								<tr>
									<td>Email: </td>
									<td>". $row['Email'] ."</td>
								</tr>
								<tr>
									<td>Address: </td>
									<td>". $row['Address'] ."</td>
								</tr>
								<tr>
									<td>City: </td>
									<td>". $row['City'] ."</td>
								</tr>
								<tr>
									<td>DOB: </td>
									<td>". $row['Age'] ."</td>
								</tr>
								<tr>
									<td><b>GPA: </b></td>
									<td><b>". $row['GPA'] ."</b></td>
								</tr>
								<tr>
									<td><b>Student balance: </b></td>
									<td><b>". $row['total_Remained'] ."</b> NIS</td>
								</tr>
								<form method='POST' action='img.php' target='_blank'>
									<tr>
									<td><b>Birthday Certificate: </b></td>
									<input type='hidden' name='BirthdayC' value=". $row['ID'] .">
									<td><input type='submit' name='Birthday' value='See'></td>
								</tr>
								</form>
								<form  method='POST' action='img1.php' target='_blank'>
									<tr>
									<td><b>Identity Card:  </b></td>
									<input type='hidden'  name='IdentityC' value=". $row['ID'] .">
									<td><input type='submit' name='Identity' value='See'></td>
									
								</tr>
								</form>
								";	
							}?> 		
		              		      		
        					</table>
           					 
				</div>
			</div>
		</div>
		<div style="margin:2px " >
            		<div class="card" style="width: fit-content;">              			
                		<h1 class="text-center">Student Grades </h1>
                		<div class="table-responsive">              	
              			<?php 
              				for ($i=1; $i <5 ; $i++) { 
							for ($j=1; $j <3 ; $j++) { 
								$q1 = "SELECT * from Grades WHERE ID = '".$ID."' and year = '".$i."' and semester = '".$j."'";
								$result1 = mysqli_query($conn,$q1);
								if (mysqli_num_rows($result1) > 0) {
									$q2 = "SELECT ROUND(AVG(course_grade) ,2) FROM grades WHERE ID = '".$ID."' and year = '".$i."' and semester = '".$j."'";
									$result2 = mysqli_query($conn,$q2);
									$row2 = mysqli_fetch_row($result2);
									
									echo "<table class='table'>";    
									echo "<tr><td><h2> Year $i</h2></td> <td><h2>Semester $j</h2></td>";
									echo "<tr><td>Course Name: </td> <td>Course Grade: </td>";
									echo "</tr>";
									while ($row = mysqli_fetch_assoc($result1)) {			
										echo "<tr>";
										echo "<td>". $row['course_name'] ."</td> <td>". $row['course_grade'] ."</td> ";
										echo "</tr>";								
									}
									echo "<tr>";
									echo "<td><b>GPA: </b></td> <td><b>". $row2[0] ."</b></td> ";
									echo "</tr>";						
					}}}?> 
              						</table>
	            				
					</div>
				</div>
		</div>
		<div style="margin:2px " >    		
            		<div class="card" style="width: fit-content;">              			
                		<h1 class="text-center">Student Financial Data</h1>
                		<div class="table-responsive">              	
              			<?php               		
	              		for ($i=1; $i <5 ; $i++) { 
						for ($j=1; $j <3 ; $j++) { 
							$q1 = "SELECT * from financial_data WHERE ID = '".$ID."' and year = '".$i."' and semester = '".$j."'";
							$result1 = mysqli_query($conn,$q1);
							if (mysqli_num_rows($result1) > 0) {								
							echo "<table class='table' class='invisible-scrollbar'>";    
							echo "<tr><td><h2> Year $i</h2></td> <td><h2>Semester $j</h2></td>";
							echo "<tr><td>Total Amount: </td> <td>Paid Amount: </td><td><b>Remained Amount: </b></td>";
							echo "</tr>";
							while ($row = mysqli_fetch_assoc($result1)) {								
								echo "<tr>";
								echo "<td>". $row['total_amount'] ."</td> <td>". $row['paid_amount'] ."</td><td><b>". $row['Remained_amount'] ."</b></td> ";
								echo "</tr>";								
						}
						}
						}
						}?>  
              	     		
            					</table>
	           			 	
				</div>
			</div>
		</div>
	</div>

    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
  </body>
</html>