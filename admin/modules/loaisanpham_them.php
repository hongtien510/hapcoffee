<?php include('libs/hamhaydung.php'); ?>
<?php
	$thutumax=GetMaxSTT('loaisanpham');
	
	if(isset($_POST['submit']))
	{
		$TenLoaiSanPham=$_POST['loaisanpham'];
		$ThuTu=$_POST['thutu'];
		
		$sql="insert into loaisanpham values(NULL,'$TenLoaiSanPham','','$ThuTu')";
		mysql_query($sql);
		echo "<script>alert('Thêm loại sản phẩm thành công');window.location='?action=LoaiSanPham'</script>";
		
	
	}
?>

<div class="LoaiSanPham">
<form action="" method="post">
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Thêm loại sản phẩm</h2>
  </caption>
  <tr>
    <th width="200" align="right" valign="middle" scope="row">Loại sản phẩm : </th>
    <td width="494"><label>
      <input class="input300" type="text" name="loaisanpham" id="loaisanpham" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự : </th>
    <td><label>
      <input class="input200" type="text" name="thutu" id="thutu" value="<?php echo $thutumax+1; ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Thêm loại sản phẩm" />
    </label></td>
  </tr>
</table>
</form>
</div>