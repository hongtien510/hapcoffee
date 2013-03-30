<?php
if(isset($_GET['mbv'])) 
{
$mabv = $_GET['mbv'];
}


if(isset($mabv)) 
{
// chi tiet gioi thieu
	$sql="select *  from baiviet where anhien=0 AND mabv=".$mabv;
	$query=mysql_query($sql);
	if(mysql_num_rows($query)!=0)
	{			
			
		while($row=mysql_fetch_array($query))
		{	
		?>
		<div id="detail_post">
			<h1 class="title_detal_post"><?php echo $row['tenbaiviet']?></h1>
			<p class="link_nav">
				<a href="trangchu.html">Home</a>
				 &raquo; 
				<a href="javascript:;"><?php echo $row['tenbaiviet']?></a></p>

				<div class="content_detail_post">
					<div id="jp-container" class="jp-container">
						<?php
									echo $row['noidung'];
									// echo "<br/>";
									// echo buttonfooter(); 
						?>
					</div>
				</div>
		</div>
		
	<?php
		}
	}else
	{
	?>
		<div id="detail_post">
			<h1 class="title_detal_post">Bài viết này không tồn tại</h1>
			<p class="link_nav">
				<a href="trangchu.html">Home</a>
				 &raquo; 
				<a href="javascript:;">Bài viết này không tồn tại</a></p>

				<div class="content_detail_post">
					<div id="jp-container" class="jp-container">
					Xin lỗi! có thể bài viết này đã bị xóa..Nếu có vấn đề gì vui lòng liên hệ quản trị
					</div>
				</div>
		</div>
	<?php
	}
}
?>

	
	