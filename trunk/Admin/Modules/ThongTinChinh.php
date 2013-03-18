<div class="LoaiSanPham">
<table width="653" border="1" cellspacing="0" cellpadding="0">
<caption>
    <h2>Thông tin chính</h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="458" scope="col">Tên loại thông tin</th>
    <th width="70" scope="col">Thứ tự</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  <?php
	$sql="select * from thongtinchinh order by thutu";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++; ?></td>
    <td><?php echo $r['tenthongtinchinh'] ?></td>
    <td align="center" valign="middle"><?php echo $r['thutu'] ?></td>
    <td align="center" valign="middle">
	<a href="?action=ThongTinChinh_Sua&mathongtinchinh=<?php echo $r['mathongtinchinh']?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=ThongTinChinh_Xoa&mathongtinchinh=<?php echo $r['mathongtinchinh']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	
	</td>
  </tr>
  <?php }?>
  <tr>
    <td colspan="4" align="right" valign="middle"><label>
      <input onclick="window.location='?action=ThongTinChinh_Them'" type="button" name="button" id="button" value="Thêm thông tin chính" />
    </label></td>
    </tr>
</table>


</div>