<?php require ('check.php')?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>GG.com</title>
</head>

<body>
<h1>
    Izmjeni igricu
</h1>

<p>
<form action="insert.php" method="post">
    Name:<br>
    <input type="text" name="name"><br>
    Kategorija:<br>
    <input type="text" name="category"><br>
    Godina izlaska:<br>
    <input type="text" name="godProizv"><br>
    <input type="submit" value="Unesi igricu">
</form>
</p>

<p>
    <a href="unos.php">Unos nove igrice</a>
</p>
</body>
</html>