<?php
$dirname = "images/SliderAnhBanner/"; //Thư mục của bạn
$dir = opendir($dirname);

$arrfile ="";
while(false != ($file = readdir($dir)))
{
	if(($file != ".") and ($file != ".."))
	{
		$tyle= explode(".", $file);
		$kieu = strtolower($tyle[1]);
		if($kieu == 'jpg' || $kieu == 'png' || $kieu == 'gif')
		{
			// echo("$file <br />");
			$arrfile .= ",('".$file."')";
		
		}
	
	}
}
$arrayfile = substr($arrfile,1);

// lam moi lai bảng và cập nhật mới
mysql_query("truncate table `slider_top`");
$sql="INSERT INTO `slider_top` ( `tenhinh` )VALUES " .$arrayfile;
mysql_query($sql);
echo'<script>alert("Hình ảnh đã được làm mới lại");window.location="?action=HinhSlideTop";</script>';
// echo $arrayfile;
?>
