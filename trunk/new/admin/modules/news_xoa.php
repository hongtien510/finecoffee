<?php
$idbaiviet=$_GET['idbaiviet'];

$sql="select urlhinh from baiviet where idbaiviet=".$idbaiviet;
$rs=mysql_query($sql);
$r=mysql_fetch_assoc($rs);
if(file_exists("../images/urlhinh/".$r['urlhinh'])) {unlink("../images/urlhinh/".$r['urlhinh']);}


$sql="delete from baiviet where idbaiviet=".$idbaiviet;
mysql_query($sql);
echo'<script>window.location="?action=news";</script>';
?>