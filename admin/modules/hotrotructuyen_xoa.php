<?php
if(isset($_GET['idyahoo']))
{
$IDYahoo=$_GET['idyahoo'];
$sql="delete from yahoo where idyahoo=".$IDYahoo;
mysql_query($sql);
header('location:?action=HoTroTrucTuyen');
}
else if(isset($_GET['idhotline']))
{
$IDHotline=$_GET['idhotline'];
$sql="delete from hotline where idhotline=".$IDHotline;
mysql_query($sql);
header('location:?action=HoTroTrucTuyen');
}
?>