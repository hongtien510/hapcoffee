<div class="SanPham">
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Tin Tức</h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="150" scope="col">Bài viết</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  
  <?php
	$sql="select * from baiviet where loaibaiviet='truyenthong'";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++;?></td>
    <td><?php echo $r['tenbaiviet']; ?></td>
    <td align="center" valign="middle"><?php if($r['anhien']==1)echo "X"; ?></td>
    <td align="center" valign="middle">
	<a href="?action=TruyenThong_ChiTiet&mabv=<?php echo $r['mabv']?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=TruyenThong_Xoa&mabv=<?php echo $r['mabv']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	
	</td>
  </tr>
 <?php }?>
  <tr>
    <td colspan="7" align="right" valign="middle"><label>
      <input onclick="window.location='?action=TruyenThong_Them'" type="button" name="button" id="button" value="Thêm bài tin tức" />
    </label></td>
    </tr>
</table>





</div><!--End .SanPham-->