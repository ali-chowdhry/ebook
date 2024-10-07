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
        <br><br>
    <form action="" method="post">
    <h1>Add Category</h1>
    <label>Enter a category name:</label>
    <input type="text" name="name" placeholder="Enter your category name" class="form-control" required>
    <br>    
    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
<?php
if(isset($_POST["btn"])){
    $name = $_POST["name"];
    $sql = "INSERT INTO `category` (`category_name`)
     VALUES ('$name')";

     if(mysqli_query($conn,$sql)){
        echo "
        <script>
        alert('New category added successfully');
        
        </script>
        ";
     }
     else {
        echo "
        <script>
        alert('Category can't be created');
         
        </script>
        ";
     }
}
?>



    