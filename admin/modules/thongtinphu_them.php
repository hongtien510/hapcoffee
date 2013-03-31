<?php include('libs/hamhaydung.php'); ?>
<?php
	$thutumax=GetMaxSTT('thongtinphu');
	if(isset($_POST['submit']))
	{
		$TenThongTinPhu=$_POST['tenthongtinphu'];
		$MaThongTinChinh=$_POST['mathongtinchinh'];
		$MoTaNgan=$_POST['motangan'];
		$MoTaDayDu=$_POST['motadaydu'];
		$AnHien=@$_POST['anhien'];
		$ThuTu=$_POST['thutu'];
		$file=$_FILES['urlhinh'];
		if($file['name']!="")
		{
			$UrlHinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"images/hinhthongtin/".$UrlHinh);
			
		}
	
		
		$sql2="insert into thongtinphu values('NULL','$MaThongTinChinh','$TenThongTinPhu','$MoTaNgan','$UrlHinh','$MoTaDayDu',now(),'$AnHien','$ThuTu')";
		//echo $sql2;
		mysql_query($sql2);
		echo'<script>alert("Thêm thông tin thành công");window.location="?action=ThongTinPhu";</script>';
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
      <input class="input300" type="text" name="tenthongtinphu" id="tenthongtinphu" />
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Loại thông tin chính :</th>
    <td><label>
      <select class="select_style_200" name="mathongtinchinh" id="mathongtinchinh">
        <option value="1" selected="selected">Chọn loại thông tin chính</option>
		<?php 
			$sql="select * from thongtinchinh";
			$rs=mysql_query($sql);
			while($r=mysql_fetch_assoc($rs))
			{
		?>
		<option value="<?php echo $r['mathongtinchinh'] ?>" ><?php echo $r['tenthongtinchinh'] ?></option>
		<?php }?>
      </select>
    </label></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Hình ảnh : </th>
    <td><input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="urlhinh" id="urlhinh" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả ngắn :</th>
    <td><textarea class="textarea100" name="motangan" id="motangan"></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả đầy đủ : </th>
    <td><textarea class="textarea500" name="motadaydu" id="motadaydu"></textarea></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự : </th>
    <td><label>
      <input class="input200" type="text" name="thutu" id="thutu" value="<?php echo $thutumax+1; ?>" />
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