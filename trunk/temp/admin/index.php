<?php session_start(); ?>
<?php
define('BASE_URL', 'http://localhost/finecoffee/temp/');
 include('../libs/db_connect.php'); 
 // include_once(BASE_URL.'libs/db_connect.php'); 
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php 
// session_start(); 

// $baseurl = "http://localhost/finecoffee/";
// include_once(BASE_URL.'libs/db_connect.php'); 
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo BASE_URL?>css/jsDatePick_ltr.min.css" />
<link type="text/css" href="css/style.css" rel="stylesheet"/>




<title>Quản Trị ORIGINAL COFFEE</title>
</head>
<script type="text/javascript" src="<?php echo BASE_URL?>libs/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>libs/ckfinder/ckfinder.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>js/jsDatePick.jquery.min.1.3.js"></script>
<body>
<div id="container">
    <div id="header">
    	<div id="logo">
        	<a href=""><img src="images/logo.png" alt="logo" title="Logo FineCoffee"/></a>
        </div>
        <div class="name_cty">ORIGINAL COFFEE</div>
        <div class="menu_top">
        	<ul class="ul_menu_top">
            	<li class="menu_top_first">
					<a href="index.php">Bài Viết</a>
					<ul class="child_top_menu">
						<li><a href="?action=news">News</a></li>
						<li><a href="?action=service">Service</a></li>
						<li><a href="?action=menu">Menu</a></li>
						<li><a href="?action=aboult">Aboult</a></li>
						<li><a href="?action=">Take Away</a></li>
					</ul>
				</li>
     
                <li>
                	<a href="">Chức năng khác</a>
                	<ul class="child_top_menu">
						<li><a href="?action=doimatkhau">Đổi mật khẩu</a></li>
						<li><a href="?action=slide">Hình Slide</a></li>
						<li><a href="?action=contact">Contact</a></li>
					</ul>
                </li>
                <li><a onclick="return confirm('Bạn có chắc chắn muốn đăng xuất không !!! ');" href="?action=dangxuat">Đăng xuất</a></li>
                <li><a href="<?php echo BASE_URL?>index.php" target="_blank">Xem trang chủ</a></li>
            </ul>
        </div>
    </div>
    <div id="content">       
        <div id="con_admin">
        <div id="content_admin">
        	 <?php 
			if(!isset($_SESSION['hotenadmin'])){				
				include('modules/dangnhap.php');
			}
			else 
			{
				$action=@$_GET['action'];
				if($action=="") 
				$action='wellcom';
				$fileaction='modules/'.$action.'.php';
				
				if (file_exists($fileaction)) {			
					require($fileaction);
				}else{
					include('modules/wellcom.php');
				}
			}
			?>
			</div>
        </div>
    </div>
</div>
<div class="clear"></div>
<div class="top_footer"></div>
<div id="footer">
	<table width="100%" border="0">
      <tr>
        <td width="26%" height="130">
       	 	<div class="share">
                <a title="Chia sẻ trên Facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?s=100
                    &p[title]=Dịch vụ tăng like Fanpage chuyên nghiệp và chất lượng
                    &p[url]=http://ishali.com.vn/landingpage/likebasic.html
                    &p[images][0]=http://ishali.com.vn/public/default/images/logo.png
                    &p[summary]=Dịch vụ like fanpage nhanh chóng tiết kiệm công sức và thời gian
                "><img alt="Facebook" src="http://ishali.com.vn/public/default/images/icon_facebook.png"/>
                </a>
                <a title="Chia sẻ trên Twitter" target="_blank" href="http://www.twitter.com/share
                    ?url=
				">
                <img alt="Twitter" src="http://ishali.com.vn/public/default/images/twitter_ico.png"/></a>  
                <a title="Chia sẻ lên Zing Me" target="_blank" 
                    href="http://link.apps.zing.vn/share?u=http://ishali.com.vn/landingpage/likebasic.html">
                    <img src="http://ishali.com.vn/public/default/images/zingme_ico.png"/>
                </a>
                <a title="Chia sẻ lên LinkedIn" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true
                    &url=
                    &title=
                "><img alt="LinkedIn" src="http://ishali.com.vn/public/default/images/linkdin_ico.png"/></a>
            </div>
        </td>
        <td width="50%">
        	<img class="logo_fine_footer" src="images/logo_fine_footer.jpg" alt="Logo FineCoffee" title="Logo FineCoffee"/>
        </td>
        <td width="24%">&nbsp;</td>
      </tr>
</table>

    
</div>



</body>
</html>