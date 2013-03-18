<?php include('../../libs/db_connect.php');?>
<?php if(isset($_POST['idDT'])){

	$idDT=@$_POST['idDT'];
	$idHSX=$_POST['idHSX'];
	//echo $idHSX .'<br/>'. $idDT;
	$rs=mysql_query("select * from timtinhnang where idDT=$idDT");
	@$r=mysql_fetch_assoc($rs);
?>	
	<form action="" method="post">
<table width="100%" border="0">
   <tr>
    <td colspan="10" align="center">
      <select name="idHSX" id="idHSX" class="admin_select_hsx select_style">
        <option value="0">-----Chọn hãng-----</option>
       <?php 
	  		$sql0="select * from hangsx";
			  $rs0=mysql_query($sql0);
			  while($r0=mysql_fetch_assoc($rs0))
			  {
			  ?>
			  <option value="<?php echo $r0['idHSX']; ?>"<?php if($r0['idHSX']==$idHSX) echo "selected='selected'"; ?> ><?php echo $r0['TenHSX']; ?></option>
        <?php }?>
        </select>
        
		<select class="select_style admin_idDT" name="admin_idDT" id="admin_idDT">
		
        <option value="">-----Chọn Model-----</option>
		<?php 
		$rs1=mysql_query("Select idDT,TenDT From SanPham where idHSX=$idHSX");
		while($r1=mysql_fetch_assoc($rs1))
		{
		?>
		<option value="<?php echo $r1['idDT'] ?>" <?php if($idDT==$r1['idDT']) echo "selected='selected'"; ?>><?php echo $r1['TenDT'] ?></option>
		
		<?php } ?>
		
		</select><br />

    </td>
    </tr>
  <tr bgcolor="#CCFFFF">
    <td align="center">Chụp ảnh</td>
    <td align="center">FM Radio</td>
    <td align="center">Thẻ nhớ</td>
    <td align="center">GPRS</td>
    <td align="center">Quay phim</td>
    <td align="center">Tải hình</td>
    <td align="center">Loa ngoài</td>
    <td align="center">3G</td>
    <td align="center">Ghi âm</td>
    <td align="center">Báo rung</td>
  </tr>
  <tr>
    <td align="center"><input name="chupanh" type="checkbox" id="chupanh" value="1" <?php if($r['ChupAnh']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="fmradio" type="checkbox" id="fmradio" value="1" <?php if($r['FMRadio']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="thenho" type="checkbox" id="thenho" value="1" <?php if($r['TheNho']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="gprs" type="checkbox" id="gprs" value="1" <?php if($r['GPRS']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="quayphim" type="checkbox" id="quayphim" value="1" <?php if($r['QuayPhim']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="taihinh" type="checkbox" id="taihinh" value="1" <?php if($r['TaiHinh']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="loangoai" type="checkbox" id="loangoai" value="1" <?php if($r['LoaNgoai']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="3g" type="checkbox" id="3g" value="1" <?php if($r['3G']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="ghiam" type="checkbox" id="ghiam" value="1" <?php if($r['GhiAm']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="baorung" type="checkbox" id="baorung" value="1" <?php if($r['BaoRung']==1) echo "checked='checked' "; ?> /></td>
  </tr>
  <tr>
    <td colspan="10">&nbsp;</td>
    </tr>
  <tr bgcolor="#CCFFFF">
    <td align="center">UD văn phòng</td>
    <td align="center">CDMA</td>
    <td align="center">Báo thức</td>
    <td align="center">WIFI</td>
    <td align="center">Hồng ngoại</td>
    <td align="center">Nghe nhạc MP3</td>
    <td align="center">JAVA</td>
    <td align="center">Bluetooth</td>
    <td align="center">2SIM</td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center"><input name="udvanphong" type="checkbox" id="udvanphong" value="1" <?php if($r['UngDungVanPhong']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="cdma" type="checkbox" id="cdma" value="1" <?php if($r['CDMA']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="baothuc" type="checkbox" id="baothuc" value="1" <?php if($r['BaoThuc']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="wifi" type="checkbox" id="wifi" value="1" <?php if($r['WIFI']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="hongngoai" type="checkbox" id="hongngoai" value="1" <?php if($r['HongNgoai']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="nghenhacmp3" type="checkbox" id="nghenhacmp3" value="1" <?php if($r['NgheNhacMP3']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="java" type="checkbox" id="java" value="1" <?php if($r['JAVA']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="bluetooth" type="checkbox" id="bluetooth" value="1" <?php if($r['Bluetooth']==1) echo "checked='checked' "; ?> /></td>
    <td align="center"><input name="2sim" type="checkbox" id="2sim" value="1" <?php if($r['2Sim']==1) echo "checked='checked' "; ?> /></td>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5">&nbsp;</td>
    <td colspan="5">
      <input type="submit" name="themtinhnang" id="themtinhnang" value="Thêm tính năng" class="themtinhnang" />
      <input type="reset" name="Reset" id="button" value="Nhập lại" />
      </td>
    </tr>
</table>
</form>
<?php }?>
