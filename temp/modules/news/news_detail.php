<?php	$idbaiviet = addslashes($_GET['idbaiviet']);	$sql="select * from baiviet where loaibaiviet=4 AND anhien=1 AND idbaiviet=".$idbaiviet;	$rs=mysql_query($sql);	$row=mysql_fetch_assoc($rs);?>					<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>css/scroll_baiviet.css" /><div class="ctn_baiviet">	<div id="jp-container" class="jp-container content_baiviet">		<div>			<h1 class="title_baiviet">				<?php echo $row['tenbaiviet'] ?>			</h1>			  	<?php echo $row['noidung'] ?>				</div>	</div></div>