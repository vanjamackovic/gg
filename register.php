<?php require('db.php'); ?>
<?php require('navbar.php');?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/template.css">
    <title>GG.com</title>
</head>

<body>
<h1>
    Registracija
</h1>
<p>
<form action="insert.php" method="post">
    Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="text" name="password"><br>
    <input type="submit" value="Registriraj se">
</form>
</p>

</body>
</html>