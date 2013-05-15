<?php //include('libs/hamhaydung.php'); ?>
<?php

	if(isset($_POST['submit']))
	{
		$tieude=$_POST['tieude'];
		$noidung=$_POST['noidung'];
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
								`tieude`, 
								`noidung`
							)
							VALUES(
							'$urlhinh', 
							'$anhien', 
							'$tieude', 
							'$noidung'
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
    <th width="150" align="right" valign="middle" scope="row">Tiêu đề Slider: </th>
    <td width="494"><label>
      <input class="input_style1" type="text" name="tieude" size="50" id="tieude" />
    </label></td>
  </tr>
 
  <tr>
    <th align="right" valign="middle" scope="row">Mô tả ngắn:</th>
    <td><textarea class="input_style1" name="noidung" style=" height: 115px;  width: 747px;" id="noidung"></textarea></td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Hình Slide: </th>
    <td>
	<input style="border:1px solid #cccccc" size="33" class="input_style1" type="file" name="tenhinh" id="tenhinh" /></td>
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
