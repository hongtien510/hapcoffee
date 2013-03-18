<script>
$(document).ready(function(){
	$('.video_list').click(function(){
		$('.list_video').slideToggle();
		$a=$('.video_list');
		if ($a.text()=='Hiện list Video'){$a.text('Ẩn list Video');}else{$a.text('Hiện list Video');}
	});

});

</script>

<?php
	$sql="select *  from video where anhien=0 order by thutu";
	$query=mysql_query($sql);
	$row1=mysql_fetch_row($query);
	$urlvd = "http://www.youtube.com/embed/".$row1[2];
	echo "<iframe width='470' height='270' frameborder='0' src='$urlvd' id='youtubevd' allowfullscreen></iframe>";
?>
</br><a style="color:#631800; text-decoration:none" href="javascript:;" class="video_list">Hiện list Video</a>
<div class="list_video" style="height:85px;width:470px;font:16px/26px Georgia, Garamond, Serif; overflow-y:scroll;overflow-x:none;">
	<table width="50%" border="0" bgcolor="#CEA257" cellspacing="0" class="tables_video" >
	<tr>
	<td width="10%" ><b>#</b></td>
	<td width="90%" ><b>Tên video</b></td>

	</tr>
<?php
	//$sql="select *  from video where anhien=0 order by thutu";
	// $query=mysql_query($sql);
	$i = 1;
	
	while($row=mysql_fetch_array($query))		
	{
		echo "<tr bgcolor=\"#ffffff\" onmouseout=\"this.style.backgroundColor='#ffffff';\" title=\" Xem Video \" onclick=\"getvideo('$row[urlvideo]')\" onmouseover=\"this.style.backgroundColor='#CCCCCC';this.style.cursor='hand';\" style=\"background-color: rgb(255, 255, 255);\">";
		echo "<td width=10% >".$i."</td>";			
		echo "<td width=90% >".$row['tieude']."</td>";		
		echo "</tr>";
		$i++;
	}

?>

	</table>
	
<div>

