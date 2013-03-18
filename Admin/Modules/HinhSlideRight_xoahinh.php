<?php
$maslider=$_GET['maslider'];
$sql="delete from slider_right where maslider=".$maslider;
mysql_query($sql);

echo'<script>window.location="?action=HinhSlideRight";</script>';
?>