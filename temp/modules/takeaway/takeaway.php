<div class="ctn_aboult">	<div id="jp-container" class="jp-container content_aboult">		<div>			<?php				$sql="select noidung from baiviet where loaibaiviet=5";				$query=mysql_query($sql);							while($row=mysql_fetch_array($query))				{					echo $row['noidung'];				}			?>							</div>	</div></div>