<?php require('db.php'); ?>
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
    $sql = "SELECT * FROM users WHERE username='" . $_POST['username'] . " ' AND password='" . $_POST['password'] . "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
        // output data of each row
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['id'];
        header('Location: index2.php');
    }
    else
    {
        header('Location: login.php?login=fail');
    }
    ?>
</p>
</body>
</html>