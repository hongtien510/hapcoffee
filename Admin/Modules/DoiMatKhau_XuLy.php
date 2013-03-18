<?php include('libs/db_connect.php'); ?>
<?php
	$MatKhauCu=sha1(@$_POST['matkhau0']);
	$MatKhauMoi=sha1(@$_POST['matkhau1']);
	$MatKhauMoi1=sha1(@$_POST['matkhau2']);
	
	$sql="select * from useradmin where password='$MatKhauCu'";
	//echo $sql;
	$rs=mysql_query($sql);
	if(mysql_num_rows($rs)!=1)
		echo ("<script>alert('Mật khẩu cũ không đúng');window.location='?action=DoiMatKhau';</script>");
	else
	{
		if($MatKhauMoi!=$MatKhauMoi1)
			echo ("<script>alert('Mật khẩu mới nhập không giống nhau');window.location='?action=DoiMatKhau';</script>");
		else
		{
			$sql="update useradmin set password='$MatKhauMoi' where iduser='1'";
			mysql_query($sql);
			echo ("<script>alert('Đổi mật khẩu thành công');window.location='?action=SanPham';</script>");
		}
	}
		
?>