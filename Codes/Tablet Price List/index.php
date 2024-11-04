<?php
    include "db.php";

    $sql="Select * from contacts";
    $result=$coonn->query($sql);

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tablet Price List</title>
    </head>
    <body>
        <h2>Tablet Price List</h2>

        <table border="1">
            <tr>
                <th>Name</th>
                <th>Tablet</th>
                <th>Action</th>
            </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>" .$row['name']. "</td>";
                echo "<tr>" .$row['tablet']. "</td>";
                echo "<td>Delete</td>";
            }

        }
        else {
            echo "<tr><td colspan='3'>No Items</td></tr>";
        }
        ?>
        </table>
    </body>
    </html>