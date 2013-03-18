<?php
	$sql="select * from baiviet where loaibaiviet='PhanPhoi'";
	//echo $sql;
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);

		if(isset($_POST['submit']))
		{
			$TieuDeBGT=$_POST['TieuDeBGT'];
			$NoiDungBGT=$_POST['NoiDungBGT'];
			$AnHien=@$_POST['anhien'];
			if($TieuDeBGT==""){
				echo '<script>alert("Ban Chưa Nhâp Tiêu Đề Bài Viết")</script>';
			}

			else{
				if($r['tenbaiviet']==""){
					$sql2="insert into baiviet values(NULL,'$TieuDeBGT','$NoiDungBGT','','$AnHien','PhanPhoi')";
					mysql_query($sql2);
					echo '<script>alert("Ðang bài viết thành công")</script>';
				}
				if($r['tenbaiviet']!=""){
					$sql2="update baiviet set tenbaiviet='$TieuDeBGT', 
											 noidung='$NoiDungBGT', 
											 alias='', 
											 anhien='$AnHien', 
											 loaibaiviet='PhanPhoi' 
											 where mabv=".$r['mabv'];
					//echo $sql2;			 
					mysql_query($sql2);
					echo '<script>alert("Cap nhat thanh cong");window.location="?action=PhanPhoi";</script>';
				}
			}
		}
?>
<div class="PhanPhoi">
<div class="pp_left">
	<h2 class="style_text_1">Hệ thống phân phối</h2>
	<ul>
		<li><a style="color:orange" href="?action=PhanPhoi">ĐK để trở thành nhà phân phối</a></li>
		<li><a href="?action=PhanPhoi_TrongNuoc">Hệ thống phân phối trong nước</a></li>
		<li><a href="?action=PhanPhoi_NgoaiNuoc">Hệ thống phân phối ngoài nước</a></li>
	</ul>
</div><!--pp_left-->
<div class="pp_right">
	<form action="" method="post">
		<h2 class="style_text_2">Điều kiện để trở thành nhà phân phối</h2>
		<table class="abc" width="700" border="1" cellpadding="0" cellspacing="0">
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Tiêu đề :</th>
			<td width="85%"><input class="input300" type="text" name="TieuDeBGT" id="TieuDeBGT" value="<?php echo $r['tenbaiviet'] ?>"></td>
		  </tr>
		  <tr>
			<th align="right" valign="top" scope="row">Nội dung : </th>
			<td valign="top">
			<textarea class="textarea500" name="NoiDungBGT" id="NoiDungBGT" cols="45" rows="5" ><?php echo $r['noidung'] ?></textarea>
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
</div><!--pp_right-->

</div><!--PhanPhoi-->
<script>
	var editor=CKEDITOR.replace( 'NoiDungBGT' );
	CKFinder.setupCKEditor( editor, 'libs/ckfinder/' ) ;
</script>