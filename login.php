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
    Login
</h1>
<p>
    <?php
    if(isset($_GET['login']))
    {
        echo('Krivo korisnicko ime ili lozinka');
    }
    ?>

<form action="login_check.php" method="post">
    Username:<br>
    <input type="text" name="username"><br>
    Password:<br>
    <input type="text" name="password"><br>
    <input type="submit" value="Prijavi se!">
</form>
</p>

</body>
</html>