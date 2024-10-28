<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include ("header.php");
    $i = $_GET["update"];
    $query = "SELECT * FROM `about_us` WHERE AboutID = $i";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
    <form action="" method="POST">
    <label>Enter your title:</label>
    <input type="text" name="title" placeholder="Enter your title" class="form-control" value="<?php echo $row[1]; ?>" required>
    <br>
    <label>Enter your description:</label>
    <input type="text" name="description" placeholder="Enter your description" class="form-control" value="<?php echo $row[2]; ?>" required>
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

$query = "UPDATE `about_us` SET `Title`='$title',`Description`='$description'WHERE AboutID = $i";

if(mysqli_query($conn, $query)){
    echo "
    <script>
    alert('About us updated successfully');
    window.location.href='showaboutus.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('About us is not updated');
    window.location.href='showaboutus.php'
    </script>
    ";
}
}
?>