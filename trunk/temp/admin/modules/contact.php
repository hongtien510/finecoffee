
<?php
	$sql="select * from contact where idcontact=1";
	//echo $sql;
	$rs=mysql_query($sql);
	$r=mysql_fetch_assoc($rs);

		if(isset($_POST['submit']))
		{
			$alias= preg_replace("/[^a-zA-Z0-9_\-]+/", "", $_POST['alias']);
			$metadescription=$_POST['metadescription'];
			$metakeywords=$_POST['metakeywords'];
			$tencongty=$_POST['tencongty'];
			$diachi=$_POST['diachi'];
			$dienthoai=$_POST['dienthoai'];
			$email=$_POST['email'];
			$skype=$_POST['skype'];
			$yahoo=$_POST['yahoo'];
		
			if($alias==""){
				echo '<script>alert("Bạn phải nhập alias")</script>';
			}

			else{				
					$sql2="update contact set alias='$alias', 
											 metadescription='$metadescription', 
											 metakeywords='$metakeywords', 
											 tencongty='$tencongty', 
											 diachi='$diachi', 
											 dienthoai='$dienthoai', 
											 email='$email', 
											 yahoo='$yahoo', 
											 skype='$skype'
											 where idcontact=1";
	 
					mysql_query($sql2);
					echo '<script>alert("Cập nhật thành công");window.location="?action=wellcom";</script>';
				}	
		}
?>
<div class="BaiViet">
<h2 class="title_admin"> CONTACT </h2>

		<form action="" method="post">
		<center>
		<table width="95%" border="1" cellpadding="0" cellspacing="0">
		
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Alias:</th>
			<td width="85%"><input class="input_style1" type="text" name="alias" id="alias" size="50" value="<?php echo $r['alias'] ?>"></td>
		  </tr>
		
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
			<th width="15%" height="24" align="right" valign="middle" scope="row">Tên công ty:</th>
			<td width="85%"><input class="input_style1" type="text" name="tencongty" id="tencongty" size="50" value="<?php echo $r['tencongty'] ?>"></td>
		  </tr>
		  
		   <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Địa chỉ:</th>
			<td width="85%"><input class="input_style1" type="text" name="diachi" id="diachi" size="50" value="<?php echo $r['diachi'] ?>"></td>
		  </tr>
		  
		   <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Điện thoại:</th>
			<td width="85%"><input class="input_style1" type="text" name="dienthoai" id="dienthoai" size="50" value="<?php echo $r['dienthoai'] ?>"></td>
		  </tr>
		  
		    <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Email:</th>
			<td width="85%"><input class="input_style1" type="text" name="email" id="email" size="50" value="<?php echo $r['email'] ?>"></td>
		  </tr>
		  
		  <tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Skype:</th>
			<td width="85%"><input class="input_style1" type="text" name="skype" id="skype" size="50" value="<?php echo $r['skype'] ?>"></td>
		  </tr>
		  
		<tr>
			<th width="15%" height="24" align="right" valign="middle" scope="row">Yahoo:</th>
			<td width="85%"><input class="input_style1" type="text" name="yahoo" id="yahoo" size="50" value="<?php echo $r['yahoo'] ?>"></td>
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
