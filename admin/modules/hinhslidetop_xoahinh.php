<?php
$maslider=$_GET['maslider'];
$sql="delete from slider_top where maslider=".$maslider;
mysql_query($sql);

echo'<script>window.location="?action=HinhSlideTop";</script>';
?>