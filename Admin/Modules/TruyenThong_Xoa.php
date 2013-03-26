<?php
$MaBaiViet=$_GET['mabv'];
$sql="delete from baiviet where mabv=".$MaBaiViet;
mysql_query($sql);
header('location:?action=TruyenThong');
?>