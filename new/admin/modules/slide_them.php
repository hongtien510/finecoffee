<?php //include('libs/hamhaydung.php'); ?>
<?php

	if(isset($_POST['submit']))
	{
		$tieude=$_POST['tieude'];
		$anhien=@$_POST['anhien'];
		
		$file=$_FILES['tenhinh'];
		if($file['name']!="")
		{
			$urlhinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"../images/hinhslide/".$urlhinh);			
		}
		
		$sql= "INSERT INTO `sliderhinh` (	
								`tenhinh`, 
								`anhien`, 
								`tieude`
							)
							VALUES(
							'$urlhinh', 
							'$anhien', 
							'$tieude'
							)";
		
		
		mysql_query($sql);
		echo'<script>alert("Thêm Slider Hình thành công");window.location="?action=slide";</script>';
	}
?>
<div class="slide">
<h2 class="title_admin"> Thêm Slider Hình </h2>
<form action="" method="post" enctype="multipart/form-data">
<center>
<table width="95%" border="1" cellspacing="0" cellpadding="0">

  <tr>
    <th width="150" align="right" valign="middle" scope="row">Tên hình: </th>
    <td width="494"><label>
      <input class="input_style1" type="text" name="tieude" size="50" id="tieude" />
    </label></td>
  </tr>

  
  <tr>
    <th align="right" valign="middle" scope="row">Hình Slide: </th>
    <td>
		<input style="border:1px solid #cccccc" size="33" class="input_style1" type="file" name="tenhinh" id="tenhinh" />
		<p>Yêu cầu kích thước ảnh tải lên phải là (695 x 475)</p>
	</td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Ẩn hiện :</th>
    <td><label>
      <input name="anhien" checked type="checkbox" id="anhien" value="1" />
    </label><i>(Chọn nếu muốn bài viết hiển thị)</i></td>
  </tr>
 
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Thêm Slider Hình" />
    </label></td>
  </tr>
</table>
</center>
</form>
</div>
