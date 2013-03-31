<?php
// $anhien=1;
$anhien=$_GET['anhien'];
if ($anhien == 1)
{
$anhien = 0;
}
else
{
$anhien = 1;
}
$maslider=$_GET['maslider'];
$sql="UPDATE `slider_right` SET `anhien` = $anhien  where maslider=".$maslider;
mysql_query($sql);

echo'<script>window.location="?action=HinhSlideRight";</script>';
?>