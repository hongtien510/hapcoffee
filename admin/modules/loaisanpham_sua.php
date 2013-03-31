<?php
	$MaLoaiSanPham=$_GET['maloaisanpham'];
	$sql1="select * from loaisanpham where maloaisanpham=".$MaLoaiSanPham;
	$rs=mysql_query($sql1);
	$r=mysql_fetch_assoc($rs);

	if(isset($_POST['submit']))
	{
		$TenLoaiSanPham=$_POST['loaisanpham'];
		$ThuTu=$_POST['thutu'];
		
		$sql="update loaisanpham set tenloaisanpham='$TenLoaiSanPham', thutu='$ThuTu' where maloaisanpham=".$r['maloaisanpham'];
		mysql_query($sql);
		echo "<script>alert('Cập nhật loại sản phẩm thành công');window.location='?action=LoaiSanPham'</script>";
	}
?>

<div class="LoaiSanPham">
<form action="" method="post">
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Sửa loại sản phẩm</h2>
  </caption>
  <tr>
    <th width="200" align="right" valign="middle" scope="row">Loại sản phẩm : </th>
    <td width="494"><label>
      <input class="input300" type="text" name="loaisanpham" id="loaisanpham" value="<?php echo $r['tenloaisanpham'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự : </th>
    <td><label>
      <input class="input200" type="text" name="thutu" id="thutu" value="<?php echo $r['thutu'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Cập nhật loại sản phẩm" />
    </label></td>
  </tr>
</table>
</form>
</div>