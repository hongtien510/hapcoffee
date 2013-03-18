<?php include('libs/hamhaydung.php'); ?>
<?php
	$thutumax=GetMaxSTT('video');
	if(isset($_POST['submit']))
	{
		$TieuDe=$_POST['tieude'];
		$UrlVideo=$_POST['urlvideo'];
		$ThuTu=$_POST['thutu'];
		$AnHien=@$_POST['anhien'];
		$sql="insert into video values(NULL,'$TieuDe','$UrlVideo','$ThuTu','$AnHien')";
		mysql_query($sql);
		//echo $sql;
		echo "<script>alert('Thêm Video thành công');window.location='?action=Video';</script>";
	}
?>
<div class="HoTro">
<form action="" method="post">
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Thêm Video</h2>
  </caption>
  <tr>
    <th width="22%" align="right" valign="middle" scope="row">Tiêu đề : </th>
    <td width="78%"><label>
      <input type="text" class="input500" name="tieude" id="tieude" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Đường dẩn Video : </th>
    <td><label>
      <input class="input300" type="text" name="urlvideo" id="urlvideo" />
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
        <input type="submit" name="submit" id="submit" value="Thêm Video" />
      </label></td>
  </tr>
</table>
</form>

</div><!--End .HoTro-->
