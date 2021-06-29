<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nhập điểm</title>
<script language="javascript" src="MyScript.js"></script>
<style type="text/css">
.tieude {
	text-align: center;
}
</style>
</head>

<body>
<h2 class="tieude">Nhập điểm </h2>
<form id="form1" name="form1" method="POST" 
	action="XemKetQua.php">
  <table width="500" border="0" align="center">
    <tr>
      <td width="176">Điểm toán:</td>
      <td width="314">
      <input type="text" name="tToan" id="tToan" /></td>
    </tr>
    <tr>
      <td>Điểm văn:</td>
      <td>
      <input type="text" name="tVan" id="tVan" /></td>
    </tr>
    <tr>
      <td>Điểm anh:</td>
      <td><input type="text" name="tAnh" id="tAnh" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>
      <input type="submit" name="button" id="button"
       value="Xem kết quả" onclick="return kiemtra();" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>