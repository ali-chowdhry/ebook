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
$query="SELECT * FROM category where CatID = $i";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

    ?>
    <div class="container">
        <br><br>
    <form action="" method="post">
    <h1>Update Category</h1>
    <label>Update category name:</label>
    <input type="text" name="name" placeholder="Update your category name" class="form-control" value = <?php echo "$row[1]"; ?> required>
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

$q = "UPDATE `category` SET category_name='$name' WHERE CatID = $i";

if(mysqli_query($conn, $q)){
    echo "
    <script>
    alert('Category updated successfully');
    window.location.href='showcategory.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('Category is not updated');
    window.location.href='showcategory.php'
    </script>
    ";
}
}

?>