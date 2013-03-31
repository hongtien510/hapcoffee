<?php include('libs/hamhaydung.php'); ?>
<div class="HoTro">
<?php
	if($_GET['act']=='yahoo')
	{
	$thutumax=GetMaxSTT('yahoo');
	if(isset($_POST['submit']))
	{
		$TieuDe=$_POST['tieude'];
		$NickChat=$_POST['nickchat'];
		$ThuTu=$_POST['thutu'];
		$AnHien=@$_POST['anhien'];
		$sql="insert into yahoo values(NULL,'$TieuDe','$NickChat','$ThuTu','$AnHien')";
		mysql_query($sql);
		//echo $sql;
		echo "<script>alert('Thêm hỗ trợ thành công');window.location='?action=HoTroTrucTuyen';</script>";
	}
?>

<form action="" method="post">
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Thêm hỗ trợ trực tuyến</h2>
  </caption>
  <tr>
    <th width="22%" align="right" valign="middle" scope="row">Tiêu đề : </th>
    <td width="78%"><label>
      <input type="text" class="input500" name="tieude" id="tieude" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Nick chat Yahoo : </th>
    <td><label>
      <input class="input300" type="text" name="nickchat" id="nickchat" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự : </th>
    <td><label>
      <input class="input300" type="text" name="thutu" id="thutu" value="<?php echo $thutumax+1; ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">Ẩn hiện :</th>
    <td><input name="anhien" type="checkbox" id="anhien" value="1"/><i>(Chọn nếu muốn bài viết không hiển thị)</i></td>
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">&nbsp;</th>
    <td>
      <label>
        <input type="submit" name="submit" id="submit" value="Thêm hỗ trợ" />
      </label></td>
  </tr>
</table>
</form>
<?php } ?>

<?php
	if($_GET['act']=='hotline')
	{
	$thutumax=GetMaxSTT('hotline');
	if(isset($_POST['submit']))
	{
		$TieuDe=$_POST['tieude'];
		$SoDienThoai=$_POST['sodienthoai'];
		$ThuTu=$_POST['thutu'];
		$AnHien=@$_POST['anhien'];
		$sql="insert into hotline values(NULL,'$TieuDe','$SoDienThoai','$ThuTu','$AnHien')";
		mysql_query($sql);
		//echo $sql;
		echo "<script>alert('Thêm hỗ trợ thành công');window.location='?action=HoTroTrucTuyen';</script>";
	}
?>

<form action="" method="post">
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Thêm hỗ trợ qua điện thoại</h2>
  </caption>
  <tr>
    <th width="22%" align="right" valign="middle" scope="row">Tiêu đề : </th>
    <td width="78%"><label>
      <input type="text" class="input500" name="tieude" id="tieude" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Số điện thoại : </th>
    <td><label>
      <input class="input300" type="text" name="sodienthoai" id="sodienthoai" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự : </th>
    <td><label>
      <input class="input300" type="text" name="thutu" id="thutu" value="<?php echo $thutumax+1; ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">Ẩn hiện :</th>
    <td><input name="anhien" type="checkbox" id="anhien" value="1"/><i>(Chọn nếu muốn bài viết không hiển thị)</i></td>
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">&nbsp;</th>
    <td>
      <label>
        <input type="submit" name="submit" id="submit" value="Thêm hỗ trợ" />
      </label></td>
  </tr>
</table>
</form>
<?php } ?>
</div><!--End .HoTro-->
