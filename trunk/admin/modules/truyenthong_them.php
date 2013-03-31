<?php
		if(isset($_POST['submit']))
		{
			$TieuDeBGT=$_POST['TieuDeBGT'];
			$NoiDungBGT=$_POST['NoiDungBGT'];
			$AnHien=@$_POST['anhien'];
			if($TieuDeBGT==""){
				echo '<script>alert("Ban Chưa Nhâp Tiêu Đề Bài Viết")</script>';
			}

			else{
					$sql2="insert into baiviet values(NULL,'$TieuDeBGT','$NoiDungBGT','','$AnHien','truyenthong')";
					mysql_query($sql2);
					echo '<script>alert("Thêm bài viết thành công");window.location="?action=TruyenThong";</script>';
			}
		}
?>
<div class="BaiViet">
<h2 class="style_text_2">Giới thiệu</h2>
		<form action="" method="post">
		<table width="90%" border="1" cellpadding="0" cellspacing="0">
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Tiêu đề :</th>
			<td width="85%"><input class="input500" type="text" name="TieuDeBGT" id="TieuDeBGT" value=""></td>
		  </tr>
		  <tr>
			<th align="right" valign="top" scope="row">Nội dung : </th>
			<td valign="top">
			<textarea class="textarea700" name="NoiDungBGT" id="NoiDungBGT" cols="45" rows="5"></textarea>
			</td>
		  </tr>
		  <tr>
		    <th height="29" align="right" valign="middle" scope="row">Ẩn :</th>
		    <td align="left" valign="middle">
		      <input name="anhien" type="checkbox" id="anhien" value="1" />
			  <i>(Chọn nếu muốn bài viết không hiển thị)</i>
	        </td>
	      </tr>
		  <tr>
			<th height="29" align="right" valign="top" scope="row">&nbsp;</th>
			<td>
				<input type="submit" name="submit" id="submit" value="Thêm bài viết">
			</td>
		  </tr>
		</table>
		</form>
</div><!--End .BaiViet-->
<script>
	var editor=CKEDITOR.replace( 'NoiDungBGT' );
	CKFinder.setupCKEditor( editor, 'libs/ckfinder/' ) ;
</script>