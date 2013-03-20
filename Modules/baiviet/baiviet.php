<?php
if(isset($_GET['mbv'])) 
{
$mabv = $_GET['mbv'];
}


if(isset($mabv)) 
{
// chi tiet gioi thieu
	echo $sql="select *  from baiviet where anhien=0 AND mabv=".$mabv;
	$query=mysql_query($sql);
	if(mysql_num_rows($query)!=0)
	{			
			
		while($row=mysql_fetch_array($query))
		{	
		?>
			<div id="tintuc">
					<p class="phincf"><img src="images/phincf.png" alt="PhinCF" title="Cafe HAP" /></p>
					<div class="main_nav">
						<ul class="ul_main_nav">
							<li><a  href="javascript:;"><?php echo $row['tenbaiviet']?></a></li>
						</ul>
					</div>
					<div style="clear:both"></div>
					
					<!--Noi dung Tab tin tuc-->
					<div id="content_nav_tintuc">

						<div id="top_nav">

							<div class="ct_top_nav">
								<?php
									echo $row['noidung'];
									echo "<br/>";
									echo buttonfooter(); 
								?>
							</div>
								 
						</div>

					</div>            
					 
			</div>
		
	<?php
		}
	}else
	{
	?>
	<div id="tintuc">
				<p class="phincf"><img src="images/phincf.png" alt="PhinCF" title="Cafe HAP" /></p>
				<div class="main_nav">
					<ul class="ul_main_nav">
						<li><a  href="javascript:;">Bài viết này không tồn tại</a></li>
					</ul>
				</div>
				<div style="clear:both"></div>
				
				<!--Noi dung Tab tin tuc-->
				<div id="content_nav_tintuc">

					<div id="top_nav">

						<div class="ct_top_nav">
							Xin lỗi! có thể bài viết này đã bị xóa..Nếu có vấn đề gì vui lòng liên hệ quản trị
						</div>
							 
					</div>

				</div>            
				 
		</div>
	<?php
	}
}
?>

	
	