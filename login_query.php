<?php
	session_start();
	
	require_once 'connect_db.php';
	
	if(ISSET($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			// md5 encrypted
			// $password = md5($_POST['password']);
			$password = $_POST['password'];
			$sql = "SELECT * FROM `member` WHERE `username`=? AND `password`=? ";
			$query = $db_connect->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['mem_id'];
				header("location: member_dashboard.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'registration.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'registration.php'</script>
			";
		}
	}
?>