<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td><span class="style_text_2">Hỗ trợ trực tuyến</span></td>
	  </tr>
<?php
	$sql="select *  from yahoo where anhien=0 order by thutu";
	$query=mysql_query($sql);

	while($row=mysql_fetch_array($query))
	{
	?>
		<tr>
			<td align="center" valign="middle">
			<span class="style_text_3"><?php echo $row['tieude'] ?></span><br />
			<a href="ymsgr:<?php echo $row['nickchat'] ?>"><img src="http://opi.yahoo.com/online?u=<?php echo $row['nickchat'] ?>&m=g&t=2" border=0 width="180" height="35"></a>
			</td>
		  </tr>
		<?php
	}		

?>
	<tr>
		<td align="left" valign="middle"><span class="style_text_2">Hotline</td>
	</tr>
	<?php
	$sql="select *  from hotline where anhien=0 order by thutu";
	$query=mysql_query($sql);
	while($row=mysql_fetch_array($query))
	{
	?>

		<tr>
			<td align="center" valign="middle"><span class="style_text_3"><?php echo $row['tieude'] ?></span> : <span style="color:#F00; font-weight:bold; font-size:16px"> <?php echo $row['sodienthoai'] ?></span></td>
		</tr>
		<?php } ?>
	</table>