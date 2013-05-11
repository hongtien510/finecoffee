<?php
$maslider=$_GET['maslider'];
$sql="select tenhinh from sliderhinh where maslider=".$maslider;
$rs=mysql_query($sql);
$r=mysql_fetch_assoc($rs);
if(file_exists("../images/hinhslide/".$r['tenhinh'])) {unlink("../images/hinhslide/".$r['tenhinh']);}

$sql="delete from sliderhinh where maslider=".$maslider;
mysql_query($sql);

echo'<script>window.location="?action=slide";</script>';

?>