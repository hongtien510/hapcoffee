<?php include('libs/hamhaydung.php'); ?>
<?php
	$thutumax=GetMaxSTT('phanphoi');
	if(isset($_POST['submit']))
	{
		$TenNhaPhanPhoi=$_POST['TenNhaPhanPhoi'];
		$DiaChi=$_POST['DiaChi'];
		$DienThoai=$_POST['DienThoai'];
		$Email=$_POST['Email'];
		$ThuTu=$_POST['thutu'];
		$AnHien=@$_POST['anhien'];
		$file=$_FILES['urlhinh'];
		if($file['name']!="")
		{
			$UrlHinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"images/HinhAnhNoiPhanPhoi/".$UrlHinh);	
		}
		$sql="insert into phanphoi values('NULL','$TenNhaPhanPhoi','$DiaChi','$DienThoai', '$Email', '$UrlHinh', 'NgoaiNuoc', '$ThuTu', '$AnHien')";
		mysql_query($sql);
		//echo $sql;
		echo'<script>alert("Thêm nhà phân phối thành công");window.location="?action=PhanPhoi_NgoaiNuoc";</script>';
	}
?>

<div class="PhanPhoi">
<div class="pp_left">
	<h2 class="style_text_1">Hệ thống phân phối</h2>
	<ul>
		<li><a href="?action=PhanPhoi">ĐK để trở thành nhà phân phối</a></li>
		<li><a  href="?action=PhanPhoi_TrongNuoc">Hệ thống phân phối trong nước</a></li>
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
      <input class="input500" type="text" name="TenNhaPhanPhoi" id="TenNhaPhanPhoi" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Địa chỉ : </th>
    <td><input class="input500" type="text" name="DiaChi" id="DiaChi" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Điện thoại : </th>
    <td><input class="input300" type="text" name="DienThoai" id="DienThoai" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Email : </th>
    <td><input class="input300" type="text" name="Email" id="Email" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Hình ảnh : </th>
    <td>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="urlhinh" id="urlhinh" /></br>
	<i>(Bỏ qua mục này nếu không muốn thay đổi hình ảnh)</i>
	</td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự :</th>
    <td><input class="input300" type="text" name="thutu" id="thutu" value="<?php echo $thutumax+1; ?>" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Ẩn : </th>
    <td><label>
      <input name="anhien" type="checkbox" id="anhien" value="1" /><i>(Chọn nếu muốn bài viết không hiển thị)</i>
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Thêm nhà phân phối" />
    </label></td>
  </tr>
</table>


		
	</form>
</div><!--pp_right-->

</div><!--PhanPhoi-->