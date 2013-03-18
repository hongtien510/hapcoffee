<?php
$MaTuyenDung=$_GET['matuyendung'];
$sql="delete from tuyendung where matuyendung=".$MaTuyenDung;
mysql_query($sql);
header('location:?action=TuyenDung');
?>