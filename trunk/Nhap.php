<ul>
	<?php
		$sql="select * from sanpham where anhien=0 order by thutu desc";
		$rs=mysql_query($sql);
		$i=0;$j=2;
		while($r=mysql_fetch_assoc($rs))
		{
	?>
		<li <?php if($i%3==0) echo 'class="first"'; if(($i+1)%3==0) echo 'class ="last"'; ?>>
		<p><a href="#"><img src="images/hinhsanpham/<?php echo $r['urlhinh'] ?>" width="150" height="175" border="1"/></a></p>
		<p><span class="style_text_TenSP"><?php echo $r['tensanpham'] ?></span></p>
		<p><span class="style_text_GiaSP">Kh?i lu?ng : <?php echo $r['khoiluong'] ?></span></p>
		</li>
	<?php $i++; }?>
	
	
		
	</ul>