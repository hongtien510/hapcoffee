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
					$i = 1;
					
					while($row=mysql_fetch_array($query))		
					{
						// echo "<tr bgcolor=\"#ffffff\" onmouseout=\"this.style.backgroundColor='#ffffff';\" title=\" Xem Video \" onclick=\"getvideo('$row[urlvideo]')\" onmouseover=\"this.style.backgroundColor='#CCCCCC';this.style.cursor='hand';\" style=\"background-color: rgb(255, 255, 255);\">";
						// echo "<td width=10% >".$i."</td>";			
						// echo "<td width=90% >".$row['tieude']."</td>";		
						// echo "</tr>";
						?>
						<li>
							<img class="img_video" src="images/dnvnv.JPG" alt="<?php echo $row['tieude']?>" title="<?php echo $row['tieude']?>" />
							<p class="name_video">
								<a  onclick="getvideo('<?php echo $row[urlvideo]?>')" href="javascript:;"> <?php echo $row['tieude']?></a>
							</p>
						</li>
						<?php
						$i++;
					}

				?>                	
                </ul>
            </div>
        </div>