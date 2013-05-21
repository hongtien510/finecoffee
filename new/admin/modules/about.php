
<?php
	$sql="select * from baiviet where loaibaiviet=1";
	//echo $sql;
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);

		if(isset($_POST['submit']))
		{
			//$alias= preg_replace("/[^a-zA-Z0-9_\-]+/", "", $_POST['alias']);
			$metadescription=$_POST['metadescription'];
			$metakeywords=$_POST['metakeywords'];
			$noidung=$_POST['noidung'];
		/*
			if($alias==""){
				echo '<script>alert("Bạn phải nhập alias")</script>';
			}
		*/
			
			$sql2="update baiviet set metadescription='$metadescription', 
									 metakeywords='$metakeywords', 
									 noidung='$noidung' 
									 where loaibaiviet=1";

			mysql_query($sql2);
			echo '<script>alert("Cập nhật thành công");window.location="?action=aboult";</script>';
					
		}
?>
<div class="BaiViet">
<h2 class="title_admin"> ABOUT </h2>

		<form action="" method="post">
		<center>
		<table width="95%" border="1" cellpadding="0" cellspacing="0">
		<!--
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Alias:</th>
			<td width="85%"><input class="input_style1" type="text" name="alias" id="alias" size="50" value="<?php echo $r['alias'] ?>"></td>
		  </tr>
		-->
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Meta description:</th>
			<td width="85%">
				<textarea class="textarea_style1" name="metadescription" id="metadescription" cols="45" rows="5"><?php echo $r['metadescription'] ?></textarea>
			</td>
		  </tr>
		
		 <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Meta keywords:</th>
			<td width="85%">
				<textarea class="textarea_style1" name="metakeywords" id="metakeywords" cols="45" rows="5"><?php echo $r['metakeywords'] ?></textarea>
			</td>
		 </tr>
		   <tr>		
			<td valign="top" colspan="2">
			Nội dung
			</td>
		  </tr>
		  <tr>		
			<td valign="top" colspan="2">
			<textarea class="textarea700" name="noidung" id="noidung" cols="45" rows="55"><?php echo $r['noidung'] ?></textarea>
			</td>
		  </tr>
		 
		  
		  <tr>			
			<td colspan="2">
			<center>
				<input type="submit" name="submit" id="submit" value="Lưu lại">
			</center>
			</td>
		  </tr>
		  
		</table>
		<center>
		</form>
</div><!--End .BaiViet-->
<script>
	var editor=CKEDITOR.replace( 'noidung' );
	CKFinder.setupCKEditor( editor, 'libs/ckfinder/' ) ;
</script>