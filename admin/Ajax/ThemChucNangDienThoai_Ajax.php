<?php include('../../libs/db_connect.php'); ?>
<?php
	$idHSX=$_POST['idHSX'];
	$idDT=@$_REQUEST['idDT'];
	$rs1=mysql_query("select * from thongtinchitiet where idDT='$idDT'");
	$r1=mysql_fetch_assoc($rs1);
	
	$rs2=mysql_query("select * from tn_tongquan where idDT='$idDT'");
	$r2=mysql_fetch_assoc($rs2);
	
	$rs3=mysql_query("select * from tn_hienthi where idDT='$idDT'");
	$r3=mysql_fetch_assoc($rs3);
	
	$rs4=mysql_query("select * from tn_luutru where idDT='$idDT'");
	$r4=mysql_fetch_assoc($rs4);
	
	$rs5=mysql_query("select * from tn_thongtinkhac where idDT='$idDT'");
	$r5=mysql_fetch_assoc($rs5);
	
	$rs6=mysql_query("select * from tn_pin where idDT='$idDT'");
	$r6=mysql_fetch_assoc($rs6);

	
	
	//echo $UrlHinhLon;
	
	

?>

<iframe style="display:none" name="tempframe"></iframe>
<form method="post" action="Admin/ChucNangDienThoai_Xuly.php" target="tempframe" enctype="multipart/form-data">
	<table width="600" border="1" cellpadding="0" cellspacing="0">

			<tr align="center">
			<td colspan="3">	
			<select name="idHSX" id="idHSX" class="admin_select_hsx admin_style_select">
			<option value="0">-----Chọn hãng-----</option>
		   <?php 
				$sql0="select * from hangsx";
				  $rs0=mysql_query($sql0);
				  while($r0=mysql_fetch_assoc($rs0))
				  {
				  ?>
				  <option value="<?php echo $r0['idHSX']; ?>" <?php if($r0['idHSX']==$idHSX) echo "selected='selected'"; ?>  ><?php echo $r0['TenHSX']; ?></option>
			<?php }?>
			</select>
					

			<select class="admin_idDT_ChucNang admin_style_select " name="admin_idDT" id="admin_idDT">
			
				<option value="">-----Chọn Model-----</option>
				<?php 
				$rs0=mysql_query("Select idDT,TenDT From SanPham where idHSX=$idHSX");
				while($r0=mysql_fetch_assoc($rs0))
				{
				?>
				<option value="<?php echo $r0['idDT'] ?>" <?php if($idDT==$r0['idDT']) echo " selected='selected' "; ?>><?php echo $r0['TenDT'] ?></option>
				<?php } ?>
			</select>
			</td>
			</tr>
		

			<tr>
				<td colspan="2" align="right" >Hình lớn</td>
				<td width="447"><label>
				<img src="<?php echo $r1['UrlHinhLon'];?>" height="150" /><br/>
				<input  style="border:1px solid orange" name="UrlHinhLon" type="file" id="UrlHinhLon" size="50" />
			  </label></td>
			</tr>
			<tr>
				<td colspan="2" align="right" >Bang Tan</td>
				<td><label>
				  <textarea class="admin_style_texarea_500" name="BangTan" cols="60" rows="3" id="BangTan"><?php echo $r1['BangTan'];?></textarea>
				</label></td>
			</tr>
			<tr>
				<td colspan="2" align="right" >Hien Thi</td>
			  <td><textarea class="admin_style_texarea_500" name="HienThi" cols="60" rows="7" id="HienThi"><?php echo $r1['HienThi'];?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="right" >Bo Nho - Xu Ly</td>
			  <td><textarea class="admin_style_texarea_500" name="BoNhoXuLy" cols="60" rows="5" id="BoNhoXuLy"><?php echo $r1['BoNhoXuLy'];?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="right" >Ket Noi</td>
			  <td><textarea class="admin_style_texarea_500" name="KetNoi" cols="60" rows="5" id="KetNoi"><?php echo $r1['KetNoi'];?></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="right" ><p>Ung Dung - Giai Tri</p></td>
			  <td><textarea class="admin_style_texarea_500" name="GiaiTri" cols="60" rows="10" id="GiaiTri"><?php echo $r1['GiaiTri'];?></textarea></td>
			</tr>
			<tr>
				<td colspan="3" >&nbsp;</td>
			</tr>
			
			<tr>
				<td width="52">&nbsp;</td>
				<td width="93">&nbsp;</td>
				<td>&nbsp;</td>
			</tr>

		   <tr>
			 <td rowspan="3" align="center">Tổng quan</td>
			 <td align="right">Mạng</td>
			 <td><label>
		   <input class="admin_style_input" name="Mang" type="text" id="Mang" size="60" value="<?php echo $r2['Mang'];?>" />
			 </label></td>
		   </tr>
		   <tr>
			 <td align="right">Màu sắc</td>
			 <td><input class="admin_style_input" name="MauSac" type="text" id="MauSac" size="60" value="<?php echo $r2['MauSac'];?>" /></td>
		   </tr>
		   <tr>
			 <td align="right">KT/ TL </td>
			 <td><input class="admin_style_input" name="KichThuoc" type="text" id="KichThuoc" size="60" value="<?php echo $r2['KichThuoc'];?>" /></td>
		   </tr>
		   <tr align="center">
			 <td colspan="3">&nbsp;</td>
			 </tr>
		   <tr>
			 <td rowspan="3" align="center">Hiển thị</td>
			 <td align="right">Ngôn ngữ</td>
			 <td><input class="admin_style_input" name="NgonNgu" type="text" id="NgonNgu" size="60" value="<?php echo $r3['NgonNgu'];?>" /></td>
		   </tr>
		   <tr>
			 <td align="right">Loại màn hình </td>
			 <td><input class="admin_style_input" name="ManHinh" type="text" id="ManHinh" size="60" value="<?php echo $r3['ManHinh'];?>" /></td>
		   </tr>
		   <tr>
			 <td align="right">Kích thước hiển thị</td>
			 <td><input class="admin_style_input" name="KichThuocHT" type="text" id="KichThuocHT" size="60" value="<?php echo $r3['KichThuocHT'];?>" /></td>
		   </tr>
		   <tr align="center">
			 <td colspan="3">&nbsp;</td>
			 </tr>
		   <tr>
			 <td rowspan="3" align="center">Lưu trữ</td>
			 <td align="right">Danh bạ</td>
			 <td><input class="admin_style_input" name="DanhBa" type="text" id="DanhBa" size="60" value="<?php echo $r4['DanhBa'];?>" /></td>
		   </tr>
		   <tr>
			 <td align="right">Bộ nhớ</td>
			 <td><input class="admin_style_input" name="BoNhoTrong" type="text" id="BoNhoTrong" size="60" value="<?php echo $r4['BoNhoTrong'];?>" /></td>
		   </tr>
		   <tr>
			 <td align="right">Thẻ nhớ</td>
			 <td><input class="admin_style_input" name="TheNho" type="text" id="TheNho" size="60" value="<?php echo $r4['TheNho'];?>" /></td>
		   </tr>
		   <tr align="center">
			 <td colspan="3">&nbsp;</td>
			 </tr>
		   <tr>
			 <td rowspan="6" align="center">Thông tin khác</td>
			 <td align="right">GPRS</td>
			 <td><label>
				 <input name="GPRS" type="checkbox" id="GPRS" value="1" <?php if($r5['GPRS']==1) echo " checked='checked' "; ?> />
			 </label></td>
		   </tr>
		   <tr>
			 <td align="right">3G</td>
			 <td><input name="3G" type="checkbox" id="3G" value="1" <?php if($r5['3G']==1) echo " checked='checked' "; ?> /></td>
		   </tr>
		   <tr>
			 <td align="right">WLAN</td>
			 <td><input name="WLAN" type="checkbox" id="WLAN" value="1" <?php if($r5['WLAN']==1) echo " checked='checked' "; ?> /></td>
		   </tr>
		   <tr>
			 <td align="right">Hệ điều hành</td>
			 <td><input name="HeDieuHanh" type="checkbox" id="HeDieuHanh" value="1" <?php if($r5['HeDieuHanh']==1) echo " checked='checked' "; ?> /></td>
		   </tr>
		   <tr>
			 <td align="right">Nghe nhạc</td>
			 <td><input name="NgheNhac" type="checkbox" id="NgheNhac" value="1" <?php if($r5['NgheNhac']==1) echo " checked='checked' "; ?> /></td>
		   </tr>
		   <tr>
			 <td align="right">Xem phim</td>
			 <td><input name="XemPhim" type="checkbox" id="XemPhim" value="1" <?php if($r5['XemPhim']==1) echo " checked='checked' "; ?> /></td>
		   </tr>
		   <tr align="center">
			 <td colspan="3">&nbsp;</td>
			 </tr>
		   <tr>
			 <td rowspan="3" align="center">Pin</td>
			 <td align="right">Loại Pin</td>
			 <td><input class="admin_style_input" name="LoaiPin" type="text" id="LoaiPin" size="60" value="<?php echo $r6['LoaiPin'];?>" /></td>
		   </tr>
		   <tr>
			 <td align="right">Thời gian chờ</td>
			 <td><input class="admin_style_input" name="TGCho" type="text" id="TGCho" size="60" value="<?php echo $r6['TGCho'];?>" /></td>
		   </tr>
		   <tr>
			 <td align="right">Thời gian đàm thoại</td>
			 <td><input class="admin_style_input" name="TGDamThoai" type="text" id="TGDamThoai" size="60" value="<?php echo $r6['TGDamThoai'];?>" /></td>
		   </tr>
		   <tr>
			 <td colspan="3" align="center"><label>
			   <input type="submit" name="themchucnang" id="themchucnang" class="themchucnangdienthoai" value="Thêm chức năng" />
			 </label></td>
			 </tr>
		 </table>
</form>