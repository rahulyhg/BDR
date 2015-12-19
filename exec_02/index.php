<?php
/*
/***************************************************************************************
-- EXERCÍCIO 2 --
Refatore o código abaixo, fazendo as alterações que julgar necessário.

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
 header("Location: http://www.google.com");
exit();
} elseif (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true) {
header("Location: http://www.google.com");
exit();
}
***************************************************************************************/

  session_start();
  
  $session_loggedin	= (isset($_SESSION['loggedin']));
  $cookie_loggedin 	= (isset($_COOKIE['loggedin']));

	if ($session_loggedin == true || $cookie_loggedin == true) {
	
		header("Location: http://www.google.com");
		exit();
		
	} else {
	
		echo "acesso negado";
		
	}
?>