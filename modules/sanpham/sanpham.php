<?php	
if(isset($_GET['idsp'])) 
{
// chi tiet san pham
	include('modules/sanpham/detail.php');
}
else
{
// thong tin loai san pham
	include('modules/sanpham/category.php');
}
?>
