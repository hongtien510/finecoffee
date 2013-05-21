<?php	
if(isset($_GET['idbaiviet'])) 
{
// chi tiet
	include('modules/news/news_detail.php');
}
else
{
// thong tin
	include('modules/news/news_category.php');
}
?>
