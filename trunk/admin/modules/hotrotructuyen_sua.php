


	
	
<div class="HoTro">'
<?php 	
	
	if(isset($_GET['idyahoo']))
	{
	$IDYahoo=@$_GET['idyahoo'];
	$sql="select * from yahoo where idyahoo='$IDYahoo'";
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);
	
	?>
	<form action="" method="post">
		<table width="90%" border="1" cellspacing="0" cellpadding="0">
		  <caption>
			<h2>Chỉnh sửa hỗ trợ trực tuyến</h2>
		  </caption>
		  <tr>
			<th width="15%" align="right" valign="middle" scope="row">Tiêu đề : </th>
			<td width="85%"><label>
			  <input type="text" class="input500" name="tieude" id="tieude" value="<?php if(isset($r['tieude'])) echo $r['tieude'] ?>" />
			</label></td>
		  </tr>
		  <tr>
			<th align="right" valign="middle" scope="row">Nick chat Yahoo : </th>
			<td><label>
			  <input class="input300" type="text" name="nickchat" id="nickchat" value="<?php if(isset($r['nickchat'])) echo $r['nickchat'] ?>" />
			</label></td>
		  </tr>
		  <tr>
			<th align="right" valign="middle" scope="row">Thứ tự : </th>
			<td><label>
			  <input class="input300" type="text" name="thutu" id="thutu" value=" <?php if(isset($r['thutu'])) echo $r['thutu']   ?>" />
			</label></td>
		  </tr>
		  <tr>
			<th align="right" valign="top" scope="row">Ẩn hiện</th>
			<td><input name="anhien" type="checkbox" id="anhien" value="1" <?php if(isset($r['anhien']) && $r['anhien']==1) echo 'checked="checked"'; ?>/>
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
<?php } ?>
<?php 	

	if(isset($_GET['idhotline']))
	{
	$IDHotline=@$_GET['idhotline'];
	$sql1="select * from hotline where idhotline='$IDHotline'";
	$rs1=mysql_query($sql1);
	$r1=mysql_fetch_assoc($rs1);
	?>
<form action="" method="post">
	<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Chỉnh sửa hỗ trợ qua điện thoại</h2>
  </caption>
  <tr>
    <th width="15%" align="right" valign="middle" scope="row">Tiêu đề : </th>
    <td width="85%"><label>
      <input type="text" class="input500" name="tieudedt" id="tieudedt" value="<?php echo $r1['tieude'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Số điện thoại : </th>
    <td><label>
      <input class="input300" type="text" name="sodienthoai" id="sodienthoai" value="<?php echo $r1['sodienthoai'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự : </th>
    <td><label>
      <input class="input300" type="text" name="thutudt" id="thutudt" value=" <?php echo $r1['thutu']   ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">Ẩn hiện</th>
    <td><input name="anhiendt" type="checkbox" id="anhiendt" value="1" <?php if($r1['anhien']==1) echo 'checked="checked"'; ?>/>
	<i>(Chọn nếu muốn bài viết không hiển thị)</i>
	</td>
	
	
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">&nbsp;</th>
    <td>
      <label>
        <input type="submit" name="submitdt" id="submitdt" value="Chỉnh sửa" />
      </label></td>
  </tr>
</table>
</form>

	
<?php } ?>
</div><!--End .HoTro-->

<?php
	if(isset($_POST['submit']))
	{
		$TieuDe=$_POST['tieude'];
		$NickChat=$_POST['nickchat'];
		$ThuTu=$_POST['thutu'];
		$AnHien=@$_POST['anhien'];
		
		
		$sql1="update yahoo set tieude='$TieuDe',
									nickchat='$NickChat',
									thutu='$ThuTu',
									anhien='$AnHien'
									where idyahoo='$IDYahoo'";
		
		//echo $sql1;
		mysql_query($sql1);
		echo "<script>alert('Chỉnh sửa thành công');window.location='?action=HoTroTrucTuyen';</script>";
	}
	
	if(isset($_POST['submitdt']))
	{
		$TieuDe=$_POST['tieudedt'];
		$SoDienThoai=$_POST['sodienthoai'];
		$ThuTu=$_POST['thutudt'];
		$AnHien=@$_POST['anhiendt'];
		
		
		$sql1="update hotline set tieude='$TieuDe',
									sodienthoai='$SoDienThoai',
									thutu='$ThuTu',
									anhien='$AnHien'
									where idhotline='$IDHotline'";
		
		//echo $sql1;
		mysql_query($sql1);
		echo "<script>alert('Chỉnh sửa thành công');window.location='?action=HoTroTrucTuyen';</script>";
	}
?>
