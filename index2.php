<?php require ('check.php')?>
<?php require('db.php'); ?>
<?php require('navbar.php');?>
<!DOCTYPE html>
<html lang="en">


<div class="container">

    <div class="starter-template">
        <h1>GG.com</h1>
        <p class="lead">Život je igra!</p>
    </div>

    <div>
        <p>
            <?php

            $sql = "SELECT id, name, link FROM games";
            $result = $conn->query($sql);
            echo("Logged in as" . $_POST['name']);

            if ($result->num_rows > 0) {
                // output data of each row
                echo('<table>');
                while($row = $result->fetch_assoc()) {
                    echo('<tr>');
                    echo('<td>' . $row['name'] . '</td>');
                    echo('<td>' . $row['link'] . '</td>');
                    echo('<td>' . '<a href="delete.php?id=' . $row['id'] . '"><img src="img/delete.gif"></a>' . '</td>');
                    echo('<td>' . '<a href="edit.php?id=' . $row['id'] . '"><img src="img/edit.gif"></a>' . '</td>');
                    echo('</tr>');
                }
                echo('</table>');
            } else {
                echo "Nema igrica";
            }
            $conn->close();
            ?>
        </p>
    </div>

</div><!-- /.container -->


</body>
</html>