<?php
	$sql = "Select * from cauhinh";
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);
	if(isset($_POST['submit']))
	{
		$title=$_POST['titlewebsite'];
		$description=$_POST['metadescription'];
		$keywords=$_POST['metakeyword'];
		$infocompany=$_POST['infocompany'];

		
		$sql="update cauhinh set 
									   title='$title',
									   description='$description',
									   keywords='$keywords',
									   infocompany='$infocompany'";
		mysql_query($sql);
		echo'<script>alert("Cập nhật cấu hình thành công");window.location="?action=cauhinh";</script>';
	}
?>
<div class="menu">
<h2 class="title_admin"> Cấu hình Website </h2>
<form action="" method="post">
<center>
<table width="95%" border="1" cellspacing="0" cellpadding="0">

	<tr>
		<th width="200" align="right" valign="middle" scope="row">Title Website : </th>
		<td width="494">
			<label>
				<input class="input_style3" type="text" name="titlewebsite" size="50" id="titlewebsite" value="<?php echo $r['title'] ?>" />
			</label>
		</td>
	</tr>
  
	<tr>
		<th align="right" valign="middle" scope="row">Description : </th>
		<td>
			<textarea class="textarea_style1" name="metadescription" id="metadescription" cols="45" rows="5"><?php echo $r['description'] ?></textarea>
		</td>
	</tr>
	
	<tr>
		<th align="right" valign="middle" scope="row">Keywords : </th>
		<td>
			<textarea class="textarea_style1" name="metakeyword" id="metakeyword" cols="45" rows="5"><?php echo $r['keywords'] ?></textarea>
		</td>
	</tr>
	
	<tr>
		<th align="right" valign="middle" scope="row">Thông tin công ty : </th>
		<td>
			<textarea class="textarea_style1" name="infocompany" id="infocompany" cols="45" rows="5"><?php echo $r['infocompany'] ?></textarea>
		</td>
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
<script>
	var editor=CKEDITOR.replace( 'infocompany' );
	CKFinder.setupCKEditor( editor, 'libs/ckfinder/' ) ;
</script>