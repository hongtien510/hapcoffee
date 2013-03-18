<?php
$MaPhanPhoi=$_GET['maphanphoi'];
$sql="select urlhinh from phanphoi where maphanphoi=".$MaPhanPhoi;
$rs=mysql_query($sql);
$r=mysql_fetch_assoc($rs);
if(file_exists("images/HinhAnhNoiPhanPhoi/".$r['urlhinh'])) unlink("images/HinhAnhNoiPhanPhoi/".$r['urlhinh']);
$sql="delete from phanphoi where maphanphoi=".$MaPhanPhoi;
mysql_query($sql);
header('location:?action=PhanPhoi_TrongNuoc');
?>