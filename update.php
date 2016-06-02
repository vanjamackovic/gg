<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Automobili</title>
</head>

<body>
<h1>
    Automobili
</h1>

<p>
    <?php
    $sql = "UPDATE favorites SET name='" . $_POST['name'] . "', category='" . $_POST['category'] . "', godProizv='" . $_POST['godProizv']  ."' WHERE id = " . $_POST['id'];
    $result = $conn->query($sql);

    header('Location: index.php');
    ?>
</p>
</body>
</html>