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
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a href="addcategory.php"class="btn btn-primary">Insert</a>
</div>
    <br><br>
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
        echo '<td><a href="updatecategory.php?update='.$row[0].'"><i class="fa fa-solid fa-pencil" style="font-size: 21px;color: green;"></i></a></td>';
        echo '<td><a href="deletecategory.php?delete='.$row[0].'"><i class="fa fa-solid fa-trash" style="font-size: 21px;color: red;"></i></a></td>';
        echo "</tr>";
    }
    ?>

        </table> 
    </div>

    <?php include "footer.php"; ?>
</body>
</html>