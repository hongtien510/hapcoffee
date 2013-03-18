<div class="main_right">
	<span class="style_text_2">Giới thiệu</span>
	<ul>
	<?php

		$sql="select * from baiviet where loaibaiviet='GioiThieu'";
		$query=mysql_query($sql);
	
		while($row=mysql_fetch_array($query))
		{
			// gan link than thien vao
			$link = ConvertUrl("?action=GioiThieu&mabv=$row[mabv]");
			echo "<li><a class='style_text_3 mg_left_70' href='$link'>$row[tenbaiviet]</a></li>";
		}
				
	?>
	</ul>
			
</div>
