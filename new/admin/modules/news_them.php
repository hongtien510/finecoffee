<?php
	if(isset($_POST['submit']))
	{
		$tenbaiviet=$_POST['tenbaiviet'];
		$tenmenubaiviet=@$_POST['tenmenubaiviet'];
		$alias= preg_replace("/[^a-zA-Z0-9_\-]+/", "", $_POST['alias']);
		$metadescription=$_POST['metadescription'];
		$metakeywords=$_POST['metakeywords'];
		$noidung=@$_POST['noidung'];
		$anhien=$_POST['anhien'];
		$thutu=$_POST['thutu'];
		
		$mota=$_POST['mota'];
		$file=$_FILES['urlhinh'];
		if($file['name']!="")
		{
			$urlhinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"../images/urlhinh/".$urlhinh);
			
		}
		
		$sql = "INSERT INTO `baiviet` (
								`tenbaiviet`, 
								`tenmenubaiviet`, 
								`alias`, 
								`metadescription`, 
								`metakeywords`, 
								`noidung`, 
								`anhien`, 
								`loaibaiviet`, 
								`thutu`,
								`mota`,
								`urlhinh`
								
								)
								VALUES(								
								'$tenbaiviet', 
								'$tenmenubaiviet', 
								'$alias', 
								'$metadescription', 
								'$metakeywords', 
								'$noidung', 
								'$anhien', 
								'4', 
								'$thutu',
								'$mota',
								'$urlhinh'
								)";
		
		// echo $sql;
		mysql_query($sql);
		echo'<script>alert("Thêm News thành công");window.location="?action=news";</script>';
	}
?>
<div class="news">
<h2 class="title_admin"> Thêm News </h2>
<form action="" method="post" enctype="multipart/form-data">
<center>
<table width="95%" border="1" cellspacing="0" cellpadding="0">

  <tr>
    <th width="200" align="right" valign="middle" scope="row">Tiêu đề : </th>
    <td width="494">
		<label>
			<input class="input_style1" type="text" name="tenbaiviet" size="50" id="tenbaiviet" />
		</label>
	</td>
  </tr>

  
	<tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Alias:</th>
			<td width="85%">
				<input class="input_style1" type="text" name="alias" id="alias" size="50" value="">
			</td>
	</tr>
		
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Meta description:</th>
			<td width="85%">
				<textarea class="textarea_style1" name="metadescription" id="metadescription" cols="45" rows="5"></textarea>
			</td>
		  </tr>
		
		 <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Meta keywords:</th>
			<td width="85%">
				<textarea class="textarea_style1" name="metakeywords" id="metakeywords" cols="45" rows="5"></textarea>
			</td>
		 </tr>

  <tr>
    <th align="right" valign="middle" scope="row">Mô tả ngắn :</th>
    <td><textarea class="textarea_style1" name="mota" id="mota"></textarea></td>
  </tr>

  <tr>
    <th align="right" valign="middle" scope="row">Nội dung</th>
    <td><textarea class="textarea_style1" name="noidung" id="noidung"></textarea></td>
  </tr>  
   <tr>
    <th align="right" valign="middle" scope="row">Hình đại diện: </th>
    <td>
	<input size="33" class="input_file" type="file" name="urlhinh" id="urlhinh" /></td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Ẩn hiện :</th>
    <td><label>
      <input name="anhien" type="checkbox" id="anhien" value="1" checked />
    </label><i>(Chọn hiển thị bài viết)</i></td>
  </tr>
  <!--
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự :</th>
    <td><input class="input_style1" type="text" name="thutu" id="thutu" value=""/></td>
  </tr>
  -->
  <tr>
    <th align="right" valign="middle" scope="row">&nbsp;</th>
    <td><label>
      <input type="submit" name="submit" id="submit" value="Thêm news" />
    </label></td>
  </tr>
</table>
</center>
</form>
</div>
<script>
	var editor=CKEDITOR.replace( 'noidung' );
	CKFinder.setupCKEditor( editor, 'libs/ckfinder/' ) ;

</script>