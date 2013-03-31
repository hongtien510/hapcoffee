<?php

 if(isset($_GET['lbv']))
  {
	$lbv=$_GET['lbv'];
  }else{
  $lbv = 'GioiThieu';
  }
		  
  switch($lbv)
  {
	case $lbv=='GioiThieu': $tieudebv = 'Giới thiệu';
	break;
	
	case $lbv=='tintuc': $tieudebv = 'Tin tức';
	break;
	
	case $lbv=='truyenthong': $tieudebv = 'Truyền thông';
	break;
	
	case $lbv=='cuocsoncafe': $tieudebv = 'Cuộc sống cafe';
	break;

  }			
		  
	$MaBaiViet=@$_GET['mabv'];
	$sql="select * from baiviet where mabv=$MaBaiViet";
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);

		if(isset($_POST['submit']))
		{
			$TieuDeBGT=$_POST['TieuDeBGT'];
			$loaibaiviet=$_POST['loaibaiviet'];
			$mota=$_POST['mota'];
			$NoiDungBGT=$_POST['NoiDungBGT'];
			$AnHien=@$_POST['anhien'];
			
			$file=$_FILES['urlhinh'];
			if($file['name']!="")
			{
				$UrlHinh=time().'_'.$file['name'];
				move_uploaded_file($file['tmp_name'],"images/hinhsanpham/".$UrlHinh);
				if(file_exists("images/hinhsanpham/".$r['urlhinh'])) unlink("images/hinhsanpham/".$r['urlhinh']);
				
			}
			
			if($TieuDeBGT==""){
				echo '<script>alert("Ban Chưa Nhâp Tiêu Đề Bài Viết")</script>';
			}

			else{
				if($r['tenbaiviet']==""){
					$sql2="insert into baiviet values(NULL,'$TieuDeBGT','$NoiDungBGT','','$AnHien','$loaibaiviet','$mota', '$UrlHinh')";
					mysql_query($sql2);
					echo '<script>alert("Ðang bài viết thành công")</script>';
				}
				if($r['tenbaiviet']!=""){
					$sql2="update baiviet set tenbaiviet='$TieuDeBGT', 
											 noidung='$NoiDungBGT', 
											 alias='', 
											 anhien='$AnHien', 
											 loaibaiviet='$loaibaiviet', 
											 mota='$mota',
											urlhinh='$UrlHinh'											 
											 where mabv=".$r['mabv'];
					//echo $sql2;			 
					mysql_query($sql2);
					echo "<script>alert('Cập nhật thành công');window.location=\"?action=GioiThieu&lbv=$lbv\";</script>";
				}
			}
		}
?>
<div class="BaiViet">
  <caption>
    <h2><?php echo $tieudebv?></h2>
  </caption>
		<form action="" method="post" enctype="multipart/form-data">
		<table width="90%" border="1" cellpadding="0" cellspacing="0">
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Tiêu đề :</th>
			<td width="85%"><input class="input500" type="text" name="TieuDeBGT" id="TieuDeBGT" value="<?php echo $r['tenbaiviet'] ?>"></td>
		  </tr>
		  
		   <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Loại bài viết:</th>
			<td width="85%">
				<select class="select_style_200" name="loaibaiviet" id="loaibaiviet">
				
				<?php
				$selectedgioithieu ='';
				$selectedtintuc='';
				$selectedtruyenthong='';
				$selectedcuocsoncafe='';

				  
				switch ($lbv)
				{			
					case $lbv=='GioiThieu': 
					$selectedgioithieu = " selected='selected' ";
					break;
					
					case $lbv=='tintuc': 
					$selectedtintuc = " selected='selected' ";
					break;
					
					case $lbv=='truyenthong': 
					$selectedtruyenthong = " selected='selected' ";
					break;
					
					case $lbv=='cuocsoncafe': 
					$selectedcuocsoncafe = " selected='selected' ";
					break;
					
					default: $selectedgioithieu = " selected='selected' ";
				}
				?>
				
					<option <?php echo $selectedtintuc ?>  value="tintuc" >Tin tức</option>
					<option <?php echo $selectedtruyenthong ?> value="truyenthong" >Truyền thông</option>
					<option <?php echo $selectedcuocsoncafe ?> value="cuocsoncafe" >Cuộc sống cafe</option>
					<option <?php echo $selectedgioithieu ?>  value="GioiThieu" >Giới thiệu</option>
				</select>
			</td>
		  </tr>
		  
		  
		  <tr>
			<th align="right" valign="top" scope="row">Nội dung : </th>
			<td valign="top">
			<textarea class="textarea700" name="NoiDungBGT" id="NoiDungBGT" cols="45" rows="5"><?php echo $r['noidung'] ?></textarea>
			</td>
		  </tr>
		  
		 <tr>
			<th align="right" valign="top" scope="row">Mô tả : </th>
			<td valign="top">
			<textarea class="textarea700" name="mota" id="mota" cols="45" rows="5"><?php echo $r['mota'] ?></textarea>
			</td>
		 </tr>
		 
		   <tr>
			<th align="right" valign="middle" scope="row">Hình đại diện : </th>
			<td>
			<img src="images/hinhsanpham/<?php echo $r['urlhinh']?>" title="<?php echo $r['tenbaiviet'] ?>"  height="150"/></br>
			<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="urlhinh" id="urlhinh" value="<?php echo $r['urlhinh'] ?>" /></br>
			<i>(Bỏ qua mục này nếu không muốn thay đổi hình ảnh)</i>
			</td>
		  </tr>
  
		  <tr>
		    <th height="29" align="right" valign="middle" scope="row">Ẩn :</th>
		    <td align="left" valign="middle">
		      <input name="anhien" type="checkbox" id="anhien" value="1" <?php if($r['anhien']==1) echo 'checked="checked"'; ?> />
			  <i>(Chọn nếu muốn bài viết không hiển thị)</i>
	        </td>
	      </tr>
		  <tr>
			<th height="29" align="right" valign="top" scope="row">&nbsp;</th>
			<td>
				<input type="submit" name="submit" id="submit" value="Đăng bài viết">
			</td>
		  </tr>
		</table>
		</form>
</div><!--End .BaiViet-->
<script>
	var editor=CKEDITOR.replace( 'NoiDungBGT' );
	CKFinder.setupCKEditor( editor, 'libs/ckfinder/' ) ;
	
	var motaeditor=CKEDITOR.replace( 'mota' );
	CKFinder.setupCKEditor( motaeditor, 'libs/ckfinder/' ) ;
</script>