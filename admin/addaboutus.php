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
<form action="" method="POST">
<h1>Add About Us</h1>
<label>Enter your title:</label>
<input type="text" name="title" placeholder="Enter your title" class="form-control" required>
<br>
<label>Enter your description:</label>
<input type="text" name="description" placeholder="Enter your description" class="form-control" required>
<br>
<button name="btn" class="btn btn-primary">Submit</button>
</form>
</div>
<?php include "footer.php"; ?>
</body>
</html>
<?php
if(isset($_POST["btn"])){
    $title = $_POST["title"];
    $description = $_POST["description"];
    
    
    $sql = "INSERT INTO `about_us` (`Title`, `Description`)
     VALUES ('$title', '$description')";

     if(mysqli_query($conn,$sql)){
        echo "
        <script>
        alert('About us added successfully');
        
        </script>
        ";
     }
     else {
        echo "
        <script>
        alert('About us can't be added');
         
        </script>
        ";
     }
}
?>