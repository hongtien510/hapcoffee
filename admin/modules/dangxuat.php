<?php
	//Huy Session
	session_start();
	//session_destroy();
	unset($_SESSION['idUserAdmin']);
	unset($_SESSION['HoTenAdmin']);

	//Huy Cookie
	//setcookie('Email','',time()-24*3600);
	//echo @$_COOKIE['Email'];
	//Chuyen den trang dang nhap
	header('Location:?action=Admin');
?>