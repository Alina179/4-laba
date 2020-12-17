<?php
	include "db.php";
	
	if(isset($_SESSION['login'])){
		header('Location: ../index.php');
		exit;
	}
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$mail = $_POST['mail'];
		$log = $_POST['username'];
		$pas = $_POST['password'];
		
		if($result = mysqli_query($link, "SELECT id FROM user WHERE login = '$log'")){
			if(mysqli_fetch_row($result)){
				header('Location: ../index.php?page=reg&err=1#footer');
			} else {
				if(mysqli_query($link, "INSERT INTO user (id, mail, login, password) VALUES (NULL, '$mail', '$log', '$pas');")){
					header('Location: ../index.php?page=login');
				} else {
					echo mysqli_error($link);
				}	
			}
			mysqli_free_result($result);
		}
	}
?>