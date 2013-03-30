<?php
  if(isset($_GET['lbv']))
  {
	$lbv=$_GET['lbv'];
  }else{
  $lbv = 'GioiThieu';
  }
  
  switch($lbv)
  {
	case $lbv=='GioiThieu': $tieudebv = 'Giới thiệu';
	break;
	
	case $lbv=='tintuc': $tieudebv = 'Tin tức';
	break;
	
	case $lbv=='truyenthong': $tieudebv = 'Truyền thông';
	break;
	
	case $lbv=='cuocsoncafe': $tieudebv = 'Cuộc sống cafe';
	break;

  }
?>

<div class="SanPham">
<table width="90%" border="1" cellspacing="0" cellpadding="0">
  <caption>
    <h2><?php echo $tieudebv?></h2>
  </caption>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="150" scope="col">Bài viết</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  
  <?php

	$sql="select * from baiviet where loaibaiviet='$lbv'";
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
	<a href="?action=GioiThieu_ChiTiet&mabv=<?php echo $r['mabv']?>&lbv=<?php echo $lbv?>"><img src="images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=GioiThieu_Xoa&mabv=<?php echo $r['mabv']?>&lbv=<?php echo $lbv?>"><img src="images/b_drop.png" width="16" height="16" border="0" /></a>
	
	</td>
  </tr>
 <?php }?>
  <tr>
    <td colspan="7" align="right" valign="middle"><label>
      <input onclick="window.location='?action=GioiThieu_Them&lbv=<?php echo $lbv?>'" type="button" name="button" id="button" value="Thêm bài giới thiệu" />
    </label></td>
    </tr>
</table>





</div><!--End .SanPham-->