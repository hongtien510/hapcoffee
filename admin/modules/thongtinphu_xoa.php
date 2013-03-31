<?php
$MaThongTinPhu=$_GET['mathongtinphu'];
$sql="delete from thongtinphu where mathongtinphu=".$MaThongTinPhu;
mysql_query($sql);
header('location:?action=ThongTinPhu');
?>