<?php
if(!isset($_GET['lpp']))
{ 
		$sql="select * from baiviet where anhien=0 and loaibaiviet='PhanPhoi'";
		$query=mysql_query($sql);
		
		while($row=mysql_fetch_array($query))
		{
			echo "<h2 class='style_text_4'>".$row['tenbaiviet']."</h2></br>";
			echo $row['noidung'];
		}
}else
if(isset($_GET['lpp'])) 
{
// thong tin phan phoi

	if ($_GET['lpp'] == 1 )
	{
		$loaipp = "TrongNuoc";
		$title = " Hệ thống Phân phối của Hưng Nguyên tại Việt Nam:";
	}
	else
	{
		$loaipp = "NgoaiNuoc";
		$title = " Hệ thống Phân phối của Hưng Nguyên trên Thế giới:";
	}
	
	$pp = "3";
	@$p_now=$_GET['page'];

	$total = mysql_result(mysql_query("select COUNT(maphanphoi)  from PhanPhoi where anhien=0 AND loaiphanphoi='$loaipp'"),0);
	$numofpages = $total / $pp;
	if (!$p_now) {$page = 1;}
	else {$page = $p_now;}
	$limitvalue = $page * $pp - ($pp);

	$sql="select * from PhanPhoi where anhien=0 AND loaiphanphoi='$loaipp'  order by thutu LIMIT $limitvalue, $pp";;
	$query=mysql_query($sql);

	?>
	
	<table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
		<tbody>
			<tr>
				<td>
					<img width="600" height="200" src="images/hethongphanphoi.gif" >
				</td>
			</tr>
				<tr>
					<td>
					<br>&nbsp;&nbsp;<b><?php echo "<span class='style_text_4'>".$title.'</span>'; ?></b><br><br>
				</td>
			</tr>
		</tbody>
	</table>
	<?php
	while($row=mysql_fetch_array($query))
	{
		// gan link than thien vao
		//$link = ConvertUrl("?action=PhanPhoi&idsp=$row[maPhanPhoi]");
		if(trim($row['urlhinh'])!="")
		{
		$urlhinhanh = "images/HinhAnhNoiPhanPhoi/".$row['urlhinh'];
		}
		else
		{
		$urlhinhanh = "images/khongcohinh.jpg";
		}
	
	?>


		
	<table class="border_dotted" width="100%" cellspacing="0" cellpadding="4" border="0" align="center">
	<tbody>
	<tr class="border_dotted">
		<td width="482">
		<table width="100%" cellspacing="0" cellpadding="2" border="0" align="center">
			<tbody>
				<tr><td colspan="2"><?php echo '<span class="style_text_3">'.$row['tenphanphoi'].'</span>'; ?></td></tr>
				<tr><td width="60">Địa chỉ:</td><td><?php echo $row['diachi'] ?></td></tr>		
				<tr><td>Điện thoại:</td><td><?php echo $row['dienthoai'] ?> </td></tr>
				<tr><td>Email:</td><td><?php echo $row['email'] ?></td></tr>
			</tbody>
		</table>
		</td>
		<td>
		<img width="150" height="100" src="<?php echo $urlhinhanh ?>" class="IMG">
		</td>
	</tr>
	</tbody>
	</table>

	
	<table height="1"><tbody><tr><td><center><img src="images/linepp.gif"></center></td></tr></tbody></table>
	<?php

	}

// in phân trang
// echo 'Pages: '.ceil($numofpages).'<br>';
page_div("PhanPhoi.html?lpp=$_GET[lpp]&page=%d_pg", "10", ceil($numofpages), $page);
}

	
?>
