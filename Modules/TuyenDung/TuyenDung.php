<?php
include('libs/db_connect.php'); 
include('libs/hamhaydung.php'); 
?>
	<div id="tintuc">
		<p class="phincf"><img src="images/phincf.png" alt="PhinCF" title="Cafe HAP" /></p>
		<div class="main_nav">
			<ul class="ul_main_nav">
				<li><a  href="javascript:;">TUYỂN DỤNG</a></li>
			</ul>
		</div>
		<div style="clear:both"></div>
		
		<!--Noi dung Tab tin tuc-->
		<div id="content_nav_tintuc">

			<div id="top_nav">

				<div class="ct_top_nav">
					<?php
					include('Modules/TuyenDung/TuyenDung_content.php');
					?>
				</div>
			</div>

		</div>            
                 
	</div>