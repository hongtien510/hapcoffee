<?php
	$MaSanPham=$_GET['masanpham'];
	$sql1="select * from sanpham where masanpham=".$MaSanPham;
	$rs1=mysql_query($sql1);
	$r1=mysql_fetch_assoc($rs1);
	
	if(isset($_POST['submit']))
	{
		$TenSanPham=$_POST['tensanpham'];
		$MaLoaiSanPham=$_POST['maloaisanpham'];
		$MoTaNgan=$_POST['motangan'];
		$MoTaDayDu=$_POST['motadaydu'];
		$UrlHinh=$r1['urlhinh'];
		$AnHien=@$_POST['anhien'];
		$ThuTu=$_POST['thutu'];
		$KhoiLuong=$_POST['khoiluong'];
		$file=$_FILES['urlhinh'];
		//print_r($file);
		//echo $file['tmp_name'];//Duong dan den file trong thu muc tam cua OS
		if($file['name']!="")//Neu nhu NSD co upload file
		{
			$UrlHinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"images/hinhsanpham/".$UrlHinh);
			if(file_exists("images/hinhsanpham/".$r1['urlhinh'])) unlink("images/hinhsanpham/".$r1['urlhinh']);
		}
		
		$sql2="update sanpham set maloaisanpham='$MaLoaiSanPham',
									   tensanpham='$TenSanPham',
									   motangan='$MoTaNgan',
									   urlhinh='$UrlHinh',
									   motadaydu='$MoTaDayDu',
									   ngaydang=now(),
									   anhien='$AnHien',
									   thutu='$ThuTu',
									   khoiluong='$KhoiLuong'
									   where masanpham=".$r1['masanpham'];
		//echo $sql2;
		mysql_query($sql2);
		echo'<script>alert("Cập nhật sản phẩm thành công");window.location="?action=SanPham";</script>';
	}
?>
<div class="SanPham">
<form action="" method="post" enctype="multipart/form-data">
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Thêm sản phẩm</h2>
  </caption>
  <tr>
    <th width="200" align="right" valign="middle" scope="row">Tên sản phẩm : </th>
    <td width="494"><label>
      <input class="input300" type="text" name="tensanpham" id="tensanpham" value="<?php echo $r1['tensanpham'] ?>" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Loại sản phẩm :</th>
    <td><label>
      <select class="select_style_200" name="maloaisanpham" id="maloaisanpham">
        <option value="1" selected="selected">Chọn loại sản phẩm</option>
		<?php 
			$sql="select * from loaisanpham";
			$rs=mysql_query($sql);
			while($r=mysql_fetch_assoc($rs))
			{
		?>
		<option value="<?php echo $r['maloaisanpham'] ?>" <?php if($r['maloaisanpham']==$r1['maloaisanpham']) echo 'selected="selected"'; ?>><?php echo $r['tenloaisanpham'] ?></option>
		<?php }?>
      </select>
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả ngắn :</th>
    <td><textarea class="textarea100" name="motangan" id="motangan"><?php echo $r1['motangan'] ?></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả đầy đủ : </th>
    <td><textarea class="textarea500" name="motadaydu" id="motadaydu"><?php echo $r1['motadaydu'] ?></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Khối lượng : </th>
    <td><input class="input300" name="khoiluong" id="khoiluong" value="<?php echo $r1['khoiluong'] ?>"></input></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Hình ảnh : </th>
    <td>
	<img src="images/hinhsanpham/<?php echo $r1['urlhinh']?>" title="<?php echo $r1['tensanpham'] ?>"  height="150"/></br>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="urlhinh" id="urlhinh" value="<?php echo $r1['urlhinh'] ?>" /></br>
	<i>(Bỏ qua mục này nếu không muốn thay đổi hình ảnh)</i>
	</td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Ẩn hiện :</th>
    <td><label>
      <input name="anhien" type="checkbox" id="anhien" value="1" <?php if($r1['anhien']==1)echo 'checked="checked"'; ?>" />
    </label><i>(Chọn nếu muốn bài viết không hiển thị)</i></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự :</th>
    <td><input class="input300" type="text" name="thutu" id="thutu" value="<?php echo $r1['thutu'] ?>" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Sửa sản phẩm" />
    </label></td>
  </tr>
</table>
</form>
</div>
<script>
	var editor=CKEDITOR.replace( 'motadaydu' );
	CKFinder.setupCKEditor( editor, 'libs/ckfinder/' ) ;
</script>