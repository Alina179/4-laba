<?php
	include "db.php";
	include "session.php";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$log = $_POST['username'];
		$pas = $_POST['password'];
		if($result = mysqli_query($link, "SELECT ID, password FROM user WHERE login = '$log'")){
			if(($row = mysqli_fetch_assoc($result))){
				if($row["password"] == $pas){
					//checking is good. Activate user
					$uid = $row["id"];
					$_SESSION['login'] = htmlspecialchars(addslashes($log));
					$_SESSION['UID'] = htmlspecialchars(addslashes($uid));
					session_regenerate_id();
					header ("Location: ../index.php");
				} else {
					header ("Location: ../index.php?page=login&err=2");
				}	
			} else {
				header ("Location: ../index.php?page=login&err=1");	
			}
			mysqli_free_result($result);
		} else {
			header ("Location: ../index.php?page=login&err=3");
		}
	}
?>