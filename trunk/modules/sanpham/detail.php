<?php
		$masanpham =htmlspecialchars($_GET['idsp']);
		$sql="select *  from sanpham where anhien=0 AND masanpham=".$_GET['idsp'];
		$query=mysql_query($sql);
		
		$r=mysql_fetch_assoc($query);
		
		if(mysql_num_rows($query)!=0)
		{
	
?>
<div id="detail_product">
	<h1 class="title_product"><?php echo $r['tensanpham']?></h1>
	<div id="content_cat">
		<div class="hinhanhsanpham">
			<p class="img_product"><img class="img_pro" src="images/hinhsanpham/<?php echo $r['urlhinh']?>" alt="<?php echo $r['tensanpham']?>" title="<?php echo $r['tensanpham']?>"/></p>
			<ul class="ul_img_product">
				<li><a href="javascript:;"><img class="img_pro1" src="images/hinhsanpham/<?php echo $r['urlhinh']?>" alt="img_pro1" title="Chọn để thay đổi hình ảnh" /></a></li>
				<li><a href="javascript:;"><img class="img_pro2" src="images/hinhsanpham/<?php echo $r['hinhsp1']?>" alt="img_pro2" title="Chọn để thay đổi hình ảnh" /></a></li>
				<li><a href="javascript:;"><img class="img_pro3" src="images/hinhsanpham/<?php echo $r['hinhsp2']?>" alt="img_pro3" title="Chọn để thay đổi hình ảnh" /></a></li>
				<li><a href="javascript:;"><img class="img_pro4" src="images/hinhsanpham/<?php echo $r['hinhsp3']?>" alt="img_pro4" title="Chọn để thay đổi hình ảnh" /></a></li>
			</ul>
		</div>
		
		<div class="thongtinsanpham">
			<p class="price_pro">Khối lượng: <?php echo $r['khoiluong']?></p>	
			<p class="text1">Mô tả</p>
				<div class="des_pro">
					<?php echo cut_string(strip_tags($r['motangan']),280);?>
				</div>
				
			<p class="text1">Chi tiết</p>
				<div class="detail_pro">
					<?php echo $r['motadaydu'];?>
				</div>
		</div>
		
		<div class="baivietsanpham">
			<div id="jp-container" class="jp-container2">
			
									
				<?php echo $r['baiviet'];?>
			
			
			
			</div>
		
		</div>

	</div><!--End #content_cat-->
	
</div><!--End #category-->

<?php
}
else
{
?>
<div id="detail_product">
	<h1 class="title_product">sản phẩm này không tồn tại</h1>
	<div id="content_cat">

		
		<div class="thongtinsanpham">
			<p class="price_pro"></p>	
			<p class="text1"</p>
				<div class="des_pro">
					
				</div>
				

		</div>
		
		<div class="baivietsanpham">
			<div id="jp-container" class="jp-container2">
			
									
			
			
			
			
			</div>
		
		</div>

	</div><!--End #content_cat-->
	
</div><!--End #category-->
<?php
}

