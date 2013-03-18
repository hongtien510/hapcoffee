<div class="video">
        	<div class="display_video">
			<?php
				$sql="select *  from video where anhien=0 order by thutu";
				$query=mysql_query($sql);
				$row1=mysql_fetch_row($query);
				$urlvd = "http://www.youtube.com/embed/".$row1[2];
				echo "<iframe width='470' height='270' frameborder='0' src='$urlvd' id='youtubevd' allowfullscreen></iframe>";
			?>
			<!--
            	<iframe width="500" height="320" src="http://www.youtube.com/embed/TDO0z1BiEq0" frameborder="0" allowfullscreen></iframe>
			-->
            </div>
            <div class="list_video">
            	<ul class="ul_list_video">
                	<li>
                        <img class="img_video" src="images/dnvnv.JPG" alt="Ten Video" title="" />
                        <p class="name_video">
                        	<a href="">Doanh nghiệp vì người Việt</a>
                        </p>
                    </li>
                    <li>
                        <img class="img_video" src="images/dnvnv.JPG" alt="Ten Video" title="" />
                        <p class="name_video">
                        	<a href="">Doanh nghiệp vì người Việt</a>
                        </p>
                    </li>
                    <li>
                        <img class="img_video" src="images/dnvnv.JPG" alt="Ten Video" title="" />
                        <p class="name_video">
                        	<a href="">Doanh nghiệp vì người Việt</a>
                        </p>
                    </li>
                    <li>
                        <img class="img_video" src="images/dnvnv.JPG" alt="Ten Video" title="" />
                        <p class="name_video">
                        	<a href="">Doanh nghiệp vì người Việt</a>
                        </p>
                    </li>
                    <li>
                        <img class="img_video" src="images/dnvnv.JPG" alt="Ten Video" title="" />
                        <p class="name_video">
                        	<a href="">Doanh nghiệp vì người Việt</a>
                        </p>
                    </li>
                    <li>
                        <img class="img_video" src="images/dnvnv.JPG" alt="Ten Video" title="" />
                        <p class="name_video">
                        	<a href="">Doanh nghiệp vì người Việt</a>
                        </p>
                    </li>
                </ul>
            </div>
        </div>