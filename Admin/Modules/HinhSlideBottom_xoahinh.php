<?php
$maslider=$_GET['maslider'];
$sql="delete from slider_bottom where maslider=".$maslider;
mysql_query($sql);

echo'<script>window.location="?action=HinhSlideBottom";</script>';
?>