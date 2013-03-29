<div class="photo">	
		<div class="simply-scroll simply-scroll-container">
			<div class="simply-scroll-clip">
			<ul id="scroller" class="simply-scroll-list" style="width: 3814px;">
			
				<?php
					$sql="select * from slider_top where anhien='0' order by thutu";
					$rs=mysql_query($sql);
					$i=1;
					while($r=mysql_fetch_assoc($rs))
					{
				?>
					<li>
						<a href="images/photoslide/<?php echo $r['tenhinh'] ?>" class="lb lb_abcd" title="<?php echo $r['tenhinh'] ?>">
							<img src="images/photoslide/<?php echo $r['tenhinh'] ?>" alt="<?php echo $r['tenhinh'] ?>">
						</a>
					</li>					
				<?php
						$i++;
					}
				?>						
					<!--
					<li><a href="images/01.jpg" class="lb lb_abcd" title=""><img src="images/01_thumb.jpg" alt=""></a></li>
					<li><a href="images/03.jpg" class="lb lb_abcd" title=""><img src="images/03_thumb.jpg" alt=""></a></li>
					<li><a href="images/05.jpg" class="lb lb_abcd" title=""><img src="images/05_thumb.jpg" alt=""></a></li>
					<li><a href="images/06.jpg" class="lb lb_abcd" title=""><img src="images/06_thumb.jpg" alt=""></a></li>
					<li><a href="images/07.jpg" class="lb lb_abcd" title=""><img src="images/07_thumb.jpg" alt=""></a></li>
					<li><a href="images/01.jpg" class="lb lb_abcd" title=""><img src="images/01_thumb.jpg" alt=""></a></li>
					<li><a href="images/03.jpg" class="lb lb_abcd" title=""><img src="images/03_thumb.jpg" alt=""></a></li>
					<li><a href="images/05.jpg" class="lb lb_abcd" title=""><img src="images/05_thumb.jpg" alt=""></a></li>
					<li><a href="images/06.jpg" class="lb lb_abcd" title=""><img src="images/06_thumb.jpg" alt=""></a></li>
					<li><a href="images/07.jpg" class="lb lb_abcd" title=""><img src="images/07_thumb.jpg" alt=""></a></li>
					-->
			</ul>
			</div>
		</div>
</div>