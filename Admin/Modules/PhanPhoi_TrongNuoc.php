<div class="PhanPhoi">
<div class="pp_left">
	<h2 class="style_text_1">Hệ thống phân phối</h2>
	<ul>
		<li><a href="?action=PhanPhoi">ĐK để trở thành nhà phân phối</a></li>
		<li><a style="color:orange" href="?action=PhanPhoi_TrongNuoc">Hệ thống phân phối trong nước</a></li>
		<li><a href="?action=PhanPhoi_NgoaiNuoc">Hệ thống phân phối ngoài nước</a></li>
	</ul>
</div><!--pp_left-->
<div class="pp_right">
	<form action="" method="post">
		<h2 class="style_text_2">Hệ thống phân phối trong nước</h2>
        <table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="188" scope="col">Tên nhà phân phối</th>
    <th width="188" scope="col">Địa chỉ</th>
    <th width="150" scope="col">Hình ảnh</th>
    <th width="45" scope="col">Thứ tự</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  <?php
	$sql="select * from phanphoi where loaiphanphoi='TrongNuoc' order by thutu";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++?></td>
    <td><?php echo $r['tenphanphoi'] ?></td>
    <td><?php echo $r['diachi'] ?></td>
    <td align="center" valign="middle">
	<img src="images/HinhAnhNoiPhanPhoi/<?php echo $r['urlhinh']?>" height="150" title="<?php echo $r['tenphanphoi']?>" />
	</td>
    <td align="center" valign="middle"><?php echo $r['thutu'] ?></td>
    <td align="center" valign="middle"><?php  if($r['anhien']==1) echo 'X'; ?></td>
    <td align="center" valign="middle">
	<a href="?action=PhanPhoi_TrongNuoc_Sua&maphanphoi=<?php echo $r['maphanphoi']?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=PhanPhoi_TrongNuoc_Xoa&maphanphoi=<?php echo $r['maphanphoi']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	</td>
  </tr>
  <?php }?>
  <tr>
    <td colspan="7" align="right" valign="middle">
	<input onclick="window.location.href='?action=PhanPhoi_TrongNuoc_Them'" type="button" name="them" id="them" value="Thêm nhà phân phối" /></td>
	
    </tr>
</table>


		
		</form>
</div><!--pp_right-->

</div><!--PhanPhoi-->