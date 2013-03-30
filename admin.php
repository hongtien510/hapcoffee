<?php session_start(); ?>
<?php include('libs/db_connect.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hoàng Anh Phát</title>
<link type="text/css" rel="stylesheet" href="css/style_admin.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />



</head>
<script type="text/javascript" src="libs/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="libs/ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="js/jquery.1.4.2.js"></script>
<script type="text/javascript" src="js/jsDatePick.jquery.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"ngayhethan",
			dateFormat:"%d-%m-%Y"
		});
	};
</script>

<body>

<center>
<div id="admin">
	<div id="banner">
		<div class="banner_flash">
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"
			codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0"
			width="1000" height="160" id="banner" align="">
			<param name=movie value="images/banner.swf"><param name=quality value=high>
			<embed src="images/banner.swf" quality=high  width="1000" height="160" name="banner" align=""
			type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
			</embed>
		</object>
		</div>	
	</div><!--End .banner-->
	
	 <?php 
	if(!isset($_SESSION['HoTenAdmin'])){
	// if(isset($_SESSION['HoTenAdmin'])){
		
		include('Admin/Modules/DangNhap.php');
	}
	else 
	{
	?>
    <div class="menu_top">
			<ul>
				<li><a href="?action=SanPham">Sản phẩm</a>
					<ul>
					<!--
						<li><a href="?action=LoaiSanPham">Loại sản phẩm</a></li>
					
						<li><a href="?action=SanPham">Sản phẩm</a></li>
					-->
					</ul>
				</li>
				<!--
				<li><a href="javascript:;">Thông tin</a>
					<ul>
						<li><a href="?action=ThongTinChinh">Thông tin chính</a></li>
						<li><a href="?action=ThongTinPhu">Thông tin phụ</a></li>
					</ul>
				</li>
				-->
				<li><a href="javascript:;">Bài viết</a>
					<ul>
						<li><a href="?action=GioiThieu">Giới thiệu</a></li>					
						<li><a href="?action=GioiThieu&lbv=truyenthong">Truyền thông</a></li>
						<li><a href="?action=GioiThieu&lbv=tintuc">Tin tức</a></li>
						<li><a href="?action=GioiThieu&lbv=cuocsoncafe">Cuộc sống cafe</a></li>
					</ul>
				</li>
				<!--
				<li><a href="?action=PhanPhoi">Phân phối</a></li>
				-->
				<li><a href="?action=TuyenDung">Tuyển dụng</a></li>
				<li><a href="?action=LienHe">Liên hệ</a></li>
				<li><a href="javascript:;">Chức năng khác</a>
					<ul>
						<li><a href="?action=HoTroTrucTuyen">Hỗ trợ trực tuyến</a></li>
						<li><a href="?action=Video">Video</a></li>
						<li><a href="?action=HinhSlideTop">Hình Slide</a></li>
						<!--
						<li><a href="?action=HinhSlideRight">Hình Slide Sản Phẩm</a></li>
						<li><a href="?action=HinhSlideBottom">Hình ảnh Slide</a></li>
						-->
						<li><a href="?action=DoiMatKhau">Đổi mật khẩu Admin</a></li>
						<li><a href="?action=EmailLienHe">Đổi Email liên hệ</a></li>
						
					</ul>
				</li>
				<li><a onclick="return confirm('Bạn có chắc chắn muốn đăng xuất không !!! ');" href="?action=DangXuat">Đăng xuất</a></li>
				<li><a href="index.php" target="_blank">Xem trang chủ</a></li>
			</ul>
		</div><!--End .menu-top-->
    
    <div id="ctn_admin">
	<?php 
    $Action=@$_GET['action'];
	if($Action=="") $Action='SanPham';
	include('Admin/Modules/'.$Action.'.php');
    ?>
    </div><!--End #ctn_admin-->
    
    <?php } ?>
	
	
	
	
		
    
    <div id="footer">&nbsp;
    </div><!--End.#footer-->
</div><!--End #container-->
</center>
</body>
</html>

