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
        $query="SELECT * FROM `book`";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result))
        {
          $fetchcategory=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `category` WHERE `CatID`=$row[3]"));
          $fetchpublisher=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `publisher` WHERE `ID`=$row[8]"));
          $fetchauthor=mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `author_info` WHERE `ID`=$row[2]"));

          echo"<tr>";
          echo"<td>".$row[0]."</td>"; 
          echo"<td>".$row[1]."</td>"; 
          echo"<td>".$fetchcategory[1]."</td>"; 
          echo"<td>".$fetchpublisher[1]."</td>"; 
          echo"<td>".$fetchauthor[1]."</td>";
          echo"<td><img src='".$row[4]." ' height='100' width='100'></td>";  
          echo"<td>".$row[5]."</td>";
          echo"<td>".$row[6]."</td>";
          echo"<td>".$row[8]."</td>";      
          echo'<td><a href="updatebook.php?update='.$row[0].'"><i class="fa fa-solid fa-pencil" style="font-size: 21px;color: green;"></i></a></td>';
          echo'<td><a href="deletebook.php?delete='.$row[0].'"><i class="fa fa-solid fa-trash" style="font-size: 21px;color: red;"></i></a></td>';
        }

        ?>
        

      </table>  
    </div> 
   <?php include "footer.php"?>
</body>
</html>