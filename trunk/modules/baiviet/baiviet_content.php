<?php
if(isset($_GET['mbv'])) 
{
	$mabv = $_GET['mbv'];
}
//$mabv = 142;


if(isset($mabv)) 
{
	$sql="select *  from baiviet where anhien=0 AND mabv=".$mabv;
	
	$query=mysql_query($sql);
	
	while($row=mysql_fetch_array($query))
	{
		echo "<span class='style_text_4'>".$row['tenbaiviet']."</span></br>";
		echo $row['noidung'];
	}

}	
?>
