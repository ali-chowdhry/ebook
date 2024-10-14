<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php";
    
$i = $_GET["update"];
$query="SELECT * FROM book where BookID = $i";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

    
    ?>
        <div class="container">
    <form action="" enctype="multipart/form-data" method="post">
    <label>Book Name:</label>
    <input type="text" name="bookname" placeholder="Enter your book name" class="form-control" required>
    <br>
    <label>Book Category:</label>
    <select name="bookcategory" class="form-control" required>
        <?php
    $query = "SELECT * FROM `category`";
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        echo "<option value='$row[0]'>$row[1]</option>";
    }
    ?>
    
    </select>
    <br>
    <label>Book Publisher:</label>
    <select name="bookpublisher" class="form-control" required>
    <?php
    $query = "SELECT * FROM `publisher`";
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        echo "<option value='$row[0]'>$row[1]</option>";
    }
    ?>
    </select>
    <br>
    <label>Book Author:</label>
    <select name="bookauthor" class="form-control" required>
    <?php
    $query = "SELECT * FROM `author_info`";
    $result = mysqli_query($conn, $query);
    while($row=mysqli_fetch_array($result)){
        echo "<option value='$row[0]'>$row[1]</option>";
    }
    ?>  
    </select>
    <br>
    <label>Select Image</label>
     <input type="file" name="pro_image" accept="image/*">
    <br>
    <label>Book Price:</label>
    <input type="text" name="bookprice" placeholder="Enter your book price" class="form-control" required>
    <br>
    <label>Availability:</label>
    <input type="radio" name="availability" value="yes" required>yes
    <input type="radio" name="availability" value="no">no
    <br>
    <label>Rating:</label>
    <select name="rating" class="form-control" required>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option> 
    </select>
    <br>
    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
    </form>
    </div>
   
    <?php include "footer.php"; ?>
</body>
</html>
<?php
if(isset($_POST["btn"])){
$Name = $_POST["bookname"];
$Category = $_POST["bookcategory"];
$Publisher = $_POST["bookpublisher"];
$Author = $_POST["bookauthor"];
$Image = $_FILES["pro_image"]["name"];
$Path = $_FILES["pro_image"]["tmp_name"];
$Folder = "../Book Images/".$Image;


$Price = $_POST["bookprice"];
$Availability = $_POST["availability"];
$Rating = $_POST["rating"];

$query = "INSERT INTO `book` (`Name`, `AuthorID`, `CategoryID`, `Bookimage`, `Bookprice`, `Availability`, `Rating`, `PublisherID`)
 VALUES ('$Name', '$Author', '$Category', '$Folder', '$Price', '$Availability', '$Rating', '$Publisher')";

 if(mysqli_query($conn,$query)){
    move_uploaded_file($Path,$Folder);
    echo "<script>
    alert('Book updated');
    </script>";
 } else {
    echo "
    <script>
    alert('Invalid credential');
    </script>
    ";
 }

}
?>