<?php
$IDVideo=$_GET['idvideo'];
$sql="delete from video where idvideo=".$IDVideo;
mysql_query($sql);
header('location:?action=Video');
?>