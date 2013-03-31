
<?php 
	$MaTuyenDung=$_GET['matuyendung'];
	$sql="select * from tuyendung where matuyendung='$MaTuyenDung'";
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);
	
	if(isset($_POST['submit']))
	{
		$ViTriTuyenDung=$_POST['vitritd'];
		$SoLuong=$_POST['soluongtd'];
		$NgayDang=$r['ngaydang'];
		$NgayHetHan=$_POST['ngayhethan'];
		$Ngay=substr($NgayHetHan,0,2);
		$Thang=substr($NgayHetHan,3,2);
		$Nam=substr($NgayHetHan,6,4);
		$NgayHetHan=$Nam.'-'.$Thang.'-'.$Ngay;
		$NoiDung=$_POST['mota'];
		$AnHien=@$_POST['anhien'];
		
		
		$sql1="update tuyendung set vitrituyendung='$ViTriTuyenDung',
									soluong='$SoLuong',
									ngaydang='$NgayDang',
									ngayhethan='$NgayHetHan',
									noidung='$NoiDung',
									anhien='$AnHien'
									where matuyendung='$MaTuyenDung'";
		
		//echo $sql1;
		mysql_query($sql1);
		echo "<script>alert('Chỉnh sửa thành công');window.location='?action=TuyenDung';</script>";
	}
?>
<div class="TuyenDung">
<form action="" method="post">
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Đăng tuyển dụng</h2>
  </caption>
  <tr>
    <th width="15%" align="right" valign="middle" scope="row">Vị trí tuyển dụng : </th>
    <td width="85%"><label>
      <input type="text" class="input500" name="vitritd" id="vitritd" value="<?php echo $r['vitrituyendung'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Số Lượng : </th>
    <td><label>
      <input class="input300" type="text" name="soluongtd" id="soluongtd" value="<?php echo $r['soluong'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Ngày hết hạn : </th>
    <td><label>
      <input class="input300" type="text" name="ngayhethan" id="ngayhethan" value=" <?php $date = new DateTime($r['ngayhethan']); echo  $date->format('d-m-Y'); ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="top" scope="row">Mô tả : </th>
    <td><label>
      <textarea class="textarea700" name="mota" id="mota" cols="45" rows="5"><?php echo $r['noidung'] ?></textarea>
	  
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

<table width="700" border="1" cellspacing="0" cellpadding="0">
 <caption>
    <h2>Vị trí tuyển dụng đã đăng</h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="306" scope="col">Vị trí tuyển dụng</th>
    <th width="70" scope="col">Số lượng</th>
    <th width="150" scope="col">Ngày hết hạn</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  <?php
	$sql="select * from tuyendung";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++?></td>
    <td><?php echo $r['vitrituyendung'] ?></td>
    <td align="center" valign="middle"><?php echo $r['soluong'] ?></td>
    <td align="center" valign="middle"><?php $date = new DateTime($r['ngayhethan']); echo  $date->format('d-m-Y'); ?></td>
    <td align="center" valign="middle"><?php if($r['anhien']==1) echo 'X'; ?></td>
    <td align="center" valign="middle">
    <a href="?action=TuyenDung_Sua&matuyendung=<?php echo $r['matuyendung']?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=TuyenDung_Xoa&matuyendung=<?php echo $r['matuyendung']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a></td>
  </tr>
	<?php }?>
  <tr>
    <td colspan="6" align="right"><label>
      <input onclick="window.location.href='?action=TuyenDung_Them'" type="button" name="them" id="them" value="Thêm tuyển dụng" />
    </label></td>
    </tr>
</table>
</div><!--End .TuyenDung-->
<script>
	var editor=CKEDITOR.replace( 'mota' );
	CKFinder.setupCKEditor( editor, 'libs/ckfinder/' ) ;
</script>
