<?php
/*	Creating Students’ resource
	Reading Students’ resource
	updating and deleting students.

	CREATE TABLE `studentdb`.`students` ( `studentID` INT NOT NULL AUTO_INCREMENT , `firstName` VARCHAR(20) NOT NULL , `lastName` VARCHAR(20) NOT NULL , `address` TEXT NOT NULL , `age` INT NOT NULL , PRIMARY KEY (`studentID`)) ENGINE = InnoDB;
	*/
	session_start();

	function connectDB(){
		
		// Create connection
		$link = new mysqli('designoninc.com', 'designon', 'a8z8FeYu59', 'designon_student_db');
		return $link;
		// Check connection
		if ($link->connect_error) {
		    die("Connection failed: " . $link->connect_error);
		}
	}

	function CreateStudent($fname, $lname, $address, $age){
		$link = connectDB();
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($link, "INSERT INTO students (firstName, lastName, address, age) VALUES (? , ? , ? , ?) ")) {
		    
		    /* bind parameters for markers */
		    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $address, $age);

		    /* execute query */
		   
		    if (mysqli_stmt_execute($stmt)) {
		        
		        echo 'true';

		    }
		    else{
		        echo 'false';
		    }
		    
		    /* close statement */
		    mysqli_stmt_close($stmt);
		}

		/* close connection */
		mysqli_close($link);
	}
	function deleteStudent($id){
		$link = connectDB();
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($link, "DELETE FROM `students` WHERE `studentID` = ? ")) {
		    
		    /* bind parameters for markers */
		    mysqli_stmt_bind_param($stmt, "s", $id);

		    /* execute query */
		   
		    if (mysqli_stmt_execute($stmt)) {
		        
		        return 'true';

		    }
		    else{
		        return 'false';
		    }
		    
		    /* close statement */
		    mysqli_stmt_close($stmt);
		}

		/* close connection */
		mysqli_close($link);
	}
	function updateStudent($id,$fname, $lname, $address, $age){
		$link = connectDB();
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($link, "UPDATE students SET firstName = ?, lastName = ?, address = ?, age = ? WHERE studentID = ? ")) {
		    
		    /* bind parameters for markers */
		    mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $address, $age, $id);

		    /* execute query */
		   
		    if (mysqli_stmt_execute($stmt)) {
		        
		        return 'true';

		    }
		    else{
		        return 'false';
		    }
		    
		    /* close statement */
		    mysqli_stmt_close($stmt);
		}

		/* close connection */
		mysqli_close($link);
	}
	function getStudentDetails($id){
		$link = connectDB();
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($link, "SELECT * FROM students WHERE studentID = ? ")) {
		
	    /* bind parameters for markers */
	    mysqli_stmt_bind_param($stmt, "s", $id);

	    /* execute query */
	    mysqli_stmt_execute($stmt);

	    /* bind result variables */
	    mysqli_stmt_bind_result($stmt, $id, $firstName, $lastName, $address, $age);

	    /* fetch value */
	   	
	   	
		    if (mysqli_stmt_fetch($stmt)) {
		    	$details = array($id, $firstName, $lastName, $address, $age);
		    	return json_encode($details);
		    }
		    else{
		    	return 'false';
		    }
		    
		    /* close statement */
		    mysqli_stmt_close($stmt);
		}

	/* close connection */
	mysqli_close($link);
	}
	function listAllStudents(){
		$link = connectDB();
		/* create a prepared statement */
		if ($stmt = mysqli_prepare($link, "SELECT * FROM students WHERE 1")) {
		

	    /* execute query */
	    mysqli_stmt_execute($stmt);

	    /* bind result variables */
	    mysqli_stmt_bind_result($stmt, $id, $firstName, $lastName, $address, $age);

	    /* fetch value */
	   
		  $head = '<table class="uk-table uk-table-striped"><thead>
			        <tr>
			        	<th>ID</th>
			            <th>Name</th>
			            <th>Address</th>
			            <th>Age</th>
			        </tr>
			    </thead>
			    <tbody>';

			    $body = '';
		    while (mysqli_stmt_fetch($stmt)) {
		    	//array_push($details, $id, $firstName, $lastName, $address, $age);
		    	$body .= '
		    	<tr style="font-size:13px" class="font-ubuntu">
		            <td>'.$id.'</td>
		            <td>'.$firstName.' '.$lastName .'</td>
		            <td>'.$address.'</td>
		            <td>'.$age.'</td>
		        </tr>';



		    }
		    return $head.' '.$body.'</tbody>
</table>';
		  	//return details in json format
		    //echo json_encode($details);
		    
		    /* close statement */
		    mysqli_stmt_close($stmt);
		}

	/* close connection */
	mysqli_close($link);
	}

	if (isset($_POST['type'])) {
	if ($_POST['type']=='addStudent' && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['age'])) {
		echo CreateStudent($_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['age']);
	}
	if ($_POST['type']=='deleteStudent' && isset($_POST['id'])) {
		if(getStudentDetails($_POST['id']) != 'false') {
			echo deleteStudent($_POST['id']);
		}
		
	}
	if ($_POST['type']=='viewStudent' && isset($_POST['id'])) {
		$a = getStudentDetails($_POST['id']);
		if($a != 'false') {
			echo 'true';
		}
		
	}
	if ($_POST['type']=='loadStudent' && isset($_POST['id'])) {
		$a = getStudentDetails($_POST['id']);
		if($a != 'false') {
			echo $a;
		}
		
	}
	if ($_POST['type']=='updateStudent' && isset($_POST['id']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['address']) && isset($_POST['age'])) {
		$a = getStudentDetails($_POST['id']);
		if($a != 'false') {

			$b = updateStudent($_POST['id'], $_POST['fname'], $_POST['lname'], $_POST['address'], $_POST['age']);
			echo $b;
		}
		
	}
	if ($_POST['type']=='viewAllStudent') {
		
		$a = listAllStudents();
		if ($a !='') {
			echo $a;
		}
		
		
	}
}
?>