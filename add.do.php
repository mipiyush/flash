<?php
	
	include("db.php");

	print_r($_POST);
	
	$name = $_POST["name"];
	$description = $_POST["description"];
	$starttime = $_POST["starttime"];
	$stoptime = $_POST["stoptime"];
	$location = $_POST["location"];
	
	//$sql = "INSERT INTO `tasks` (`taskid`, `name`, `description`, `starttime`, `stoptime`, `location`, `status`) VALUES (NULL, \'Task 2\', \'abc def\', \'2019-01-02\', \'2019-01-12\', \'Abc abc\', \'0\')";

	$sql= "INSERT INTO tasks (name,description,starttime,stoptime,location)VALUES ('$name','$description','$starttime','$stoptime','$location')";
		echo $sql;
		
		
		if(mysqli_query($conn,$sql)){
			echo "successfully inserted";
		}
		else{
			die(mysqli_error($conn));
		}
		
	
?>