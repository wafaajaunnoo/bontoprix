<?php
	require_once "class.php";
	$conn = new db_class();
	if(ISSET($_POST['signup'])){
        $first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password =  md5($_POST['password']);
      
		
		$conn->save($first_name, $last_name, $email,  $username, $password);
		echo '<script>alert("Successfully saved!")</script>';
		echo '<script>window.location= "login.php"</script>';
	}	
?>


