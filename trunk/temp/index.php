<?php
	define('BASE_URL', 'http://localhost/finecoffee/temp/');
	include('libs/db_connect.php'); 
	include('libs/hamhaydung.php'); 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php	
	$action=@$_GET['action'];
		if($action=="")
		{	
			$action='trangchu';
		}
	
	$fileheader='modules/'.$action.'/header.php';
	if (file_exists($fileheader)) {			
		require($fileheader);
	}else{
		include('modules/trangchu/header.php');
	}
	
?>

<link type="text/css" href="<?php echo BASE_URL?>css/style.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo BASE_URL?>css/nivo-slider_bn.css" rel="stylesheet"/>
<link type="text/css" href="<?php echo BASE_URL?>css/style-nivo-slider_bn.css" rel="stylesheet"/>


<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL?>css/jscrollpane.css" />





<script type="text/javascript" src="<?php echo BASE_URL?>js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL?>js/scroll.js"></script>

<!--
<script type="text/javascript" src="js/jquery-1.4.3.min.js"/></script>
-->
<script type="text/javascript" src="<?php echo BASE_URL?>js/jquery.nivo.slider.pack_bn.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider_bn').nivoSlider_bn();
    });
    </script>
    
   
<script type="text/javascript" src="<?php echo BASE_URL?>js/main.js"></script>

</head>

<body>

<div id="container">
    <div id="header">
    	<div id="logo">
        	<a href=""><img class="img_logo" src="<?php echo BASE_URL?>images/logo.png" alt="logo" title="Logo FineCoffee"/></a>
        </div>
        <div class="name_cty">
        	<img class="img_name_cty" src="<?php echo BASE_URL?>images/ten cong ty.png" title="ORIGINAL COFFEE"/>
        </div>
        <div class="menu_top">
        	<ul class="ul_menu_top">
            	<li class="menu_top_first">
					<!-- <a href="index.php">HOME</a> -->
					<a href="<?php echo BASE_URL?>trangchu.html">HOME</a>					
				</li>
                <li>
						<!-- <a href="news.php">NEWS</a> -->
					<a href="<?php echo BASE_URL?>news.html">NEWS</a>		
				</li>
                <li>
                	<a>SERVICE</a>
                	<ul class="child_top_menu">
					
					<?php
					$sql="select tenmenubaiviet, idbaiviet, alias from baiviet where loaibaiviet=2  AND anhien=1";
					$query=mysql_query($sql);			

					while($row=mysql_fetch_array($query))
					{
					?>
					<li><a href="<?php echo BASE_URL?>service/<?php echo strtolower($row['alias'])?>-<?php echo $row['idbaiviet']?>.html"><?php echo $row['tenmenubaiviet']?></a></li>
					<?php
					}
					?>		
					</ul>
                </li>
                <li>
					<!--<a href="aboult.php">ABOULT</a>-->
					<a href="<?php echo BASE_URL?>aboult.html">ABOULT</a>		
				</li>
                <li>
					<!--<a href="contact.php">CONTACT</a>-->
					<a href="<?php echo BASE_URL?>contact.html">CONTACT</a>	
				</li>
				
            </ul>
        </div>
    </div>
    <div id="content">
        <div id="con_left">
        	<ul class="menu_left">
            	<li class="parent_left_menu li_lmenu_menu">
                	<a class="" ><p class="name_parent_menu">MENU</p></a>
                	<ul class="child_left_menu">
						<?php
						$sql="select tenmenubaiviet, idbaiviet, alias from baiviet where loaibaiviet=3 AND anhien=1";
						$query=mysql_query($sql);			

						while($row=mysql_fetch_array($query))
						{
						?>
						<li><a href="<?php echo BASE_URL?>menu/<?php echo strtolower($row['alias'])?>-<?php echo $row['idbaiviet']?>.html"><?php echo $row['tenmenubaiviet']?></a></li>
						<?php
						}
						?>		
                    </ul>
                </li>
                <li class="parent_left_menu li_lmenu_take"><a href="<?php echo BASE_URL?>takeaway.html"><p class="lmenu_take name_parent_menu">TAKE AWAY</p></a></li>
               	<li class="parent_left_menu li_lmenu_face"><a href=""><p class="lmenu_face name_parent_menu">FOLLOW US ON FACEBOOK</p></a></li>
            </ul>
            <div class="facebook">
                    <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FAgencySocialMediaMarketing&amp;width=235&amp;height=235&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color=%23fff&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:235px; height:235px;" allowTransparency="true"></iframe>

            </div>
        </div>
        <div id="con_right">		
			<?php					
				$fileaction='modules/'.$action.'/'.$action.'.php';
				if (file_exists($fileaction)) {			
					require($fileaction);
				}else{
					include('modules/trangchu/trangchu.php');
				}
			?>       
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