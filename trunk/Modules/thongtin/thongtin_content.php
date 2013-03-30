<?php
if(isset($_GET['mttc'])) 
{
$mttc = $_GET['mttc'];
}
else
{
	$sql="select mathongtinchinh  from thongtinchinh order by thutu desc";
	$query=mysql_query($sql);
	$r=mysql_fetch_assoc($query);
	$mttc = $r['mathongtinchinh'];
}	

if(isset($_GET['mattp'])) 
{
// chi tiet san pham
	
	
	$sql="select *  from thongtinphu where anhien=0 AND mathongtinphu=".$_GET['mattp'];
	$query=mysql_query($sql);	
	$r=mysql_fetch_assoc($query);
	echo '<span class="style_text_3">'.$r['tenthongtinphu'].'</span><br><br>';
	echo $r['motadaydu'];
	/*
	$query=mysql_query($sql);
	
	while($row=mysql_fetch_array($query))
	{
		echo "<h2>".$row['tenthongtinphu']."</h2></br>";
		echo $row['motadaydu'];
	}
	*/
	?>
	<br><br>
	<center>
	<?php echo buttonfooter() ?>
	</center>
	
	<!--cùng thể loại-->
	<?php
		$mathongtinchinh = $_GET['mattc'];
		$mathongtinphu = $_GET['mattp'];
		// TODO: kiem tra them dieu kien khac id san pham hien tai
		$sql="select *  from thongtinphu where anhien=0 AND mathongtinchinh=$mathongtinchinh AND mathongtinphu!= $mathongtinphu order by ngaydang Desc Limit 0,10";
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
							<b>&nbsp;Các Thông tin cùng thể loại:</b>
						</td>
					</tr>
					<tr>
						<td class="textxambold1">
						<?php			
						while($row=mysql_fetch_array($query))
						{
						$link = ConvertUrl("?action=ThongTin&mattp=$row[mathongtinphu]&mattc=$mathongtinchinh");						
						?>
							<div>
								<span class="spctl_img"><img src="images/chambi2.gif"></span>
								<span>
									<a href="<?php echo $link ?>"><?php echo $row['tenthongtinphu'] ?></a>
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
		<!-- end cùng thể loại-->
	
	<?php
}
else
{
// thong tin loai san pham
	$sql1="select * from thongtinchinh where mathongtinchinh=".$mttc;
	$rs1=mysql_query($sql1);
	$r1=mysql_fetch_assoc($rs1);
	echo '<span class="style_text_4">'.$r1['tenthongtinchinh'].'</span>';
	
	$pp = "6";
	@$p_now=$_GET['page'];

	$total = mysql_result(mysql_query("select COUNT(mathongtinphu)   from thongtinphu where anhien=0 AND mathongtinchinh=".$mttc),0);
	$numofpages = $total / $pp;
	if (!$p_now) {$page = 1;}
	else {$page = $p_now;}
	$limitvalue = $page * $pp - ($pp);

	$sql="select *  from thongtinphu where anhien=0 AND mathongtinchinh=".$mttc ."  LIMIT $limitvalue, $pp";;
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
		// gan link than thien vao
		$link = ConvertUrl("?action=ThongTin&mattp=$row[mathongtinphu]&mattc=$mttc");
		if(trim($row['urlhinh'])!="")
		{
		$urlhinhanh = "images/hinhthongtin/".$row['urlhinh'];
		}
		else
		{
		$urlhinhanh = "images/hinhthongtin/khongcohinh.jpg";
		}
	
	?>

	<table width="98%" cellspacing="0" cellpadding="0" border="0" class="KhungcatIterm">
	<tbody>
	<tr>
	<td width="135" align="left"  bgcolor="#ffffff">
		<a href="<?php echo $link ?>">
			<img width="100" height="130" hspace="0" border="0" src="<?php echo $urlhinhanh ?>" alt=" cà phê hòa tan " class="IMG">
		</a>
	</td>
	
	<td width="600" valign="Top" align="left">
		<table width="100%" cellspacing="2" cellpadding="2" border="0" align="left">
			<tbody>
				<tr><td><a href="<?php echo $link ?>" class="Title_sub"><?php echo $row['tenthongtinphu'] ?></a></td></tr>
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
	</tbody></table>

	
	<?php

	}

// in phân trang
// echo 'Pages: '.ceil($numofpages).'<br>';
echo "<br><center>";
page_div("ThongTin.html?mttc=$mttc&page=%d_pg", "10", ceil($numofpages), $page); 	
echo "</center>";
}

	
?>
