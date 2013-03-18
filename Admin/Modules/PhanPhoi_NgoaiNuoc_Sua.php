<?php
	$MaPhanPhoi=$_GET['maphanphoi'];
	$sql1="select * from phanphoi where maphanphoi='$MaPhanPhoi'";
	$rs=mysql_query($sql1);
	$r=mysql_fetch_assoc($rs);
	
	if(isset($_POST['submit']))
	{
		$TenNhaPhanPhoi=$_POST['TenNhaPhanPhoi'];
		$DiaChi=$_POST['DiaChi'];
		$DienThoai=$_POST['DienThoai'];
		$Email=$_POST['Email'];
		$UrlHinh=$r['urlhinh'];
		$ThuTu=$_POST['thutu'];
		$AnHien=@$_POST['anhien'];
		$file=$_FILES['urlhinh'];
		//print_r($file);
		//echo $file['tmp_name'];//Duong dan den file trong thu muc tam cua OS
		if($file['name']!="")//Neu nhu NSD co upload file
		{
			$UrlHinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"images/HinhAnhNoiPhanPhoi/".$UrlHinh);
			if(file_exists("images/HinhAnhNoiPhanPhoi/".$r['urlhinh'])) unlink("images/HinhAnhNoiPhanPhoi/".$r['urlhinh']);
		}
		$sql="update phanphoi set tenphanphoi='$TenNhaPhanPhoi',
								  diachi='$DiaChi',
								  dienthoai='$DienThoai', 
								  email='$Email', 
								  urlhinh='$UrlHinh', 
								  loaiphanphoi='NgoaiNuoc', 
								  thutu='$ThuTu', 
								  anhien='$AnHien'
								  where maphanphoi=".$r['maphanphoi'];
		mysql_query($sql);
		//echo $sql;
		echo'<script>alert("Cập nhật nhà phân phối thành công");window.location="?action=PhanPhoi_NgoaiNuoc";</script>';
	}
?>

<div class="PhanPhoi">
<div class="pp_left">
	<h2 class="style_text_1">Hệ thống phân phối</h2>
	<ul>
		<li><a href="?action=PhanPhoi">ĐK để trở thành nhà phân phối</a></li>
		<li><a href="?action=PhanPhoi_TrongNuoc">Hệ thống phân phối trong nước</a></li>
		<li><a style="color:orange" href="?action=PhanPhoi_NgoaiNuoc">Hệ thống phân phối ngoài nước</a></li>
	</ul>
</div><!--pp_left-->
<div class="pp_right">
<form action="" method="post" enctype="multipart/form-data">
	
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Thêm nhà phân phối</h2>
  </caption>
  <tr>
    <th width="20%" align="right" valign="middle" scope="row">Tên nhà phân phối : </th>
    <td width="80%"><label>
      <input class="input500" type="text" name="TenNhaPhanPhoi" id="TenNhaPhanPhoi" value="<?php echo $r['tenphanphoi'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Địa chỉ : </th>
    <td><input class="input500" type="text" name="DiaChi" id="DiaChi" value="<?php echo $r['diachi'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Điện thoại : </th>
    <td><input class="input300" type="text" name="DienThoai" id="DienThoai" value="<?php echo $r['dienthoai'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Email : </th>
    <td><input class="input300" type="text" name="Email" id="Email" value="<?php echo $r['email'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Hình ảnh : </th>
    <td>
	<img src="images/HinhAnhNoiPhanPhoi/<?php echo $r['urlhinh']?>" title="<?php echo $r['tenphanphoi'] ?>"  height="150"/></br>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="urlhinh" id="urlhinh" value="<?php echo $r['urlhinh'] ?>" /></br>
	<i>(Bỏ qua mục này nếu không muốn thay đổi hình ảnh)</i>
	</td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự :</th>
    <td><input class="input300" type="text" name="thutu" id="thutu" value="<?php echo $r['thutu'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Ẩn : </th>
    <td><label>
      <input name="anhien" type="checkbox" id="anhien" value="1" <?php if($r['anhien']==1) echo 'checked="checked"'; ?> />
	  <i>(Chọn nếu muốn bài viết không hiển thị)</i>
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Chỉnh sửa" />
    </label></td>
  </tr>
</table>


		
	</form>
</div><!--pp_right-->

</div><!--PhanPhoi-->