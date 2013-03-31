<div class="SanPham">
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Slider hình ảnh banner</h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="300" scope="col">Tên hình ảnh</th>
    <th width="100" scope="col">Ẩn</th>
    <th width="75" colspan="2" scope="col">Công cụ</th>
  </tr>
  <?php
	$sql="select * from slider_top";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++;?></td>
    <td><?php echo $r['tenhinh']; ?></td>
    <td align="center" valign="middle"><?php if($r['anhien']==0)echo "Đang mở"; ?></td>
    <td align="center" valign="middle">
	<a href="?action=HinhSlideTop_hienhinh&maslider=<?php echo $r['maslider']?>&anhien=<?php echo $r['anhien'] ?>"><img src="images/apply_f2.png" width="16" height="16" border="0" /></a>
    
	</td>
	 <td align="center" valign="middle">	
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=HinhSlideTop_xoahinh&maslider=<?php echo $r['maslider']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	
	</td>
  </tr>
 <?php }?>
   <tr>
    <td colspan="7" align="right" valign="middle">kích thước quy định (630x230px)<label>
      <input onclick="window.location='?action=HinhSlideTop_fresh'" type="button" name="button" id="button" value="Làm mới/cập nhật" />
    </label></td>
    </tr>

</table>





</div><!--End .SanPham-->