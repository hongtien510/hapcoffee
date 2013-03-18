<?php
	$maslider=$_GET['maslider'];
	$sql1="select * from slider_bottom where maslider=".$maslider;
	$rs1=mysql_query($sql1);
	$r1=mysql_fetch_assoc($rs1);
	
	if(isset($_POST['submit']))
	{
		$tenhinh=$_POST['tenhinh'];
		$tieude=$_POST['tieude'];
		$noidung=$_POST['noidung'];
		$anhien=@$_POST['anhien'];
		$thutu=$_POST['thutu'];		
		
		$sql2="update slider_bottom set tenhinh='$tenhinh',
									   tieude='$tieude',
									   noidung='$noidung',
									   anhien='$anhien',
									   thutu='$thutu'
									   where maslider=".$maslider;
		// echo $sql2;
		mysql_query($sql2);
		echo'<script>alert("Cập nhật sản phẩm thành công");window.location="?action=HinhSlideBottom";</script>';
	}
?>
<div class="SanPham">
<form action="" method="post" enctype="multipart/form-data">
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Cập nhật thông tin hình ảnh</h2>
  </caption>

   <tr>
    <th width="200" align="right" valign="middle" scope="row">hình ảnh : </th>
    <td width="494"><label>     
	  <img src="images/SliderHinhAnh/<?php echo $r1['tenhinh'];?>" title="<?php echo $r1['tenhinh'] ?>" height="100"/>
    </label>
	
	</td>
  </tr>  
  <tr>
    <th width="200" align="right" valign="middle" scope="row">Tên hình ảnh : </th>
    <td width="494"><label>
      <input class="input300" type="text" name="tenhinh" id="tenhinh" value="<?php echo $r1['tenhinh'] ?>" />	
    </label>
	
	</td>
  </tr>
  
    <tr>	
    <th width="200" align="right" valign="middle" scope="row">Tiêu đề: </th>
    <td width="494"><label>     
	  <input class="input300" type="text" name="tieude" id="tieude" value="<?php echo $r1['tieude'] ?>" />	
    </label>
	
	</td>
	 <tr>	
    <th width="200" align="right" valign="middle" scope="row">Nội dung: </th>
    <td width="494"><label>     
	 <textarea class="textarea100" name="noidung" id="noidung"><?php echo $r1['noidung'] ?></textarea>
    </label>
	
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