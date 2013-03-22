<?php
$sql_tintuc="select * from baiviet where anhien='0' AND loaibaiviet='tintuc' order by mabv DESC LIMIT 0, 9";
$rs_tintuc=mysql_query($sql_tintuc);	
?>
							

<div class="header_rel_post">BÀI VIẾT LIÊN QUAN</div>
	<div class="ct_rel_post">                    	
		
		<ul class="ul_ct_rel_post">                        	
			<?php								
			while($r_tintuc=mysql_fetch_assoc($rs_tintuc))
			{
				$link = ConvertUrl("?action=baiviet&mbv=$r_tintuc[mabv]");
				echo "<li><a href='$link'><h4>$r_tintuc[tenbaiviet]</h4></a></li>";
			}
			?>                        
		</ul>

	</div>