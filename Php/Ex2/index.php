<?php
$n = "";
if (isset($_GET["n"]))
    $n = $_GET["n"];
for ($i = 0; $i <= 9; $i++) {
    echo $n * $i;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form name="bcc" id="bcc" action="" method="get">
        Nhập n: <input type="text" name="n" id="n" value="<?php echo $n ?>"> <br><br>
        <input type="submit" value="Hiển thị">
    </form>

</body>

</html>