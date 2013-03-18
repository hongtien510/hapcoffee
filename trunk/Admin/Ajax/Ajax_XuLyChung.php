<?php include('../../libs/db_connect.php');?>
<?php if(@$_POST['act']=='themtinhnang'){
	
	$idDT=@$_POST['idDT'];
	$ChupAnh=@$_POST['chupanh'];
	$FMRadio=@$_POST['fmradio'];
	$TheNho=@$_POST['thenho'];
	$GPRS=@$_POST['gprs'];
	$QuayPhim=@$_POST['quayphim'];
	$TaiHinh=@$_POST['taihinh'];
	$LoaNgoai=@$_POST['loangoai'];
	$G3=@$_POST['3g'];
	$GhiAm=@$_POST['ghiam'];
	$BaoRung=@$_POST['baorung'];
	$UDVanPhong=@$_POST['udvanphong'];
	$CDMA=@$_POST['cdma'];
	$BaoThuc=@$_POST['baothuc'];
	$WIFI=@$_POST['wifi'];
	$HongNgoai=@$_POST['hongngoai'];
	$NgheNhacMp3=@$_POST['nghenhacmp3'];
	$Java=@$_POST['java'];
	$Bluetooth=@$_POST['bluetooth'];
	$Sim2=@$_POST['2sim'];
	
	if($idDT=="")
		echo "Bạn chưa chọn điện thoại cần thêm tính năng";
	else
	{
		$rs0=mysql_query("Select 1 from timtinhnang where idDT=$idDT");
		if(mysql_num_rows($rs0)==0)
		{
			$sql="insert into timtinhnang values('$idDT', '$ChupAnh', '$FMRadio', '$TheNho', '$GPRS', '$QuayPhim', '$TaiHinh', '$LoaNgoai', '$G3', '$GhiAm', '$BaoRung', '$UDVanPhong', '$CDMA', '$BaoThuc', '$WIFI', '$HongNgoai', '$NgheNhacMp3', '$Java', '$Bluetooth', '$Sim2')";
			//echo $sql;
			$rs=mysql_query($sql);
			echo"Thêm thành công";
		}
		else
		{
			$sql="Update timtinhnang set 
			ChupAnh='$ChupAnh', FMRadio='$FMRadio', TheNho='$TheNho', 
			GPRS='$GPRS', QuayPhim='$QuayPhim', TaiHinh='$TaiHinh', LoaNgoai='$LoaNgoai', 
			3G='$G3', GhiAm='$GhiAm', BaoRung='$BaoRung', UngDungVanPhong='$UDVanPhong', 
			CDMA='$CDMA', BaoThuc='$BaoThuc', WIFI='$WIFI', HongNgoai='$HongNgoai', 
			NgheNhacMP3='$NgheNhacMp3', JAVA='$Java', Bluetooth='$Bluetooth', 2Sim='$Sim2' where idDT='$idDT'";
			//echo $sql;
			$rs=mysql_query($sql);
			echo "Cập nhật thành công";
			
		
		}
	}
}?>

<?php if(@$_POST['act']=='select_idDT'){
	echo "<option value=\"0\">-----Chọn Model-----</option>";
	$id=$_POST['id'];
	$sql= "select * from SANPHAM where idHSX=$id";
	$rs=mysql_query($sql);
	while($r=mysql_fetch_assoc($rs))
	{
		echo "<option value='".$r['idDT']."'>".$r['TenDT']."</option>"; 
	}
}?>



<?php if(@$_POST['act']=='dagiaohang'){
	$idDH=@$_POST['idDH'];
	$TinhTrang=@$_POST['tinhtrang'];
	//echo $TinhTrang;
	mysql_query("update donhang set tinhtrang='$TinhTrang' where idDH='$idDH'");
	echo "Cập nhật thành công";
}?>
