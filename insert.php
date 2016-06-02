<?php require ('check.php')?>
<?php require('db.php'); ?>
<?php require('navbar.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>GG.com</title>
</head>

<body>
<h1>
    Korisnik je unesen
</h1>

<p>
    <?php
    $sql = "INSERT INTO users (username, password) VALUES ('" . $_POST['username'] . "', '" . $_POST['password'] . "')";
    $result = $conn->query($sql);
    ?>
</p>
</body>
</html>