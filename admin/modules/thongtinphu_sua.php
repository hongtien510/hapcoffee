<?php
	$MaThongTinPhu=$_GET['mathongtinphu'];
	$sql1="select * from thongtinphu where mathongtinphu=".$MaThongTinPhu;
	$rs1=mysql_query($sql1);
	$r1=mysql_fetch_assoc($rs1);
	//echo $r1['urlhinh'];
	if(isset($_POST['submit']))
	{
		$TenThongTinPhu=$_POST['tenthongtinphu'];
		$MaThongTinChinh=$_POST['mathongtinchinh'];
		$MoTaNgan=$_POST['motangan'];
		$MoTaDayDu=$_POST['motadaydu'];
		$UrlHinh=$r1['urlhinh'];
		$AnHien=@$_POST['anhien'];
		$ThuTu=$_POST['thutu'];
		$file=$_FILES['urlhinh'];
		if($file['name']!="")//Neu nhu NSD co upload file
		{
			$UrlHinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"images/hinhthongtin/".$UrlHinh);
			if(file_exists("images/hinhthongtin/".$r1['urlhinh'])) unlink("images/hinhthongtin/".$r1['urlhinh']);
		}
		$sql2="update thongtinphu set mathongtinchinh='$MaThongTinChinh',
									   tenthongtinphu='$TenThongTinPhu',
									   motangan='$MoTaNgan',
									   urlhinh='$UrlHinh',
									   motadaydu='$MoTaDayDu',
									   ngaydang=now(),
									   anhien='$AnHien',
									   thutu='$ThuTu'
									   where mathongtinphu=".$r1['mathongtinphu'];
		//echo $sql2;
		mysql_query($sql2);
		echo'<script>alert("Cập nhật thông tin thành công");window.location="?action=ThongTinPhu";</script>';
	}
?>
<div class="ThongTinPhu">
<form action="" method="post" enctype="multipart/form-data"> 
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Thêm thông tin phụ</h2>
  </caption>
  <tr>
    <th width="200" align="right" valign="middle" scope="row">Tên thông tin : </th>
    <td width="494"><label>
      <input class="input300" type="text" name="tenthongtinphu" id="tenthongtinphu" value="<?php echo $r1['tenthongtinphu'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Loại thông tin chính :</th>
	<td><label>
      <select class="select_style_200" name="mathongtinchinh" id="mathongtinchinh">
        <option value="1" selected="selected">Chọn thông tin chính</option>
		<?php 
			$sql="select * from thongtinchinh";
			$rs=mysql_query($sql);
			while($r=mysql_fetch_assoc($rs))
			{
		?>
		<option value="<?php echo $r['mathongtinchinh'] ?>" <?php if($r['mathongtinchinh']==$r1['mathongtinchinh']) echo 'selected="selected"'; ?>><?php echo $r['tenthongtinchinh'] ?></option>
		<?php }?>
      </select>
    </label>
	</td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Hình ảnh : </th>
    <td>
	<img src="images/hinhthongtin/<?php echo $r1['urlhinh']?>" title="<?php echo $r1['tenthongtinphu'] ?>"  height="100"/></br>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="urlhinh" id="urlhinh" />
	</td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả ngắn :</th>
    <td><textarea class="textarea100" name="motangan" id="motangan"><?php echo $r1['motangan'] ?></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả đầy đủ : </th>
    <td><textarea class="textarea500" name="motadaydu" id="motadaydu"><?php echo $r1['motangan'] ?></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự : </th>
    <td><label>
      <input class="input200" type="text" name="thutu" id="thutu" value="<?php echo $r1['thutu'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Ẩn hiện :</th>
    <td><label>
      <input name="anhien" type="checkbox" id="anhien" value="1" /><i>(Chọn nếu muốn bài viết không hiển thị)</i>
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Thêm thông tin" />
    </label></td>
  </tr>
</table>
</form>
</div>
<script>
	var editor=CKEDITOR.replace( 'motadaydu' );
	CKFinder.setupCKEditor( editor, 'libs/ckfinder/' ) ;
</script>