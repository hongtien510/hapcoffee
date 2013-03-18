<?php
$MaSanPham=$_GET['masanpham'];
$sql="select urlhinh from sanpham where masanpham=".$MaSanPham;
$rs=mysql_query($sql);
$r=mysql_fetch_assoc($rs);
if(file_exists("images/hinhsanpham/".$r['urlhinh'])) unlink("images/hinhsanpham/".$r['urlhinh']);
$sql="delete from sanpham where masanpham=".$MaSanPham;
mysql_query($sql);

header('location:?action=SanPham');
?>