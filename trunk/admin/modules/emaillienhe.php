<?php
	// $MaBaiViet=@$_GET['mabv'];
	$sql="select tenemail from maillienhe where maemail=1";
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);

		if(isset($_POST['submit']))
		{
			$tenemail=$_POST['tenemail'];
			
			if($tenemail==""){
				echo '<script>alert("Ban Chưa Nhâp Email")</script>';
			}

			else
			{
				
				
					$sql="update maillienhe set tenemail='$tenemail' where maemail=1";
					//echo $sql2;			 
					mysql_query($sql);
					echo '<script>alert("Cập nhật thành công");window.location="?action=EmailLienHe";</script>';
				
			}
		}
?>
<div class="BaiViet">
<h2 class="style_text_2">Email Liên Hệ</h2>
		<form action="" method="post">
		<table width="90%" border="1" cellpadding="0" cellspacing="0">
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Email gửi tới :</th>
			<td width="85%"><input class="input500" type="text" name="tenemail" id="tenemail" value="<?php echo $r['tenemail'] ?>"></td>
		  </tr>
		  <tr>
			<th height="29" align="right" valign="top" scope="row">&nbsp;</th>
			<td>
				<input type="submit" name="submit" id="submit" value="Cập nhật Email">
			</td>
		  </tr>
		</table>
		</form>
</div>
