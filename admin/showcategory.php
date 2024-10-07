<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td,th,h1
        {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include "header.php"; ?>
    <br><br>
    <div class="container">
        <h1>Category</h1>
        <table class="table table-bordered">
            <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Update</th>
            <th>Delete</th>
            </tr>
            <?php
        $query="SELECT * FROM category";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>".$row[0]."</td>";
        echo "<td>".$row[1]."</td>";
        echo '<td><a href="updatecategory.php?update='.$row[0].'"><i class="bi bi-pencil-square"></i></a></td>';
        echo '<td><a href="deletecategory.php?delete='.$row[0].'"><i class="bi bi-trash3-fill"></i></a></td>';
        echo "</tr>";
    }
    ?>

        </table>
        <a href="addcategory.php" class="btn btn-primary">Insert</a>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>