<?php
	session_start();
	require_once 'connect_db.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['firstname'] != "" || $_POST['username'] != "" || $_POST['password'] != ""){
			try{
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
				// md5 encrypted
				// $password = md5($_POST['password']);
				$password = $_POST['password'];
				$db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `member` VALUES ('', '$firstname', '$lastname', '$username', '$password')";
				$db_connect->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$_SESSION['message']=array("text"=>"Account successfully created.","alert"=>"info");
			$db_connect = null;
			header('location:member_dashboard.php');
		}else{
			echo "
				<script>alert('Please fill in the required field!')</script>
				<script>window.location = 'registration.php'</script>
			";
		}
	}
?>