<?php
function ConvertUrl($url, $alias=Null, $seo = true)
{

//$url = "?action=SanPham&mlsp=1&tes=3&gsdf";
 //$seo = false;

//	echo $url."</br>";
	$arrayurl = explode("&", $url);
	
	$url_action = explode("=", $arrayurl[0]);
	$actionurl = $url_action[1];
	
	// echo $arrayurl[0]."</br>";
// $parames =   str_replace("&","",str_replace($arrayurl[0], "", $url));
$parames =   substr(str_replace($arrayurl[0], "", $url),1);
	//	echo $parames;
		// ($parames) ? $prlink = "?" : $prlink="";
	 // $link = $actionurl.".html".$prlink.$parames;
	 $link = $actionurl."/".$parames.".html";
	 // return $link;
//	foreach ($arrayurl as $urlvalue)
//	{
		echo "<pre>";
		print_r($link);
		echo "</pre>";
	//	echo $arrayurl[1];
//	}
//	echo "<pre>";
	//	print_r($arrayurl);
	//	echo "</pre>";
	// return "33";

	
}

function page_div($link, $offset, $numofpages, $page)
{
// echo  $link;
$numofpages = ceil($numofpages);
if($numofpages!=1)
{
$pagesstart = ceil($page-$offset);
$pagesend = ceil($page+$offset);
if ($page != "1" && ceil($numofpages) != "0")
{
echo str_replace('%d_pg', ceil($page-1), "<a href=\"$link\"><li>&lt;</li></a>&nbsp;");
}
for($i = 1; $i <= $numofpages; $i++)
{
if ($pagesstart <= $i && $pagesend >= $i)
{
if ($i == $page)
{
		echo "<li class='page_active'>$i</li>&nbsp;";
}
else
{
echo str_replace('%d_pg', "$i", '<a href="'.$link.'"><li>'.$i.'</li></a>&nbsp; ');
}
}
}
if (ceil($numofpages) == "0")
{
//echo "[$i]";
}
if ($page != ceil($numofpages) && ceil($numofpages) != "0")
{
echo str_replace('%d_pg', ceil($page+1), '<a href="'.$link.'"><li>&gt;</li></a>');
}
}
}

function buttonfooter()
{

	$html = "<table width='80%' cellspacing='0' cellpadding='0' border='0' bgcolor='#ffffff' align='center'>
		<tbody>
			<tr>
				<td>
				<p align='center'><img align='absMiddle' src='images/arrow_left.gif'> <a href='javascript: history.go(-1)'><b>Quay lại</b></a></p></td>
					<td>
				<p align='center'><img align='absMiddle' src='images/arrow_up.gif'> <a href='#'><b>Đầu trang</b></a></p></td>
					<td>
				<p align='center'><img align='absMiddle' src='images/printer.gif'> <a href='javascript:window.print()'><b>In trang</b></a></p></td>
					<td>
				<p align='center'><img align='absMiddle' src='images/icon_send2f.gif'> <a href='LienHe.html'><b>Liên hệ</b></a></p></td>
			</tr>
		</tbody>
	</table>";
	return $html;
} 

function GetMaxSTT($table)
{
	$sql1="select MAX(thutu) from ".$table;
	$rs1=mysql_query($sql1);
	$r1=mysql_fetch_row($rs1);
	$thutumax=$r1[0];
	return $thutumax;
}


function cut_string($str, $len) {
    $str = trim($str);
    if (strlen($str) <= $len) 
    	return $str;
    $str = substr($str, 0, $len);
    if ($str != "") {
        if (!substr_count($str, " ")) return $str." ...";
        while (strlen($str) && ($str[strlen($str) - 1] != " ")) $str = substr($str, 0, -1);
        $str = substr($str, 0, -1). " ...";
    }
    return $str;
}

?>