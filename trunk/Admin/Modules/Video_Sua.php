
<?php 
	$IDVideo=$_GET['idvideo'];
	$sql="select * from video where idvideo='$IDVideo'";
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);
	
	if(isset($_POST['submit']))
	{
		$TieuDe=$_POST['tieude'];
		$UrlVideo=$_POST['urlvideo'];
		$ThuTu=$_POST['thutu'];
		$AnHien=@$_POST['anhien'];
		
		
		$sql1="update video set tieude='$TieuDe',
									urlvideo='$UrlVideo',
									thutu='$ThuTu',
									anhien='$AnHien'
									where idvideo='$IDVideo'";
		
		//echo $sql1;
		mysql_query($sql1);
		echo "<script>alert('Chỉnh sửa thành công');window.location='?action=Video';</script>";
	}
?>
<div class="HoTro">
<form action="" method="post">
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Chỉnh sửa Video</h2>
  </caption>
  <tr>
    <th width="15%" align="right" valign="middle" scope="row">Tiêu đề : </th>
    <td width="85%"><label>
      <input type="text" class="input500" name="tieude" id="tieude" value="<?php echo $r['tieude'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Đường dẩn Video : </th>
    <td><label>
      <input class="input300" type="text" name="urlvideo" id="urlvideo" value="<?php echo $r['urlvideo'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự : </th>
    <td><label>
      <input class="input300" type="text" name="thutu" id="thutu" value=" <?php echo $r['thutu']   ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">Ẩn hiện</th>
    <td><input name="anhien" type="checkbox" id="anhien" value="1" <?php if($r['anhien']==1) echo 'checked="checked"'; ?>/>
	<i>(Chọn nếu muốn bài viết không hiển thị)</i>
	</td>
	
	
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">&nbsp;</th>
    <td>
      <label>
        <input type="submit" name="submit" id="submit" value="Chỉnh sửa" />
      </label></td>
  </tr>
</table>
</form>

</div><!--End .HoTro-->

