<?php
	require_once 'class.php';
	if(ISSET($_POST['login'])){
		$conn = new db_class();
		$username = $_POST['username'];
		$password =  md5($_POST['password']);
		$get_user = $conn->login($username, $password);
		if($get_user['count'] > 0){
			session_start();
			$_SESSION['user_id'] = $get_user['user_id'];
			echo '<script>alert("Successfully login!")</script>';
			echo '<script>window.location = "homepage.php"</script>'; 
		}else{
			echo '<script>alert("Invalid username or password")</script>';
			echo '<script>window.location = "login.php"</script>';
		}
	}
?>