<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        td,th,h1
        {
            text-align: center;
        }
    </style>

<?php include "header.php"; ?>
<br><br>
<table class="table table-border">
    <tr>
     <th>ID</th>
     <th>Name</th>
     <th>Email</th>
     <th>Message</th>
     <th>Update</th>
     <th>Delete</th>         
    </tr>
    <?php
    $query="SELECT * FROM `contact`";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result))
    {
     echo"<tr>";
     echo"<td>.$row[0].</td>";
     echo"<td>.$row[1].</td>";
     echo"<td>.$row[2].</td>";
     echo"<td>.$row[3].</td>";
     echo '<td><a href="updatecontact.php?update='.$row[0].'"><i class="fa fa-solid fa-pencil" style="font-size: 21px;color: green;"></i></a></td>';
     echo '<td><a href="deletecontact.php?delete='.$row[0].'"><i class="fa fa-solid fa-trash" style="font-size: 21px;color: red;"></i></a></td>';
     echo"</tr>";

    }
    ?>
</table>  
</div> 
<?php include "footer.php"; ?>
</body>
</html>