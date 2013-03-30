<div class="main_right">
	<span class="style_text_2">THÔNG TIN</span>
	<ul>
	<?php
		$sql="select * from thongtinchinh order by thutu DESC";
		$query=mysql_query($sql);
	
		while($row=mysql_fetch_array($query))
		{
		// gan link than thien vao
			$link = ConvertUrl("?action=ThongTin&mttc=$row[mathongtinchinh]");
		// echo $link;
		echo "<li><a class='style_text_3 mg_left_70' href='$link'>$row[tenthongtinchinh]</a></li>";
		}
					
	?>
	</ul>
			
</div>
