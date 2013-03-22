<?php	
if(isset($_GET['idsp'])) 
{
// chi tiet san pham
	include('Modules/SanPham/detail.php');
}
else
{
// thong tin loai san pham
	include('Modules/SanPham/category.php');
}
?>
