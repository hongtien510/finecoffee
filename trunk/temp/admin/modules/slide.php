<div class="slide">
<h2 class="title_admin"> Slider Hình </h2>
<center>
<table width="95%" border="1" cellspacing="0" cellpadding="0">
   <tr>
    <td colspan="8" align="right" valign="middle"><label>
      <input onclick="window.location='?action=slide_Them'" type="button" name="button" id="button" value="Thêm Slider Hình" />
    </label></td>
    </tr>
  <tr>
    <th width="40" scope="col">STT</th>
    <th width="150" scope="col">Tên Slider Hình</th>
    <th width="179" scope="col">Mô tả</th>
    <th width="150" scope="col">Hình ảnh</th>
    <th width="45" scope="col">Ẩn</th>
    <th width="75" scope="col">Công cụ</th>
  </tr>
  
  <?php
	$sql="select * from sliderhinh order by thutu";
	$rs=mysql_query($sql);
	$i=1;
	while($r=mysql_fetch_assoc($rs))
	{
  ?>
  <tr>
    <td align="center" valign="middle"><?php echo $i++;?></td>
    <td><?php echo $r['tieude']; ?></td>
    <td><?php echo $r['noidung']; ?></td>
    <td align="center" valign="middle">
	<img src="../images/hinhslide/<?php echo $r['tenhinh'];?>" title="<?php echo $r['tenhinh'] ?>" height="100" width="100"/>
	</td>
    <td align="center" valign="middle"><?php if($r['anhien']==0)echo "X"; ?></td>
    <td align="center" valign="middle">
	<a href="?action=slide_sua&maslider=<?php echo $r['maslider']?>"><img src="../images/b_edit.png" width="16" height="16" border="0" /></a>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa không !!! ');" href="?action=slide_xoa&maslider=<?php echo $r['maslider']?>"><img src="../images/b_drop.png" width="16" height="16" border="0" /></a>
	
	</td>
  </tr>
 <?php }?>
  <tr>
    <td colspan="8" align="right" valign="middle"><label>
      <input onclick="window.location='?action=slide_them'" type="button" name="button" id="button" value="Thêm Slider Hình" />
    </label></td>
    </tr>
</table>
</center>




</div><!--End .slide-->