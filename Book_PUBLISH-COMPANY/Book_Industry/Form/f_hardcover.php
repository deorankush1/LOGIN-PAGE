<?php
         include_once '/var/www/html/AnkushDeora/Book_Industry/db.php';
		 use db\DB;
         ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>hardcover</title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	</head>
	<body>

		<div class="container">
			<div class="row">
				<div class="col-md-12">
				<form action="">
					<br><label> Author Detail </label></br>
					<select class="form-control" name="author_name">

					<?php

                      		$query = "SELECT fname,lname from person where person_type='Author'";
	            			$result = mysqli_query($conn1,$query);

	            			while ($row = mysqli_fetch_assoc($result)) {
	            			
	            			
	            		
	            			?>
							
							<option value="<?php echo $row['fname']." ".$row['lname']; ?>"><?php echo $row['fname']." ".$row['lname']; ?></option>
	            			<?php
	            			}
					?>
	            	</select>

	            	Book Size   
	            	<div class=form-group><input class="form-control" type = "text" placeholder = "Enter Book Size">
	            	</div> 
	   		Recorded Voice 
	   		<div class=form-group><input class="form-control" type = "text" placeholder="Enter Recorded Voice">
	   		</div>
	   		Book Cost     <div class=form-group><input class="form-control" type = "int" placeholder="Enter Book Cost"></div>
	   		Completion Time <div class=form-group><input class="form-control" type = "text" placeholder="Enter Completion Time"></div>
		
		

			<div class=form-group> <input class="form-control btn btn-info btn-block" type="Submit" value='submit' name='submit'></div>
				</form>
			</div>
		</div>
	</div>
	<!-- <br><label> Publisher Detail </label></br>
        		
        		<div class="row">
        			
        		</div>
        
        		<br><label> Illustrartor Detail </label></br>
        		<div class="row">
        		 </div>
        
        <br><label> Editor Details </label><br>
        
        
        		<div class="row">
        		</div>
        
        <br><label> Book Detail </label></br> -->
		
<!-- 
		<div class="container">
			<div class="row">
			<form action="">
			<br><label> Author Detail </label></br>
			
				
	           		<select class="form-control" name="author_name">
					
	            </select>
	           
	     <br><br>
			

		

			Book Size   <div class=form-group><input class="form-control" type = "text" placeholder = "Enter Book Size"></div> 
	   		Recorded Voice <div class=form-group><input class="form-control" type = "text" placeholder="Enter Recorded Voice"></div>
	   		Book Cost     <div class=form-group><input class="form-control" type = "int" placeholder="Enter Book Cost"></div>
	   		Completion Time <div class=form-group><input class="form-control" type = "text" placeholder="Enter Completion Time"></div>
		
		

			<div class=form-group> <input class="form-control btn btn-info btn-block" type="Submit" value='submit' name='submit'></div>
		</form>
		</div>
		 </div> -->
	</body>
</html>