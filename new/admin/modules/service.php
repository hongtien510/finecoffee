<div class="service">
<h2 class="title_admin"> Service </h2>
<center>
<table width="95%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8" align="right" valign="middle"><label>
      <input onclick="window.location='?action=service_them'" type="button" name="button" id="button" value="Thêm Service" />
    </label></td>
    </tr>
  <tr class="tr_top">
    <th width="40" scope="col">STT</th>
    <th width="150" scope="col">Tên Service</th>
	<th width="100" scope="col">Menu Service</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  
  <?php
	$sql="select * from baiviet WHERE loaibaiviet=2 ORDER By thutu DESC";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++;?></td>
    <td><?php echo $r['tenbaiviet']; ?></td>
    <td><?php echo $r['tenmenubaiviet']; ?></td>
    <td align="center" valign="middle"><?php if($r['anhien']==1)echo "X"; ?></td>
    <td align="center" valign="middle">
	<a href="?action=service_sua&idbaiviet=<?php echo $r['idbaiviet']?>"><img src="../images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=service_xoa&idbaiviet=<?php echo $r['idbaiviet']?>"><img src="../images/b_drop.png" width="16" height="16" border="0" /></a>
	
	</td>
  </tr>
 <?php }?>
  <tr>
    <td colspan="8" align="right" valign="middle"><label>
      <input onclick="window.location='?action=service_them'" type="button" name="button" id="button" value="Thêm Service" />
    </label></td>
    </tr>
</table>

</center>



</div><!--End .service-->