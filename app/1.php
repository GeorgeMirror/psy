<?

$dir    = 'tpl/';
$files1 = scandir($dir);

/*foreach($files1 as $val)
{
	if($val != "." && $val != ".." && $val != ".DS_Store")
	{
		$nmval = str_replace(".html", ".php", $val);
		file_put_contents("inc/" . $nmval, "<?\n\$tpl = \"" . $nmval . "\";\n\$name = \"\";\n\$title = \"\";\n\$ahone = \"\";\n\$kw = \"\";\n\$dc = \"\";\n");
	}
}*/

$arr = "array(";

foreach($files1 as $val)
{
	if($val != "." && $val != ".." && $val != ".DS_Store")
	{
		
		$nmval = str_replace(".html", ".php", $val);
		$arr .= '"'.str_replace(".php", "", $val).'"=>"'.$val.'",';
		/*file_put_contents("tpl/" . $nmval, file_get_contents("tpl/" . $val));*/
	}
}
$arr .= ");";
echo $arr;

?>