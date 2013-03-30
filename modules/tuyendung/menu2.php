<div class="pp_left">
	<h2 class="style_text_1">Hệ thống phân phối</h2>
	<ul>
	<?php
		$link_tuyendungmoi = ConvertUrl("?action=TuyenDung");
		echo "<li><a href='$link_tuyendungmoi'>Tuyển dụng mới</a></li>";

		
		$link_camnghinhanvien = ConvertUrl("?action=TuyenDung&mabv=131");
		echo "<li><a href='$link_camnghinhanvien'>Nhân viên nghĩ sao về Hoàng Anh Phát</a></li>";
		
		$link_visaochon = ConvertUrl("?action=TuyenDung&mabv=130");
		echo "<li><a href='$link_visaochon'>Vì sao nên chọn Hoàng Anh Phát</a></li>";
					
	?>
	</ul>
			
</div>
