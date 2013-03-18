<?php
	$conn=mysql_connect('localhost','root','123') or die (mysql_error());
	mysql_select_db('hap',$conn) or die (mysql_error());
	mysql_query('set names utf8');
?>