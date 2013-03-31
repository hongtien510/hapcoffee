<?php require('../../libs/db_connect.php'); ?>
<?php
	$idHSX=@$_POST['idHSX'];
	//echo $idHSX;
	
	
	$sql="SELECT count(*) FROM `sanpham` WHERE idHSX=$idHSX";
	$rs=mysql_query($sql);
	$r=mysql_fetch_row($rs);// Lay so Dong Cua Table
	//Phan Trang CHo San Pham
	@$p=round($_GET['page']);//Han CHe Loi Nhap ko phai so -->0
	$p=max(1,$p);// Han Che Loi Nhap <1
	$SoDT1Trang=10;// So luong san pham hien thi trong 1 trang
	$SoTrang=ceil($r[0]/$SoDT1Trang); // fetch_row  lay ID bang 0//ceil Ham Lam Tron len tren 4.5-->5
	//echo $r[0];
?>

		<select name="idHSX" id="idHSX" class="hangsx admin_style_select">
			<option value="0" selected='selected'>-----Chon HSX-----</option>
			
			<?php 
			$sql="select * from HangSX";echo($sql);
			$rs=mysql_query($sql);
			while($r=mysql_fetch_assoc($rs))
			{
			?>
			  <option <?php if($idHSX==$r['idHSX']) echo "selected='selected'"; ?> value="<?php echo $r['idHSX'] ?>"><?php echo $r['TenHSX'] ?></option>
			<?php }?>
		</select><br />
		<form action="Admin/DienThoai_XoaNhieu.php" method="post" name="DT_ChiTiet">
        <table width="99%" border="0" cellpadding="0" cellspacing="0">
          <tr>
          	<td width="3%">STT</td>
            <td width="4%">Chọn</td>
            <td width="16%" align="center">Tên ĐT</td>
            <td width="10%" align="center">Giá</td>
            <td width="18%" align="center">Hình ảnh</td>
            <td width="6%" align="center">SL Tồn Kho</td>
            <td width="13%" align="center">Ngày cập nhật</td>
            <td width="6%" align="center">Ẩn</td>
            <td width="6%" align="center">Hết hàng</td>
            <td width="6%" align="center">SL Mua</td>
            <td width="12%" align="center">Công cụ</td>
          
          </tr>
          <?php 
		  	$i=($p-1)*$SoDT1Trang+1;
		  	$rs=mysql_query("select * from sanpham where idHSX=$idHSX LIMIT ".($p-1)*$SoDT1Trang.",".$SoDT1Trang);
			while($r=mysql_fetch_assoc($rs))
			{
		  ?>
          <tr class="trhover" id="del<?php echo $r['idDT']?>" onclick="checked('del<?php echo $r['idDT']?>');">
         	 <td align="center"><?php echo $i++; ?></td>
            <td align="center">
               <input type="checkbox" name="del[]" id="del<?php echo $r['idDT']?>" value="<?php echo $r['idDT']?>" />
            </td>
            <td style="padding-left:5px"><?php echo $r['TenDT'] ?></td>
            <td align="center"><?php echo $r['Gia'] ?></td>
            <td align="center"><img src="<?php echo $r['UrlHinh'] ?>" width="50"/></td>
            <td align="center"><?php echo $r['SoLuongTonKho'] ?></td>
            <td align="center"><?php echo $r['NgayCapNhat'] ?></td>
            <td align="center"><?php if($r['AnHien']==1) echo "X";else echo "-"; ?></td>
            <td align="center"><?php if($r['HetHang']==1) echo "X";else echo "-";?></td>
            <td align="center"><?php echo $r['SoLuongMuaHang'] ?></td>
            <td align="center">
            <a href="dienthoai_chitiet.php?idDT=<?php echo $r['idDT']?>" target="_blank"><img src="images/chitiet.png" width="16" height="16" border="0" /></a>&nbsp;
            <a href="?action=DienThoai_Sua&idDT=<?php echo $r['idDT']?>"><img src="images/sua.png" width="16" height="16" border="0" /></a>&nbsp;
            <a href="?action=DienThoai_Xoa&idDT=<?php echo $r['idDT']?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');"><img src="images/xoa.png" width="16" height="16" border="0" /></a></td>
 
          </tr>
          <?php } ?>
          <tr>
          	<td colspan="4">
			<a href="#" name="CheckAll" id="CheckAll" onclick="CheckAll()">Check All</a> / 
			<a href="#" name="UnCheckAll" id="UnCheckAll" onclick="UnCheckAll()">Uncheck All</a>&nbsp;|&nbsp;
			<a href="#" onclick="if (confirm('Bạn có chắc chắn muốn xóa không !!! ')) document.forms['DT_ChiTiet'].submit();">Xóa nhiều</a></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><label>
              <input type="button" name="themdienthoai" id="themdienthoai" value="Thêm điện thoại mới" onclick="window.location='?action=DienThoai_ThemMoi';" />
            </label></td>
          
          </tr>
        </table>
		</form>
		<div class="pages"> 
        <table style="border:none !important">
        <tr>
            <td>&nbsp;</td>
       		<td  align="right">
            <?php
            if($SoTrang==0) echo"Sản phẩm đang được cập nhật"; 
			else{
				if($SoTrang==1) echo""; 
				else {
					echo ("Trang ");
					for($i=1;$i<=$SoTrang;$i++)// Hien thi cac trang
				if($i==$p)
						echo "$i | ";
					else
						echo "<a href='?action=DienThoai&idHSX=$idHSX&page=$i'>$i</a> | ";
					}
				}
			?>
            </td>
        </tr>
        </table>
  		</div> 