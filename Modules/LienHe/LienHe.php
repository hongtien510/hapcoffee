<div id="category">
	<h1 class="title_cat">Liên hệ</h1>
	<div id="content_cat">
		<div class="googlemap">
		
			<iframe width="588" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=vi&amp;geocode=&amp;q=53+Tr%E1%BA%A7n+Ch%C3%A1nh+Chi%E1%BA%BFu,+ph%C6%B0%E1%BB%9Dng+14,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;aq=&amp;sll=10.752524,106.653997&amp;sspn=0.005376,0.009645&amp;g=10.752503,106.651914&amp;ie=UTF8&amp;hq=&amp;hnear=53+Tr%E1%BA%A7n+Ch%C3%A1nh+Chi%E1%BA%BFu,+14,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;ll=10.752255,106.651974&amp;spn=0.010751,0.01929&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=vi&amp;geocode=&amp;q=53+Tr%E1%BA%A7n+Ch%C3%A1nh+Chi%E1%BA%BFu,+ph%C6%B0%E1%BB%9Dng+14,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;aq=&amp;sll=10.752524,106.653997&amp;sspn=0.005376,0.009645&amp;g=10.752503,106.651914&amp;ie=UTF8&amp;hq=&amp;hnear=53+Tr%E1%BA%A7n+Ch%C3%A1nh+Chi%E1%BA%BFu,+14,+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam&amp;ll=10.752255,106.651974&amp;spn=0.010751,0.01929&amp;t=m&amp;z=14" style="color:#0000FF;text-align:left">Xem Bản đồ cỡ lớn hơn</a></small>
		
		</div>
		<div class="thongtinlienhe">
		<?php
			if(isset($_GET['mabv'])) 
			{
			$mabv = $_GET['mabv'];
			}
			else
			{
			$mabv =125;
			}



			if(isset($mabv)) 
			{
			// chi tiet gioi thieu
				$sql="select *  from baiviet where anhien=0 AND mabv=".$mabv;
				$query=mysql_query($sql);
				
				while($row=mysql_fetch_array($query))
				{
					//echo "<h2>".$row['tenbaiviet']."</h2>";
					echo $row['noidung'];
				}
				
				?>
				
				<?php //echo buttonfooter() ?>
				
			<?php
			}	
			?>
			<?php
			
				// include('Modules/LienHe/LienHe_content.php');
			?>
		</div>
	</div>
</div><!--End #category-->