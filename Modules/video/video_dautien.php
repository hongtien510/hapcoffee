<div class="video">
        	<div class="display_video">
			<?php
				$sql="select *  from video where anhien=0 order by thutu";
				$query=mysql_query($sql);
				$row1=mysql_fetch_row($query);
				$urlvd = "http://www.youtube.com/embed/".$row1[2];
				echo "<iframe width='500' height='320' frameborder='0' src='$urlvd' id='youtubevd' allowfullscreen></iframe>";
			?>
			<!--
            	<iframe width="500" height="320" src="http://www.youtube.com/embed/TDO0z1BiEq0" frameborder="0" allowfullscreen></iframe>
			-->
            </div>
            <div class="list_video">
            	<ul class="ul_list_video">
				<?php
					//$sql="select *  from video where anhien=0 order by thutu";
					// $query=mysql_query($sql);
					$sql="SELECT *  FROM video WHERE anhien=0 ORDER BY thutu";
					$rs=mysql_query($sql);
					while($row=mysql_fetch_assoc($rs))
					{
				?>
						<li>
							<a  onclick="getvideo('<?php echo $row[urlvideo]?>')" href="javascript:;">
								<img class="img_video" src="images/youtube.jpg" alt="<?php echo $row['tieude']?>" title="<?php echo $row['tieude']?>" />
							</a>
							<p class="name_video">
								<a  onclick="getvideo('<?php echo $row[urlvideo]?>')" href="javascript:;"> <?php echo $row['tieude']?></a>
							</p>
							<p class="des_video">Thương hiệu cà phê Hoàng Anh Phát được phát triển trên sự kế nghiệp gia đình ở Tp Ban Mê Thuột.</p>
						</li>
				<?php
					}
				?>                	
                </ul>
            </div>
</div>