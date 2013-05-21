<?php		
	$sql = "Select title, description, keywords from cauhinh";		
	$rs=mysql_query($sql);		
	$r=mysql_fetch_assoc($rs);
?>
	<title><?php echo $r['title'] ?></title>
	<meta content="<?php echo $r['keywords'] ?>" name="keywords">
	<meta content="<?php echo $r['description'] ?>" name="description">
	<link type="text/css" href="<?php echo BASE_URL?>css/nivo-slider_bn.css" rel="stylesheet"/>
	<link type="text/css" href="<?php echo BASE_URL?>css/style-nivo-slider_bn.css" rel="stylesheet"/>
