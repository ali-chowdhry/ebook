<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        </style>
</head>
<body>
    <?php include "header.php"?>
    <br><br>
    <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="addbook.php"class="btn btn-primary">Insert</a>
    </div>
    <br><br>
    <div class="container">
      <h1>BOOKS</h1>
      <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Category</th>
            <th>Publisher</th>
            <th>Author</th>
            <th>Image</th>
            <th>Price</th>
            <th>Availability</th>
            <th>Rating</th>
            <th>UPDATE</th>
            <th>DELELTE</th>
        </tr>
        <?php
        $query="SELECT * FROM author_info";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result))
        {
          echo"<tr>";
          echo"<td>".$row[0]."</td>"; 
          echo"<td>".$row[1]."</td>"; 
          echo"<td>".$row[2]."</td>"; 
          echo"<td>".$row[3]."</td>"; 
          echo"<td>".$row[4]."</td>";
          echo"<td>".$row[5]."</td>";  
          echo"<td>".$row[6]."</td>";
          echo"<td>".$row[7]."</td>";
          echo"<td>".$row[8]."</td>";      
          echo'<td><a href="updatecategory.php?update='.$row[0].'"><i class="bi bi-pencil-square"</a></td>';
          echo'<td><a href="deletecategory.php?delete='.$row[0].'"><i class="bi bi-trash3-fill"</a></td>';
        }

        ?>
        

      </table>  
    </div> 
   <?php include "footer.php"?>
</body>
</html>