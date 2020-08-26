<?php
$username = $password = "";
if (isset($_POST['username']))
    $username = $_POST['username'];
if (isset($_POST['password']))
    $password = $_POST['password'];
echo $username . " " . $password;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <main>
        <form method="post" action="#">
            <label>Username: </label>
            <input type="text" name="username" value="<?php echo $username ?>">
            <label>Password: </label>
            <input type="text" name="password" value="<?php echo $password ?>">
            <button type="submit">Submit</button>
            <?php echo $result; ?>
        </form>
    </main>
</body>

</html>