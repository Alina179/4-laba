<?php
	include "session.php";

	$refer=$_SERVER["HTTP_REFERER"];

	if ( isset($_SESSION['login'])){ 
		// Удаляем все переменные сессии.
		$_SESSION = array();
		// сбрасываем идентификатор сессии
		session_regenerate_id();
		// Наконец, уничтожаем сессию.
		session_destroy();
		//возвращаемся на ту же страницу
		header ("Location: $refer");
	}
	else {
		header ("Location: $refer"); //no session
	}
?>