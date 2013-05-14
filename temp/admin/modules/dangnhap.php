<script language="javascript">
	$(document).ready(function(){
		document.dangnhap.matkhau.focus()
	});
</script>

<div class="dangnhap">
		<form action="modules/dangnhap_xuly.php" method="post" name="dangnhap"/>
		<center>
				<table width="600" border="0">
				<tr>
					<td colspan="2" align="center"><p style="color:#00F; font-size:16px">Để sử dụng trang Quản trị, hệ thống yêu cầu bạn phải đăng nhập</p></td>
				</tr>
				<tr>
					<td width="308" align="right" >Tên đăng nhập : <span style="color:#F00;">(*)</span></td>
					<td width="432" align="left"><input class="input_style2" type="text" name="user" placeholder="Nhập tên đăng nhập" value="admin"/><br /></td>
				</tr>
				<tr>
					<td align="right">Mật khẩu : <span style="color:#F00;">(*)</span></td>
					<td align="left"><input class="input_style2" type="password" name="matkhau" placeholder="Nhập mật khẩu"  /></td>
				</tr>
				<tr>
					<td align="right">&nbsp;</td>
					<td align="left">
						<input type="submit" name="submit" id="submit" value="Đăng nhập" />
					</td>
				</tr>
				</table>
		</center>
		</form>

</div><!--End .dangnhap-->
