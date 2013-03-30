<div id="tintuc">
	<p class="phincf"><img src="images/phincf.png" alt="PhinCF" title="Cafe HAP" /></p>
	<div class="main_nav">
		<ul class="ul_main_nav">
			<li><a onclick="showtintuc()" href="javascript:;">TIN TỨC</a></li>
			<li><a onclick="showtruyenthong()" href="javascript:;">TRUYỀN THÔNG</a></li>
		</ul>
	</div>
	<div style="clear:both"></div>
	
	<!--Noi dung Tab tin tuc-->
	<div id="content_nav_tintuc">
		<div id="top_nav">
		<?php
		$sql_tintuc="select * from baiviet where anhien='0' AND loaibaiviet='tintuc' order by mabv DESC LIMIT 0, 6";
		$rs_tintuc=mysql_query($sql_tintuc);	
		$r_tintuc_f=mysql_fetch_assoc($rs_tintuc);
		$link_f = ConvertUrl("?action=baiviet&mbv=$r_tintuc_f[mabv]");
		?>
			<div class="img_top_nav">
				<img src="images/phongcanh.jpg" alt="" title="" />
			</div>
			<div class="ct_top_nav">
				<p class="title_top_post">
					<a href="<?php echo $link_f;?>" title="<?php echo $r_tintuc_f['tenbaiviet']; ?>"><?php echo cut_string(strip_tags($r_tintuc_f['tenbaiviet']),60);?></a>
				</p>
				<p class="content_top_post">
					<?php 
						echo cut_string(strip_tags($r_tintuc_f['mota']),250);
					?>
				</p>
			</div>
		</div>
		<div id="bottom_nav">
			<ul class="ul_bottom_nav">
			<?php
				
				while($r_tintuc=mysql_fetch_assoc($rs_tintuc))
				{
					$link = ConvertUrl("?action=baiviet&mbv=$r_tintuc[mabv]");
			?>
					<li><a title="<?php echo $r_tintuc[tenbaiviet] ?>" href="<?php echo $link ?>"><?php echo cut_string(strip_tags($r_tintuc[tenbaiviet]),60)?></a></li>
			<?php
				}
			?>
			</ul>
		</div>
		<p class="xem_them"><a href="tintuc.html">Xem thêm &raquo;</a></p>
	</div>
	
	<!--Noi dung Tab truyen thong-->
	<?php
		$sql_truyenthong="select * from baiviet where anhien='0' AND loaibaiviet='truyenthong' order by mabv DESC LIMIT 0, 6";
		$rs_truyenthong=mysql_query($sql_truyenthong);	
		$r_truyenthong_f=mysql_fetch_assoc($rs_truyenthong);
		$link_truyenthong_f = ConvertUrl("?action=baiviet&mbv=$r_truyenthong_f[mabv]");
	?>
	<div id="content_nav_truyenthong">
		<div id="top_nav">
			<div class="img_top_nav">
				<img src="images/phongcanh.jpg" alt="" title="" />
			</div>
			<div class="ct_top_nav">
				<p class="title_top_post">
					<a href="<?php echo $link_truyenthong_f;?>" title="<?php echo $r_truyenthong_f['tenbaiviet']; ?>"><?php echo cut_string(strip_tags($r_truyenthong_f['tenbaiviet']),60);?></a>
				</p>
				<p class="content_top_post">
						<?php echo cut_string(strip_tags($r_truyenthong_f['mota']),250);?>
				</p>
			</div>
		</div>
		<div id="bottom_nav">
			<ul class="ul_bottom_nav">

				<?php
				
				while($r_truyenthong=mysql_fetch_assoc($rs_truyenthong))
				{
					$link = ConvertUrl("?action=baiviet&mbv=$r_truyenthong[mabv]");
				?>
					<li><a title="<?php echo $r_truyenthong[tenbaiviet] ?>" href="<?php echo $link ?>"><?php echo cut_string(strip_tags($r_truyenthong[tenbaiviet]),60)?></a></li>
				<?php
					}
				?>
				
			</ul>
		</div>
		<p class="xem_them"><a href="truyenthong.html">Xem thêm &raquo;</a></p>
	</div>
</div><!--End #tintuc-->

<?php
		$sql_cuocsoncafe="select * from baiviet where anhien='0' AND loaibaiviet='cuocsoncafe' order by mabv DESC LIMIT 0, 6";
		$rs_cuocsoncafe=mysql_query($sql_cuocsoncafe);	
		$r_cuocsoncafe_f=mysql_fetch_assoc($rs_cuocsoncafe);
		$link_cuocsoncafe_f = ConvertUrl("?action=baiviet&mbv=$r_cuocsoncafe_f[mabv]");
?>
<div id="baiviet">
	<p class="lycf"><img src="images/lycf.png" alt="LyCF" title="Cafe HAP" /></p>
	<div class="main_nav">
		<ul class="ul_main_nav">
			<li><a href="">CUỘC SỐNG TÔI LÀ CAFE</a></li>
		</ul>
	</div>
	<div style="clear:both"></div>
	<div id="content_nav_baiviet">
		<div id="top_nav">
			<div class="img_top_nav">
				<img src="images/phongcanh.jpg" alt="" title="" />
			</div>
			<div class="ct_top_nav">
				<p class="title_top_post">
					<a href="<?php echo $link_cuocsoncafe_f;?>" title="<?php echo $r_cuocsoncafe_f['tenbaiviet']; ?>"><?php echo cut_string(strip_tags($r_cuocsoncafe_f['tenbaiviet']),60);?></a>
				</p>
				<p class="content_top_post">
					<?php echo cut_string(strip_tags($r_cuocsoncafe_f['mota']),250);?>
				</p>
			</div>
		</div>
		<div id="bottom_nav">
			<ul class="ul_bottom_nav">	
				<?php
					while($r_cuocsoncafe=mysql_fetch_assoc($rs_cuocsoncafe))
					{
					$link = ConvertUrl("?action=baiviet&mbv=$r_cuocsoncafe[mabv]");
				?>
					<li><a title="<?php echo $r_cuocsoncafe[tenbaiviet] ?>" href="<?php echo $link ?>"><?php echo cut_string(strip_tags($r_cuocsoncafe[tenbaiviet]),80)?></a></li>
				<?php
					}
				?>			
			</ul>
		</div>
		<p class="xem_them"><a href="">Xem thêm &raquo;</a></p>
	</div>
</div><!--End #baiviet-->