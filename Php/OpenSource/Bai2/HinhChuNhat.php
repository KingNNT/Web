<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hình chữ nhật</title>
</head>

<body>
<?php
$chieudai=""; $chieurong="";
if(isset($_POST["b1"]))//nếu có b1 nghĩa là form được submit
{
	//include("thuvien.php");
	require("thuvien.php");
	$chieudai = $_POST["tDai"];
	$chieurong = $_POST["tRong"];
	$cv = chuvi($chieudai,$chieurong);
	$dt = dientich($chieudai,$chieurong);
	echo "<br>Chu vi: $cv";
	echo "<br>Diện tích: $dt";
}
?>
<form name="f1" id="f1" method="post" action="">
Chiều dài:<input type="text" name="tDai" 
	id="tDai" value="<?=$chieudai?>" />
<br />
Chiều rộng:<input type="text" name="tRong" 
	id="tRong" value="<?=$chieurong?>" />
<br />
<input type="submit" name="b1" id="b1" value="Tính" />
</form>
</body>
</html>