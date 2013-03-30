<?php
if(isset($_GET['mbv'])) 
{
$mabv = $_GET['mbv'];
}



if(isset($mabv)) 
{
// chi tiet gioi thieu
	echo $sql="select *  from baiviet where anhien=0 AND mabv=".$mabv;
	echo 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa';
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
