<?php  
//action.php
	if($input["action"] === 'edit')
	{
		$query = "UPDATE tbl_user SET first_name = '".$first_name."', last_name = '".             $last_name."' WHERE id = '".$input["id"]."'";
	 	mysqli_query($connect, $query);
	}
	if($input["action"] === 'delete')
	{
		$query = "DELETE FROM tbl_user WHERE id = '".$input["id"]."'";
	 	mysqli_query($connect, $query);
	}
	echo json_encode($input);
?>
