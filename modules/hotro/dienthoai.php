<div id="hotline">
	<p class="img_hotline">
		<img src="images/hotline.jpg" alt="hotline"  />
	</p>
	<div class="number_hotline">
		<ul>
		<?php
			$sql="select *  from hotline where anhien=0 order by thutu";
			$query=mysql_query($sql);
			while($row=mysql_fetch_array($query))
			{
				echo "<li>$row[tieude] - $row[sodienthoai]</li>";
			}
		?>
		</ul>
	</div>
</div>