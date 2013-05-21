
<?php
session_start(); 
 include('../../libs/db_connect.php'); 
 ?>
<?php
//lam ham su ly bo html
	$User=mysql_real_escape_string($_POST['user']);
	$Password=sha1(mysql_real_escape_string($_POST['matkhau']));
	
	//echo $MatKhau;
	$sql="select * from useradmin where user='$User' AND password='$Password'";
	$rs=mysql_query($sql);
	//echo $sql;
	//exit();
	if(mysql_num_rows($rs)==1)
	{
		$r=mysql_fetch_assoc($rs);
		$_SESSION['iduseradmin']=$r['iduser'];
		$_SESSION['hotenadmin']=$r['hoten'];
		echo ("<script>alert('đăng nhập thành công!'); window.location='../../admin/index.php';</script>");
		
	}
	else
		{
			echo ("<script>alert('Mật khẩu hoặc tên đăng nhập không đúng'); window.location='../../admin/index.php'</script>");
			
		}
?>
