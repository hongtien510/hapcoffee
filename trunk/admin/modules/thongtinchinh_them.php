<?php include('libs/hamhaydung.php'); ?>
<?php
	$thutumax=GetMaxSTT('thongtinchinh');
	if(isset($_POST['submit']))
	{
		$TenThongTinChinh=$_POST['thongtinchinh'];
		$ThuTu=$_POST['thutu'];
		
		$sql="insert into thongtinchinh values(NULL,'$TenThongTinChinh','','$ThuTu')";
		mysql_query($sql);
		echo "<script>alert('Thêm thông tin chính thành công');window.location='?action=ThongTinChinh'</script>";
	}
?>

<div class="ThongTinChinh">
<form action="" method="post">
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Thêm thông tin chính</h2>
  </caption>
  <tr>
    <th width="200" align="right" valign="middle" scope="row">Thông tin chính : </th>
    <td width="494"><label>
      <input class="input300" type="text" name="thongtinchinh" id="thongtinchinh" />
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
      <input type="submit" name="submit" id="submit" value="Thêm thông tin chính" />
    </label></td>
  </tr>
</table>
</form>
</div>