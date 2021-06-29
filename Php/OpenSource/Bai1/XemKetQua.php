<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kết quả</title>
</head>

<body>
<h1> Kết quả tổng kết</h1>
<?php
$toan = $_POST["tToan"];//lấy giá trị của input: tToan
$van = $_POST["tVan"];//lấy giá trị của input: tVan
$anh = $_POST["tAnh"];//lấy giá trị của input: tAnh
$tb = ($toan+$van+$anh)/3;
echo "<br>Điểm trung bình:" . $tb;
if($tb<4)
	echo "<br> Trượt";
else if($tb>=4 && $tb <6.5)
	echo "<br> Trung Bình";
else if($tb>=6.5 && $tb<8.0)
	echo "<br> Khá";
else
	echo "<br> Giỏi";		
?>
</body>
</html>