<?php include('libs/hamhaydung.php'); ?>
<?php
	$thutumax=GetMaxSTT('sanpham');
	if(isset($_POST['submit']))
	{
		$TenSanPham=$_POST['tensanpham'];
		$MaLoaiSanPham=$_POST['maloaisanpham'];
		$baiviet=$_POST['baiviet'];
		$MoTaNgan=$_POST['motangan'];
		$MoTaDayDu=$_POST['motadaydu'];
		//$HinhAnh=$_POST['urlhinh'];
		$AnHien=@$_POST['anhien'];
		$ThuTu=$_POST['thutu'];
		$KhoiLuong=$_POST['khoiluong'];
		$file=$_FILES['urlhinh'];
		if($file['name']!="")
		{
			$UrlHinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"images/hinhsanpham/".$UrlHinh);
			
		}
		
		/*hinh san pham */
		$file1=$_FILES['hinhsp1'];
		if($file1['name']!="")
		{
			$UrlHinh1=time().'_'.$file1['name'];
			move_uploaded_file($file1['tmp_name'],"images/hinhsanpham/".$UrlHinh1);
			
		}
		
		$file2=$_FILES['hinhsp2'];
		if($file2['name']!="")
		{
			$UrlHinh2=time().'_'.$file2['name'];
			move_uploaded_file($file2['tmp_name'],"images/hinhsanpham/".$UrlHinh2);
			
		}
		
		$file3=$_FILES['hinhsp3'];
		if($file3['name']!="")
		{
			$UrlHinh3=time().'_'.$file3['name'];
			move_uploaded_file($file3['tmp_name'],"images/hinhsanpham/".$UrlHinh3);
			
		}
		/* End hinh san pham */
		
		$sql2="insert into sanpham values('NULL','$MaLoaiSanPham','$TenSanPham','$MoTaNgan','$UrlHinh','$MoTaDayDu',now(),'$AnHien','$ThuTu','$KhoiLuong','$UrlHinh1','$UrlHinh2','$UrlHinh3','$baiviet')";
		//echo $sql2;
		mysql_query($sql2);
		echo'<script>alert("Thêm sản phẩm thành công");window.location="?action=SanPham";</script>';
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
      <input class="input300" type="text" name="tensanpham" id="tensanpham" />
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
		<option value="<?php echo $r['maloaisanpham'] ?>" ><?php echo $r['tenloaisanpham'] ?></option>
		<?php }?>
      </select>
    </label></td>
  </tr>
  -->
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả ngắn :</th>
    <td><textarea class="textarea100" name="motangan" id="motangan"></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả đầy đủ : </th>
    <td><textarea class="textarea500" name="motadaydu" id="motadaydu"></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Bài viết sản phẩm :</th>
    <td><textarea class="textarea100" name="baiviet" id="baiviet"></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Khối lượng : </th>
    <td><input class="input300" name="khoiluong" id="khoiluong"></input></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Hình đại diện : </th>
    <td>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="urlhinh" id="urlhinh" /></td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Hình sản phẩm 1: </th>
    <td>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="hinhsp1" multiple id="hinhsp1" /></td>
  </tr>
  
   <tr>
    <th align="right" valign="middle" scope="row">Hình sản phẩm 2: </th>
    <td>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="hinhsp2" multiple id="hinhsp2" /></td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Hình sản phẩm 3: </th>
    <td>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="hinhsp3" multiple id="hinhsp3" /></td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Ẩn hiện :</th>
    <td><label>
      <input name="anhien" type="checkbox" id="anhien" value="1" />
    </label><i>(Chọn nếu muốn bài viết không hiển thị)</i></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự :</th>
    <td><input class="input300" type="text" name="thutu" id="thutu" value="<?php echo $thutumax+1; ?>"/></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Thêm sản phẩm" />
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