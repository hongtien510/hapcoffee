<div class="main_right">
	<span class="style_text_2">Sản phẩm</span>
	<ul>
	<?php
		$sql="select * from loaisanpham order by thutu desc";
		$query=mysql_query($sql);
	
		while($row=mysql_fetch_array($query))
		{
		// gan link than thien vao
			$link = ConvertUrl("?action=SanPham&mlsp=$row[maloaisanpham]");
		// echo $link;
		echo "<li><a class='style_text_3 mg_left_70' href='$link'>$row[tenloaisanpham]</a></li>";
		}
					
	?>
	</ul>
			
</div>
