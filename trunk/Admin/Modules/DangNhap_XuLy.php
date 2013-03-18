<?php session_start(); ?>
<?php include('../../libs/db_connect.php'); ?>
<?php
//lam ham su ly bo html
	$User=@$_POST['user'];
	$Password=sha1(@$_POST['matkhau']);
	
	//echo $MatKhau;
	$sql="select * from useradmin where user='$User' AND password='$Password'";
	$rs=mysql_query($sql);
	//echo $sql;
	//exit();
	if(mysql_num_rows($rs)==1)
	{
		$r=mysql_fetch_assoc($rs);
		$_SESSION['idUserAdmin']=$r['iduser'];
		$_SESSION['HoTenAdmin']=$r['hoten'];

		echo ("<script>alert('Bạn đã đăng nhập thành công vào quyền Admin'); window.location='../../Admin.php';</script>");
		//header('location:../../Admin.php');
		//echo $_SESSION['HoTen'];
		
	}
	else
		{
			echo ("<script>alert('Mật khẩu không đúng'); window.location='../../Admin.php'</script>");
			
		}
?>
