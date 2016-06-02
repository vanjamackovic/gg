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

            if ($result->num_rows > 0) {
                // output data of each row
                echo('<table>');
                while($row = $result->fetch_assoc()) {
                    echo('<tr>');
                    echo('<td>' . $row['name'] . '</td>');
                    echo('<td>'. $row['link'].'</td>');
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
