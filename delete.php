<?php require ('check.php')?>
<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>GG.com</title>
</head>

<body>
<h1>
    Obriši igricu
</h1>

<p>
    <?php
    $sql = "DELETE FROM favorites WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    echo('Igrica je obrisana!<br>');
    echo('<a href="index.php">Povratak na prikaz igrica</a>');
    ?>
</p>
</body>
</html>