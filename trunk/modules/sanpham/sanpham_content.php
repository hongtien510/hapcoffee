<?php

if(isset($_GET['mlsp'])) 
{
$maloaisanpham = $_GET['mlsp'];
}
else
{
	$sql="select maloaisanpham, tenloaisanpham  from loaisanpham order by thutu desc";
	$query=mysql_query($sql);
	$r=mysql_fetch_assoc($query);
	$maloaisanpham = $r['maloaisanpham'];
}	
if(isset($_GET['idsp'])) 
{
// chi tiet san pham

	$sql="select *  from sanpham where anhien=0 AND masanpham=".$_GET['idsp'];
	$query=mysql_query($sql);
	
	$r=mysql_fetch_assoc($query);
	echo '<span class="style_text_3">'.$r['tensanpham'].'</span><br><br>';
	
//	echo $r['tensanpham'];
	echo $r['motadaydu'];
	/*
	while($row=mysql_fetch_array($query))
	{
		echo $row['motadaydu'];
	}
	*/
	?>	
	<br><br>
	<center>
	<?php echo buttonfooter() ?>
	</center>
	
		<?php
		$maloaisanpham = $_GET['malsp'];
		$masanpham = $_GET['idsp'];
		// TODO: kiem tra them dieu kien khac id san pham hien tai
		$sql="select *  from sanpham where anhien=0 AND maloaisanpham=$maloaisanpham AND masanpham!= $masanpham order by ngaydang Desc Limit 0,10";
		$query=mysql_query($sql);
		
		if(mysql_num_rows($query)!=0)
		{		
		?>
				
			<table width="99%" cellspacing="0" cellpadding="2" border="0" align="center">
				<tbody>
					<tr>
						<td height="18" class="textxambold">
							<br><img height="1" src="images/line5.gif"><br>
							<br>
							<b>&nbsp;Các sản phẩm cùng loại:</b>
						</td>
					</tr>
					<tr>
						<td class="textxambold1">
						<?php			
						while($row=mysql_fetch_array($query))
						{
						$link = ConvertUrl("?action=sanpham&idsp=$row[masanpham]&malsp=$maloaisanpham");					
						?>
							<div>
								<span class="spctl_img"><img src="images/chambi2.gif"></span>
								<span>
									<a href="<?php echo $link ?>"><?php echo $row['tensanpham'] ?></a>
								</span>
							</div>	
						<?php			
							
						}
						?>						
						</td>
					</tr>
				</tbody>
			</table>
			
		<?php
		}
		?>
				
	
	<?php
}
else
{
// thong tin loai san pham
	$sql1="select tenloaisanpham from loaisanpham where maloaisanpham=".$maloaisanpham;
	$rs1=mysql_query($sql1);
	$r1=mysql_fetch_assoc($rs1);
	echo '<span class="style_text_4">'.$r1['tenloaisanpham'].'</span>';
		
	$pp = "6";
	@$p_now=$_GET['page'];

	$total = mysql_result(mysql_query("select COUNT(masanpham)   from sanpham where anhien=0 AND maloaisanpham=".$maloaisanpham),0);
	$numofpages = $total / $pp;
	if (!$p_now) {$page = 1;}
	else {$page = $p_now;}
	$limitvalue = $page * $pp - ($pp);

	$sql="select masanpham, urlhinh, motangan, tensanpham  from sanpham where anhien=0 AND maloaisanpham=".$maloaisanpham ." order by thutu DESC LIMIT $limitvalue, $pp";;
	$query=mysql_query($sql);

		
	
	while($row=mysql_fetch_array($query))
	{
		// gan link than thien vao
		$link = ConvertUrl("?action=SanPham&idsp=$row[masanpham]&malsp=$maloaisanpham");
		if(trim($row['urlhinh'])!="")
		{
		$urlhinhanh = "images/hinhsanpham/".$row['urlhinh'];
		}
		else
		{
		$urlhinhanh = "images/hinhsanpham/khongcohinh.jpg";
		}
	
	?>
	
	<table width="98%" cellspacing="0" cellpadding="0" border="0" class="KhungcatIterm">
	<tbody>
	<tr>
	<td width="135" align="left"  bgcolor="#ffffff">
		<a href="<?php echo $link ?>">
			<img width="130" hspace="0" border="0" src="<?php echo $urlhinhanh ?>" alt=" cà phê hòa tan " class="IMG">
		</a>
	</td>
	
	<td width="600" valign="Top" align="left">
		<table width="100%" cellspacing="2" cellpadding="2" border="0" align="left">
			<tbody>
				<tr><td><a href="<?php echo $link ?>" class="Title_sub"><?php echo '<span class="style_text_3">'.$row['tensanpham'].'</span>'; ?></a></td></tr>
				<tr><td><?php echo $row['motangan'] ?></td></tr>
				<tr>
					<td align="right"><div align="right">
						<img align="absMiddle" src="images/arrow.gif"><a href="<?php echo $link ?>" class="chitiet2"> Xem chi tiết</a></div>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
	</tr>
	</tbody>
	</table>

	
	<?php

	}

// in phân trang
// echo 'Pages: '.ceil($numofpages).'<br>';
// echo "<div class='NSDivCenter1'>";
echo "<br><center>";
page_div("sanpham.html?mlsp=$maloaisanpham&page=%d_pg", "10", ceil($numofpages), $page); 	
// echo "</div>";
echo "</center>";
}

	
?>
