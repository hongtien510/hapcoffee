<?php
	$MaThongTinChinh=$_GET['mathongtinchinh'];
	$sql1="select * from thongtinchinh where mathongtinchinh=".$MaThongTinChinh;
	$rs=mysql_query($sql1);
	$r=mysql_fetch_assoc($rs);

	if(isset($_POST['submit']))
	{
		$TenThongTinChinh=$_POST['thongtinchinh'];
		$ThuTu=$_POST['thutu'];
		
		$sql="update thongtinchinh set tenthongtinchinh='$TenThongTinChinh', thutu='$ThuTu' where mathongtinchinh=".$r['mathongtinchinh'];
		mysql_query($sql);
		echo "<script>alert('Cập nhật thông tin chính thành công');window.location='?action=ThongTinChinh'</script>";
	}
?>

<div class="ThongTinChinh">
<form action="" method="post">
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Sửa thông tin chính</h2>
  </caption>
  <tr>
    <th width="200" align="right" valign="middle" scope="row">Thông tin chính : </th>
    <td width="494"><label>
      <input class="input300" type="text" name="thongtinchinh" id="thongtinchinh" value="<?php echo $r['tenthongtinchinh'] ?>" />
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
      <input type="submit" name="submit" id="submit" value="Cập nhật thông tin chính" />
    </label></td>
  </tr>
</table>
</form>
</div>