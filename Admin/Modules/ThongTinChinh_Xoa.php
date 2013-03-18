<?php
$MaThongTinChinh=$_GET['mathongtinchinh'];
$sql="delete from thongtinchinh where mathongtinchinh=".$MaThongTinChinh;
mysql_query($sql);
header('location:?action=ThongTinChinh');
?>