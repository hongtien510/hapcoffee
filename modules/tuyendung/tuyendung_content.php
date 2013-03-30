<?php
if(isset($_GET['mabv'])) 
{
// bai viet cam nghi cua nhan vien

	$mabv = $_GET['mabv'];

	if(isset($mabv)) 
	{	
		$sql="select *  from baiviet where anhien=1 AND mabv=".$mabv;
		$query=mysql_query($sql);
		
		while($row=mysql_fetch_array($query))
		{
			echo "<h2>".$row['tenbaiviet']."</h2></br>";
			echo $row['noidung'];
		}

	}	
	
}

else
{
// default tuyen dung moi

?>

<h2 class="style_text_4">Thông tin tuyển dụng</h3>

	
	<?php
	/*Begin chi tiet tuyen dung*/
		if(isset($_GET['mtd'])) 
		{
		$matuyendung  = $_GET['mtd'];
			$sql="select *  from tuyendung where anhien=0 AND matuyendung=".$matuyendung;
			$query=mysql_query($sql);
			
			while($row=mysql_fetch_array($query))
			{
			//	echo "<h2>".$row['tenbaiviet']."</h2></br>";
			//	echo $row['noidung'];
				
				?>
				<table width="90%" cellspacing="3" border="0" class="cellPadding=5">
					<tbody>
						<tr>
							<td valign="center">
							Vị trí tuyển dụng : <strong><?php echo $row['vitrituyendung'] ?></strong>
							</td>
						</tr>
						<tr>
							<td valign="center">Mã tuyển dụng : <strong><?php echo $row['matuyendung'] ?></strong></td>
						</tr>
						<tr>
							<td valign="top">Số lượng cần tuyển : <b><?php echo $row['soluong'] ?></b></td>
						</tr>
						<tr>
							<td valign="top">Ngày hết hạn : <b><?php echo $row['ngayhethan'] ?></b></td>
						</tr>
						<tr>
							<td valign="top">
							Yêu cầu: <?php echo $row['noidung'] ?>
							</td>
						</tr>
						<tr>
							<td valign="center" height="20" align="right">Cập nhật ngày : <?php $date = new DateTime($row['ngaydang']);	echo  $date->format('d.m.Y'); ?>
							</td>
						</tr>
					</tbody>
			</table>
			<div align="right">
<a href="javascript: history.go(-1)"><img border="0" onmouseout="this.src='images/return1.gif';" onmouseover="this.src='images/return2.gif';" alt="Quay lại" src="images/return1.gif"></a>&nbsp;&nbsp;&nbsp;
</div>
				<?php
			}
		}
	/*End chi tiet tuyen dung*/
	?>
	
	<table width="100%" border="1" bgcolor="#CEA257" cellspacing="0" style="text-align:center">

	<td width="70%"><b>Vị trí tuyển dụng</b></td>
	<td width="20%"><b>Số lượng</b></td>
	<td width="10%"><b>Cập nhật</b></td></tr>
	


	<?php
		$sql="select * from tuyendung";
		$query=mysql_query($sql);				
		
		while($row=mysql_fetch_array($query))		
		{
			$date = new DateTime($row['ngaydang']);
			$ngaythang = $date->format('d.m.Y');
			$linkchitiet =  ConvertUrl("?action=tuyendung&mtd=$row[matuyendung]");
			// echo $linkchitiet;
			echo "<tr bgcolor=\"#ffffff\" onmouseout=\"this.style.backgroundColor='#ffffff';\" title=\" Xem chi tiết \" onclick=\"window.location='$linkchitiet'\" onmouseover=\"this.style.backgroundColor='#CCCCCC';this.style.cursor='pointer';\" style=\"background-color: rgb(255, 255, 255);\">";
			echo "<td width=70%>".$row['vitrituyendung']."</td>";			
			echo "<td width=20%>".$row['soluong']."</td>";
			echo "<td width=10%>".$ngaythang ."</td>";		
		echo "</tr>";
		}
	?>
	</table>
		<?php
		
}

?>
	

