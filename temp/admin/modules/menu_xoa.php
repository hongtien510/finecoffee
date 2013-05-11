<?php
$idbaiviet=$_GET['idbaiviet'];
$sql="delete from baiviet where idbaiviet=".$idbaiviet;
mysql_query($sql);
echo'<script>window.location="?action=menu";</script>';
?>