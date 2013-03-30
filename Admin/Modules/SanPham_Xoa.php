<?php
$MaSanPham=$_GET['masanpham'];
$sql="select urlhinh, hinhsp1, hinhsp2, hinhsp3 from sanpham where masanpham=".$MaSanPham;
$rs=mysql_query($sql);
$r=mysql_fetch_assoc($rs);
if(file_exists("images/hinhsanpham/".$r['urlhinh'])) {unlink("images/hinhsanpham/".$r['urlhinh']);}
if(file_exists("images/hinhsanpham/".$r['hinhsp1'])) {unlink("images/hinhsanpham/".$r['hinhsp1']);}
if(file_exists("images/hinhsanpham/".$r['hinhsp2'])) {unlink("images/hinhsanpham/".$r['hinhsp2']);}
if(file_exists("images/hinhsanpham/".$r['hinhsp3'])) {unlink("images/hinhsanpham/".$r['hinhsp3']);}
$sql="delete from sanpham where masanpham=".$MaSanPham;
mysql_query($sql);

header('location:?action=SanPham');
?>