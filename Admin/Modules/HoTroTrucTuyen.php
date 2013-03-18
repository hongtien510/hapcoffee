<div class="HoTro">
<h2 class="style_text_2">Hỗ trợ trực tuyến</h2>
<table width="90%" border="1" cellspacing="0" cellpadding="0">
 <caption>
    <h2>Hỗ trợ trực tuyến</h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="210" scope="col">Title</th>
    <th width="216" scope="col">Nick chat Yahoo</th>
    <th width="100" scope="col">Thứ tự</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  <?php
	$sql="select * from yahoo order by thutu";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++?></td>
    <td><?php echo $r['tieude'] ?></td>
    <td><?php echo $r['nickchat'] ?></td>
    <td align="center" valign="middle"><?php echo $r['thutu'] ?></td>
    <td align="center" valign="middle"><?php if($r['anhien']==1) echo 'X'; ?></td>
    <td align="center" valign="middle">
    <a href="?action=HoTroTrucTuyen_Sua&idyahoo=<?php echo $r['idyahoo']?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=HoTroTrucTuyen_Xoa&idyahoo=<?php echo $r['idyahoo']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	</td>
  </tr>
	<?php }?>
  <tr>
    <td colspan="6" align="right"><label>
      <input onclick="window.location.href='?action=HoTroTrucTuyen_Them&act=yahoo'" type="button" name="them" id="them" value="Thêm hỗ trợ" />
    </label></td>
    </tr>
</table>

<table width="90%" border="1" cellspacing="0" cellpadding="0">
 <caption>
    <h2>Hỗ trợ qua điện thoại</h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="210" scope="col">Title</th>
    <th width="216" scope="col">Số điện thoại</th>
    <th width="100" scope="col">Thứ tự</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  <?php
	$sql="select * from hotline order by thutu";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++?></td>
    <td><?php echo $r['tieude'] ?></td>
    <td><?php echo $r['sodienthoai'] ?></td>
    <td align="center" valign="middle"><?php echo $r['thutu'] ?></td>
    <td align="center" valign="middle"><?php if($r['anhien']==1) echo 'X'; ?></td>
    <td align="center" valign="middle">
    <a href="?action=HoTroTrucTuyen_Sua&idhotline=<?php echo $r['idhotline']?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=HoTroTrucTuyen_Xoa&idhotline=<?php echo $r['idhotline']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	</td>
  </tr>
	<?php }?>
  <tr>
    <td colspan="6" align="right"><label>
      <input onclick="window.location.href='?action=HoTroTrucTuyen_Them&act=hotline'" type="button" name="them" id="them" value="Thêm hỗ trợ" />
    </label></td>
    </tr>
</table>



</div><!--End .TuyenDung-->