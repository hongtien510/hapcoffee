<div id="category">
	<h1 class="title_cat">Sản phẩm</h1>
	<div id="content_cat">
		<ul class="ul_content_cat">
		<?php
		$pp = "6";
		@$p_now=$_GET['page'];

		$total = mysql_result(mysql_query("select COUNT(masanpham)   from sanpham where anhien=0 "),0);
		$numofpages = $total / $pp;
		if (!$p_now) {$page = 1;}
		else {$page = $p_now;}
		$limitvalue = $page * $pp - ($pp);

		$sql="select masanpham, urlhinh, motangan, tensanpham  from sanpham where anhien=0 order by thutu DESC LIMIT $limitvalue, $pp";;
		$query=mysql_query($sql);		

		while($row=mysql_fetch_assoc($query))
		{
			// echo "<pre>";
			// print_r($row['motangan']);
			// echo "</pre>";
		// gan link than thien vao
		$link = ConvertUrl("?action=sanpham&idsp=$row[masanpham]");
		if(trim($row['urlhinh'])!="")
		{
		$urlhinhanh = "images/hinhsanpham/".$row['urlhinh'];
		}
		else
		{
		$urlhinhanh = "images/hinhsanpham/khongcohinh.jpg";
		}
	
	?>
	

			<li>
				<p class="img_child_cat"><img src="<?php echo $urlhinhanh?>" alt="" title="" /></p>
				<h2><a class="name_child_cat" href="<?php echo $link?>"><?php echo cut_string(strip_tags($row['tensanpham']),85);?></a></h2>
				<h4 class="des_child_cat">
					<?php echo cut_string(strip_tags($row['motangan']),280);?>
				</h4>
			</li>
	
	<?php

	}
?>
	</ul>
	</div>
	<ul class="ul_page">
	<?php
	page_div("sanpham.html?page=%d_pg", "10", ceil($numofpages), $page); 	
	?>
	</ul>
</div>