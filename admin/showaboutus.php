<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td, th, h1 {
            text-align: center;
        }
        /* Add this style for the description column */
        td.description {
            white-space: pre-wrap; /* Wrap text when it reaches the cell width */
            word-wrap: break-word; /* Ensure long words break within the cell */
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <br><br>
    <div class="container">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a href="addaboutus.php" class="btn btn-primary">Insert</a>
        </div>
        <br><br>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Record Insert</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php
            $query = "SELECT * FROM `about_us`";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td class='description'>" . $row[2] . "</td>";
                echo "<td>" . $row[3] . "</td>";
                echo '<td><a href="updateaboutus.php?update=' . $row[0] . '"><i class="fa fa-solid fa-pencil" style="font-size: 21px;color: green;"></i></a></td>';
                echo '<td><a href="deleteaboutus.php?delete=' . $row[0] . '"><i class="fa fa-solid fa-trash" style="font-size: 21px;color: red;"></i></a></td>';
                echo "</tr>";
            }
            ?>
        </table>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
