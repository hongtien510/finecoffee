<?php
	$idbaiviet=$_GET['idbaiviet'];
	$sql1="select * from baiviet where idbaiviet=".$idbaiviet;
	$rs1=mysql_query($sql1);
	$r1=mysql_fetch_assoc($rs1);
	
	if(isset($_POST['submit']))
	{
		$tenbaiviet=$_POST['tenbaiviet'];
		$tenmenubaiviet=@$_POST['tenmenubaiviet'];
		$alias= preg_replace("/[^a-zA-Z0-9_\-]+/", "", $_POST['alias']);
		$metadescription=$_POST['metadescription'];
		$metakeywords=$_POST['metakeywords'];
		$noidung=@$_POST['noidung'];
		$anhien=$_POST['anhien'];
		
		
		$mota=$_POST['mota'];
		$file=$_FILES['urlhinh'];
		$hinh ='';
		if($file['name']!="")
		{
			$urlhinh=time().'_'.$file['name'];
			move_uploaded_file($file['tmp_name'],"../images/urlhinh/".$urlhinh);
			if(file_exists("../images/urlhinh/".$r1['urlhinh'])) unlink("../images/urlhinh/".$r1['urlhinh']);
			$hinh = " urlhinh='$urlhinh'";
		}
		
		
		$sql="update baiviet set 
									   tenbaiviet='$tenbaiviet',
									   tenmenubaiviet='$tenmenubaiviet',
									   alias='$alias',
									   metadescription='$metadescription',
									   metakeywords='$metakeywords',
									   noidung='$noidung',
									   anhien='$anhien',
									   $hinh
									   mota='$mota'
									   	
									   
									where idbaiviet=".$idbaiviet;
		//echo $sql;
		mysql_query($sql);
		echo'<script>alert("Cập nhật news thành công");window.location="?action=news";</script>';
	}
?>
<div class="news">
<h2 class="title_admin"> Sửa News </h2>
<form action="" method="post" enctype="multipart/form-data">
<center>
<table width="95%" border="1" cellspacing="0" cellpadding="0">

  <tr>
    <th width="200" align="right" valign="middle" scope="row">Tiêu đề : </th>
    <td width="494">
		<label>
			<input class="input_style1" type="text" name="tenbaiviet" size="50" id="tenbaiviet" value="<?php echo $r1['tenbaiviet'] ?>"/>
		</label>
	</td>
  </tr>

  
   <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Alias:</th>
			<td width="85%"><input class="input_style1" type="text" name="alias" id="alias" size="50" value="<?php echo $r1['alias'] ?>"></td>
	</tr>
		
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Meta description:</th>
			<td width="85%">
				<textarea class="textarea_style1" name="metadescription" id="metadescription" cols="45" rows="5"><?php echo $r1['metadescription'] ?></textarea>
			</td>
		  </tr>
		
		 <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Meta keywords:</th>
			<td width="85%">
				<textarea class="textarea_style1" name="metakeywords" id="metakeywords" cols="45" rows="5"><?php echo $r1['metakeywords'] ?></textarea>
			</td>
		 </tr>

  <tr>
    <th align="right" valign="middle" scope="row">Mô tả ngắn :</th>
    <td><textarea class="textarea_style1" name="mota" id="mota"><?php echo $r1['mota'] ?></textarea></td>
  </tr>

  <tr>
    <th align="right" valign="middle" scope="row">Nội dung</th>
    <td><textarea class="textarea_style1" name="noidung" id="noidung"><?php echo $r1['noidung'] ?></textarea></td>
  </tr>  
   <tr>
    <th align="right" valign="middle" scope="row">Hình đại diện: </th>
    <td>
		<img src="../images/urlhinh/<?php echo $r1['urlhinh']?>" title="<?php echo $r1['urlhinh'] ?>"  height="100" width="100"  /></br>
		<input style="border:1px solid #cccccc" size="33" class="input300" type="file" name="urlhinh" id="urlhinh" />
		<i>(Bỏ qua mục này nếu không muốn thay đổi hình ảnh)</i>
	</td>
  </tr>
  <tr>
    <th align="right" valign="middle" scope="row">Ẩn hiện :</th>
    <td><label>
      <input name="anhien" type="checkbox" id="anhien" value="1" <?php if($r1['anhien']==1)echo 'checked="checked"'; ?>/>
    </label><i>(Chọn nếu muốn bài viết hiển thị)</i></td>
  </tr>
  <!--
  <tr>
    <th align="right" valign="middle" scope="row">Thứ tự :</th>
    <td><input class="input_style1" type="text" name="thutu" id="thutu" value="<?php echo $r1['thutu'] ?>"/></td>
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
	CKFinder.setupCKEditor( editor, '../libs/ckfinder/' ) ;

</script>