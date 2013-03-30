<div class="main_right">
	<span class="style_text_2">Hệ thống phân phối</span>
	<ul>	
	<?php

		$link_dktrothanhnhaphanphoi = ConvertUrl("?action=PhanPhoi");
		echo "<li><a class='style_text_3 mg_left_70' href='$link_dktrothanhnhaphanphoi'>Điều kiện trở thành nhà P.Phối</a></li>";

		
		$link_phanphoitrongnuoc = ConvertUrl("?action=PhanPhoi&lpp=1");
		echo "<li><a class='style_text_3 mg_left_70' href='$link_phanphoitrongnuoc'>Hệ thống phân phối trong nước</a></li>";
		
		$link_phanphoingoainuoc = ConvertUrl("?action=PhanPhoi&lpp=2");
		echo "<li><a class='style_text_3 mg_left_70' href='$link_phanphoingoainuoc'>Hệ thống phân phối Quốc tế</a></li>";
	
					
	?>
	</ul>
			
</div>
