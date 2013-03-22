<?php
if(isset($_GET['mabv'])) 
{
$mabv = $_GET['mabv'];
}
else
{
$sql="select *  from baiviet where anhien=0 AND loaibaiviet='GioiThieu'";
	$query=mysql_query($sql);
	
	$row=mysql_fetch_assoc($query);
		// echo "<span class='style_text_4'>".$row['tenbaiviet']."</span></br>";
		echo $row['noidung'];
}



if(isset($mabv)) 
{
// chi tiet gioi thieu
	$sql="select *  from baiviet where anhien=0 AND mabv=".$mabv;
	$query=mysql_query($sql);
	
	while($row=mysql_fetch_array($query))
	{
		echo "<span class='style_text_4'>".$row['tenbaiviet']."</span></br>";
		echo $row['noidung'];
	}
	
	?>
	
	<?php //echo buttonfooter() ?>
	
<?php
}	
?>


