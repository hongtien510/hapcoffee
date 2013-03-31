<div class="Video">
<h2 class="style_text_2">Video</h2>
<table width="700" border="1" cellspacing="0" cellpadding="0">
 <caption>
    <h2>Video</h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="210" scope="col">Tên video</th>
    <th width="216" scope="col">Đường dẩn đến video</th>
    <th width="100" scope="col">Thứ tự</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  <?php
	$sql="select * from video order by thutu";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++?></td>
    <td><?php echo $r['tieude'] ?></td>
    <td><?php echo $r['urlvideo'] ?></td>
    <td align="center" valign="middle"><?php echo $r['thutu'] ?></td>
    <td align="center" valign="middle"><?php if($r['anhien']==1) echo 'X'; ?></td>
    <td align="center" valign="middle">
    <a href="?action=Video_Sua&idvideo=<?php echo $r['idvideo']?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=Video_Xoa&idvideo=<?php echo $r['idvideo']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	</td>
  </tr>
	<?php }?>
  <tr>
    <td colspan="6" align="right"><label>
      <input onclick="window.location.href='?action=Video_Them'" type="button" name="them" id="them" value="Thêm Video" />
    </label></td>
    </tr>
</table>




</div><!--End .TuyenDung-->