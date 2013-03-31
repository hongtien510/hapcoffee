<?php
		  if(isset($_GET['lbv']))
		  {
			$lbv=$_GET['lbv'];
		  }else{
		  $lbv = 'GioiThieu';
		  }
$MaBaiViet=$_GET['mabv'];

$sql="select urlhinh from baiviet where mabv=".$MaBaiViet;
$rs=mysql_query($sql);
$r=mysql_fetch_assoc($rs);
if(file_exists("images/hinhsanpham/".$r['urlhinh'])) {unlink("images/hinhsanpham/".$r['urlhinh']);}

$sql="delete from baiviet where mabv=".$MaBaiViet;
mysql_query($sql);
header("location:?action=GioiThieu&lbv=$lbv");
?>