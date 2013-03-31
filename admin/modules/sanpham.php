<div class="SanPham">
<table width="700" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2>Sản phẩm</h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="150" scope="col">Tên sản phẩm</th>
    <th width="179" scope="col">Mô tả</th>
    <th width="150" scope="col">Hình ảnh</th>
	<th width="100" scope="col">Khối lượng</th>
    <th width="45" scope="col">Thứ tự</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  
  <?php
	$sql="select * from sanpham";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++;?></td>
    <td><?php echo $r['tensanpham']; ?></td>
    <td><?php echo $r['motangan']; ?></td>
    <td align="center" valign="middle">
	<img src="images/hinhsanpham/<?php echo $r['urlhinh'];?>" title="<?php echo $r['tensanpham'] ?>" height="150"/>
	</td>
	<td align="center" valign="middle"><?php echo $r['khoiluong']; ?></td>
    <td align="center" valign="middle"><?php echo $r['thutu']; ?></td>
    <td align="center" valign="middle"><?php if($r['anhien']==1)echo "X"; ?></td>
    <td align="center" valign="middle">
	<a href="?action=SanPham_Sua&masanpham=<?php echo $r['masanpham']?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=SanPham_Xoa&masanpham=<?php echo $r['masanpham']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	
	</td>
  </tr>
 <?php }?>
  <tr>
    <td colspan="8" align="right" valign="middle"><label>
      <input onclick="window.location='?action=SanPham_Them'" type="button" name="button" id="button" value="Thêm sản phẩm" />
    </label></td>
    </tr>
</table>





</div><!--End .SanPham-->