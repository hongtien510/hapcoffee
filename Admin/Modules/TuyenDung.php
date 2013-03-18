<div class="TuyenDung">
<h2 class="style_text_2">Tuyển dụng</h2>
<table width="700" border="1" cellspacing="0" cellpadding="0">
 <caption>
    <h2>Vị trí tuyển dụng đã đăng</h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
	<th width="90" scope="col">Mã tuyển dụng</th>
    <th width="306" scope="col">Vị trí tuyển dụng</th>
    <th width="70" scope="col">Số lượng</th>
    <th width="150" scope="col">Ngày hết hạn</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  <?php
	$sql="select * from tuyendung";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++?></td>
	<td align="center" valign="middle"><?php echo $r['matuyendung']?></td>
    <td><?php echo $r['vitrituyendung'] ?></td>
    <td align="center" valign="middle"><?php echo $r['soluong'] ?></td>
    <td align="center" valign="middle"><?php $date = new DateTime($r['ngayhethan']); echo  $date->format('d-m-Y'); ?></td>
    <td align="center" valign="middle"><?php if($r['anhien']==1) echo 'X'; ?></td>
    <td align="center" valign="middle">
    <a href="?action=TuyenDung_Sua&matuyendung=<?php echo $r['matuyendung']?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=TuyenDung_Xoa&matuyendung=<?php echo $r['matuyendung']?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	</td>
  </tr>
	<?php }?>
  <tr>
    <td colspan="7" align="right"><label>
      <input onclick="window.location.href='?action=TuyenDung_Them'" type="button" name="them" id="them" value="Thêm tuyển dụng" />
    </label></td>
    </tr>
</table>




</div><!--End .TuyenDung-->