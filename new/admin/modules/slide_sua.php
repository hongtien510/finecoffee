<?php
	$maslider=$_GET['maslider'];
	$sql1="select * from sliderhinh where maslider=".$maslider;
	$rs1=mysql_query($sql1);
	$r1=mysql_fetch_assoc($rs1);
	
	if(isset($_POST['submit']))
	{
		$tieude=$_POST['tieude'];
		$anhien=$_POST['anhien'];
		
		$file=$_FILES['tenhinh'];		
		$hinh ='';
		if($file['name']!="")
		{
			$urlhinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"../images/hinhslide/".$urlhinh);
			if(file_exists("../images/hinhslide/".$r1['tenhinh'])) unlink("../images/hinhslide/".$r1['tenhinh']);
			$hinh = "   tenhinh='$urlhinh' ,";
		}
		
		
		$sql2="update sliderhinh set 
									   tieude='$tieude',
									   $hinh							 
									   anhien='$anhien'									   
									   where maslider=".$maslider;

		mysql_query($sql2);
		echo'<script>alert("Cập nhật Slider Hình thành công");window.location="?action=slide";</script>';
	}
?>
<div class="slide">
<h2 class="title_admin"> Sửa Slider Hình </h2>
<form action="" method="post" enctype="multipart/form-data">
<center>
<table width="95%" border="1" cellspacing="0" cellpadding="0">

  <tr>
    <th width="200" align="right" valign="middle" scope="row">Tiêu đề Slider: </th>
    <td width="494"><label>
      <input class="input300" type="text" name="tieude" size="50" id="tieude" value="<?php echo $r1['tieude'] ?>"  />
    </label></td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Hình Slide: </th>
    <td>
	<img src="../images/hinhslide/<?php echo $r1['tenhinh']?>" title="<?php echo $r1['tenhinh'] ?>"  height="100" width="100"  /></br>
	<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="tenhinh" id="tenhinh" />
	<i>(Bỏ qua mục này nếu không muốn thay đổi hình ảnh)</i>
	</td>
  </tr>
  
  <tr>
    <th align="right" valign="middle" scope="row">Ẩn hiện :</th>
    <td><label>
      <input name="anhien" type="checkbox" id="anhien" value="1" <?php if($r1['anhien']==1)echo 'checked="checked"'; ?>/>
    </label><i>(Chọn nếu muốn bài viết hiển thị)</i></td>
  </tr>
 
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Cập nhật" />
    </label></td>
  </tr>
</table>
</center>
</form>
</div>
