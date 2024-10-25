<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="container">
    <h1>ORDER</h1>
    <table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>UserID</th>
        <th>BookID</th>
        <th>Amount</th>
        <th>Status</th>
    </tr>
    
    <?php
    
        $query="SELECT * FROM `order_table`";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result))
        {
        echo "<tr>";
        ("../user/checkout.php"); echo "<td>".$row[0]."</td>";
        ("../user/checkout.php");echo "<td>".$row[1]."</td>";
        ("../user/checkout.php");echo "<td>".$row[2]."</td>";
        ("../user/placeorder.php"); echo "<td>".$row[3]."</td>";
        ("../user/placeorder.php");echo "<td>".$row[4]."</td>";
        echo "</tr>";
    }
    ?>

    </table>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>