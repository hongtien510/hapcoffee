<?php
	$conn=mysql_connect('localhost','root','') or die (mysql_error());
	mysql_select_db('hapcoffee',$conn) or die (mysql_error());
	mysql_query('set names utf8');
?>