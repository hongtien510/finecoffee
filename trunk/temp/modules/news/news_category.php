	<?php
		$sql_tintuc="select tenbaiviet,mota,idbaiviet,urlhinh,alias from baiviet where anhien=1 AND loaibaiviet=4 order by idbaiviet DESC LIMIT 0, 4";
		$rs_tintuc=mysql_query($sql_tintuc);	
		$r_tintuc_f=mysql_fetch_assoc($rs_tintuc);
		
		if($r_tintuc_f['urlhinh']=="")
			$urlhinh = 'no-image.jpg';
		else
			$urlhinh = $r_tintuc_f['urlhinh'];

	?>
			
			<div id="news_new">
            	<div class="news_noibat">
                	<img class="img_news_noibat" src="images/urlhinh/<?php echo $urlhinh ?>" alt="<?php echo $r_tintuc_f['tenbaiviet']; ?>" title="<?php echo $r_tintuc_f['tenbaiviet']; ?>"/>
                    <div class="content_news_noibat">
                    	<h1>
                        	<a href="<?php echo BASE_URL?>news/<?php echo strtolower($r_tintuc_f['alias'])?>-<?php echo $r_tintuc_f['idbaiviet']?>.html"><?php echo cut_string(strip_tags($r_tintuc_f['tenbaiviet']),60)?></a>
                        </h1>
                        <h2>
						<?php echo $r_tintuc_f['mota']; ?>                      
                        </h2>
                    </div>
                </div>
                <div class="news_moinhat">
				<?php
				$i=1;
				while($r_tintuc=mysql_fetch_assoc($rs_tintuc))
				{
					if($r_tintuc['urlhinh']=="")
						$urlhinh = 'no-image.jpg';
					else
						$urlhinh = $r_tintuc['urlhinh'];
					
				?>
				    <div <?php if($i==3) echo "class='content_news_moinhat last'"; else echo "class='content_news_moinhat'"; ?>>
                    	<img class="img_news_moinhat" src="images/urlhinh/<?php echo $urlhinh ?>" alt="" title="" />
                        <h1>
                        	<a href="<?php echo BASE_URL?>news/<?php echo strtolower($r_tintuc['alias'])?>-<?php echo $r_tintuc['idbaiviet']?>.html"><?php echo cut_string(strip_tags($r_tintuc['tenbaiviet']),100)?></a>
                        </h1>
                    </div>
					<!--
					<li><a title="<?php echo $r_tintuc[tenbaiviet] ?>" href="<?php echo $link ?>"><?php echo cut_string(strip_tags($r_tintuc[tenbaiviet]),60)?></a></li>
					-->
					
				<?php
				$i++;
				}
				?>			
                </div>
            </div>
            <div id="jp-container" class="jp-container news_related">
            	<ul class="ul_news_related">
				<?php
				$sql_tintuc="select tenbaiviet,idbaiviet,alias from baiviet where anhien=1 AND loaibaiviet=4 order by idbaiviet DESC LIMIT 0, 30";
				$rs_tintuc=mysql_query($sql_tintuc);	
				while($r_tintuc=mysql_fetch_assoc($rs_tintuc))
				{
				?>
					<li><h2><a href="<?php echo BASE_URL?>news/<?php echo strtolower($r_tintuc['alias'])?>-<?php echo $r_tintuc['idbaiviet']?>.html"><?php echo cut_string(strip_tags($r_tintuc['tenbaiviet']),100)?></a></h2></li>
				<?php
				}
				?>
				<!--
                	<li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
                    <li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
                    <li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
                    <li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
                    <li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
                    <li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
                    <li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
                    <li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
                    <li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
                    <li><h2><a href="">Hà Nội giảm chỉ tiêu vào lớp 10 trường công</a></h2></li>
				-->
                </ul>
            </div>