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
		
		$file1=$_FILES['hinhsp1'];
		if($file1['name']!="")//Neu nhu NSD co upload file
		{
			$UrlHinh1=time().'_'.$file1['name'];
			move_uploaded_file($file1['tmp_name'],"images/hinhsanpham/".$UrlHinh1);
			if(file_exists("images/hinhsanpham/".$r1['hinhsp1'])) unlink("images/hinhsanpham/".$r1['hinhsp1']);
		}
		
		$file2=$_FILES['hinhsp2'];
		if($file2['name']!="")//Neu nhu NSD co upload file
		{
			$UrlHinh2=time().'_'.$file2['name'];
			move_uploaded_file($file2['tmp_name'],"images/hinhsanpham/".$UrlHinh2);
			if(file_exists("images/hinhsanpham/".$r1['hinhsp2'])) unlink("images/hinhsanpham/".$r1['hinhsp2']);
		}
		
		$file3=$_FILES['hinhsp3'];
		if($file3['name']!="")//Neu nhu NSD co upload file
		{
			$UrlHinh3=time().'_'.$file3['name'];
			move_uploaded_file($file3['tmp_name'],"images/hinhsanpham/".$UrlHinh3);
			if(file_exists("images/hinhsanpham/".$r1['hinhsp3'])) unlink("images/hinhsanpham/".$r1['hinhsp3']);
		}
		
		$sql2="update sanpham set maloaisanpham='$MaLoaiSanPham',
									   tensanpham='$TenSanPham',
									   motangan='$MoTaNgan',
									   urlhinh='$UrlHinh',
									   motadaydu='$MoTaDayDu',
									   ngaydang=now(),
									   anhien='$AnHien',
									   thutu='$ThuTu',
									   khoiluong='$KhoiLuong',
									   hinhsp1='$UrlHinh1',
									   hinhsp2='$UrlHinh2',
									   hinhsp3='$UrlHinh3',
									   baiviet='$baiviet'
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
  <!--
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
  -->
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả ngắn :</th>
    <td><textarea class="textarea100" name="motangan" id="motangan"><?php echo $r1['motangan'] ?></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả đầy đủ : </th>
    <td><textarea class="textarea500" name="motadaydu" id="motadaydu"><?php echo $r1['motadaydu'] ?></textarea></td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Bài viết sản phẩm :</th>
    <td><textarea class="textarea100" name="baiviet" id="baiviet"><?php echo $r1['baiviet'] ?></textarea></td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Khối lượng : </th>
    <td><input class="input300" name="khoiluong" id="khoiluong" value="<?php echo $r1['khoiluong'] ?>"></input></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Hình đại diện : </th>
    <td>
	<img src="images/hinhsanpham/<?php echo $r1['urlhinh']?>" title="<?php echo $r1['tensanpham'] ?>"  height="150"/></br>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="urlhinh" id="urlhinh" value="<?php echo $r1['urlhinh'] ?>" /></br>
	<i>(Bỏ qua mục này nếu không muốn thay đổi hình ảnh)</i>
	</td>
  </tr>
  
   <tr>
    <th align="right" valign="middle" scope="row">Hình sản phẩm 1: </th>
    <td>
	<img src="images/hinhsanpham/<?php echo $r1['hinhsp1']?>" title="<?php echo $r1['tensanpham'] ?>"  height="150"/></br>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="hinhsp1" id="hinhsp1" value="<?php echo $r1['hinhsp1'] ?>" /></br>
	<i>(Bỏ qua mục này nếu không muốn thay đổi hình ảnh)</i>
	</td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Hình sản phẩm 2: </th>
    <td>
	<img src="images/hinhsanpham/<?php echo $r1['hinhsp2']?>" title="<?php echo $r1['tensanpham'] ?>"  height="150"/></br>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="hinhsp2" id="hinhsp2" value="<?php echo $r1['hinhsp2'] ?>" /></br>
	<i>(Bỏ qua mục này nếu không muốn thay đổi hình ảnh)</i>
	</td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Hình sản phẩm 3: </th>
    <td>
	<img src="images/hinhsanpham/<?php echo $r1['hinhsp3']?>" title="<?php echo $r1['tensanpham'] ?>"  height="150"/></br>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="hinhsp3" id="hinhsp3" value="<?php echo $r1['hinhsp3'] ?>" /></br>
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
	
	var baivieteditor=CKEDITOR.replace( 'baiviet' );
	CKFinder.setupCKEditor( baivieteditor, 'libs/ckfinder/' ) ;
</script>