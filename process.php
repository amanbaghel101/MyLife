<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 //$city_name = $_POST['city_name'];
	 $gender = $_POST['gender'];
	 $email = $_POST['email'];
	 $mobile = $_POST['mobile'];
	 $sql = "INSERT INTO entry_details(first_name,last_name,gender,email,mobile)
	 VALUES ('$first_name','$last_name','$gender','$email','$mobile')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>