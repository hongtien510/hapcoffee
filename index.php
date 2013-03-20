<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/jquery.simplyscroll.css" />

<link id="theme" href="images/themes/sunny/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css">
<link href="css/lightbox.min.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>

<script type="text/javascript" src="js/jquery.simplyscroll.js"></script>

<script type="text/javascript" src="js/lightbox/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="js/lightbox/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="js/lightbox/jquery.ui.rlightbox.js"></script>   
<script type="text/javascript" src="js/main.js"></script>   

<title>Hoang Anh Phat Coffee</title>
</head>
    <script type="text/javascript">
	function getvideo(url){		
	// alert(url);
	document.getElementById('youtubevd').src = 'http://www.youtube.com/embed/'+url;
	}	
    </script>
<body>
<?php
include('libs/db_connect.php'); 
include('libs/hamhaydung.php'); 
?>
<div id="container">
	<div id="header">
    	<div id="ctn_head">
        	<p class="logo">
        	<img src="images/logo.png" alt="logo" title="Logo Cafe Hoàng Anh Phát" />
        	</p>
            <p class="menu_trangchu">
            	<img src="images/lycf_menu.png" alt="Trang chủ" title="Trang chủ" />
                <a href="TrangChu.html">Trang chủ</a>
            </p>
            <p class="menu_gioithieu">
            	<img src="images/lycf_menu.png" alt="Trang chủ" title="Trang chủ" />
                <a href="GioiThieu.html">Giới thiệu</a>
            </p>
            <p class="menu_sanpham">
            	<img src="images/lycf_menu.png" alt="Trang chủ" title="Trang chủ" />
                <a href="SanPham.html">Sản phẩm</a>
            </p>
            <p class="menu_tuyendung">
            	<img src="images/lycf_menu.png" alt="Trang chủ" title="Trang chủ" />
                <a href="TuyenDung.html">Tuyển dụng</a>
            </p>
            <p class="menu_lienhe">
            	<img src="images/lycf_menu.png" alt="Trang chủ" title="Trang chủ" />
                <a href="LienHe.html">Liên hệ</a>
            </p>
            
        </div>
    </div><!--End #header-->
    <div id="banner">
    	<img src="images/banner.jpg" alt="Banner" title="Banner"  />
    </div><!--End #banner-->
    <div id="ctn_content">
    	<div id="content">
    		<div id="content_left">
            	<?php
				include('Modules/hotro/dienthoai.php');
				?>
                <div id="join_facebook">
                	<div class="header_join_fb"></div>
                    <div class="ct_join_fb">
                    	<iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FIshaLi.Advertising.Media&amp;width=300&amp;height=800&amp;show_faces=false&amp;colorscheme=light&amp;stream=true&amp;border_color&amp;header=false&amp;appId=617277141622046" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:800px;" allowTransparency="true"></iframe>
                    </div>
                </div>
            </div><!--End #content_left-->
        	<div id="content_right">
					<?php 
					if(isset($_GET['action'])) 
					{
					$Action = $_GET['action'];
					}
					else
					{
					$Action='TrangChu';
					}
					// echo "noidung san pham-----".$_GET['action'];
					include('Modules/'.$Action.'/'.$Action.'.php');
					?>					
            	
            </div><!--End #content_right-->
    	</div><!--End #content-->
    </div><!--End #ctn_content-->
    <div id="library">
    	<?php
		include('Modules/video/video_dautien.php');
		include('Modules/photo/photo.php');
		?>
		
		
		
		
		
        
    </div><!--End #library-->
    <div id="footer">
    	<img src="images/bg_footer.jpg" alt="footer" title="footer" />
        <div id="ct_footer">
        	<table width="100%" height="400" border="0">
              <tr>
                <td width="40%" rowspan="2" align="center">
                	<img class="logo" src="images/logo.png" alt="Logo" title="Logo Hoang Anh Phat Coffee" />
                </td>
                <td width="60%" height="270">
                	<p class="text_footer1">CÔNG TY TNHH HOÀNG ANH PHÁT</p>
                    <p class="text_footer2">Địa chỉ : 53 Trần Chánh Chiếu, P.14, Q.5, TP.HCM</p>
                    <p class="text_footer2">Email : info@hoanganhphatcoffee.vn</p>
                    <p class="text_footer2">GPKD : 0311282325</p>
                </td>
              </tr>
              <tr>
                <td height="130" valign="top">
                	<ul class="share">
                    	<li>
                        	<a href=""><img src="images/share_zing.png" alt="Share Zing" title="Chia sẻ lên Zing me"</a>
                        </li>
                        <li>
                        	<a href=""><img src="images/share_goolge.png" alt="Share Google" title="Chia sẻ lên Google Plus"</a>
                        </li>
                        <li>
                        	<a href=""><img src="images/share_twiter.png" alt="Share Twiter" title="Chia sẻ lên Twiter"</a>
                        </li>
                        <li>
                        	<a href=""><img src="images/share_facebook.png" alt="Share Facebook" title="Chia sẻ lên Facebook"</a>
                        </li>
                        <li>
                        	<a href=""><img src="images/share_linkedin.png" alt="Share Linkedin" title="Chia sẻ lên Linkedin"</a>
                        </li>
                    </ul>
                </td>
              </tr>
            </table>

        </div>
  </div><!--End #footer-->
</div><!--End #container-->
</body>
</html>






















