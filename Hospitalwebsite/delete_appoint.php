<?php
	require_once('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="delete_appoint.php" method="get">
		<label>Are you Sure, Do you want to Delete it?</label><br/>
		<input name="id" type="hidden" value="<?php echo $_GET['delete']; ?> ">
		<button name="btn-yes" type="submit">Yes</button> &nbsp;&nbsp;
		<button type="button">No</button>
	</form>

	<?php
		if(isset($_GET['btn-yes'])){
			if(isset($_GET['id'])){
	    
	    		$del_id = $_GET['id'];

	            $sql = "DELETE FROM appoints WHERE id=$del_id";
	            $data_check = mysqli_query($con, $sql); 
	           	
	           	if(mysqli_affected_rows($con) > 0){
	           		ob_start();
	             	header("Location:appointments_details.php");
	             	ob_end_flush();
	             	die();
	           	} else {
	           		echo "ERROR : ".mysqli_error($con);
	           	}

			}
		}

	?>
</body>
</html>