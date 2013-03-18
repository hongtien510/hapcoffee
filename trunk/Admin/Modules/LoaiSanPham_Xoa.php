<?php
$MaLoaiSanPham=$_GET['maloaisanpham'];
$sql="delete from loaisanpham where maloaisanpham=".$MaLoaiSanPham;
mysql_query($sql);
header('location:?action=LoaiSanPham');
?>