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
$query="SELECT * FROM `publisher` WHERE id = $i";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);

    ?>
    <div class="container">
        <br><br>
    <form action="" method="post">
    <h1>Update Publisher</h1>
    <label>Update Publisher name:</label>
    <input type="text" name="name" placeholder="Update your Publisher name" class="form-control" value = <?php echo "$row[1]"; ?> required>
    <br>    
    <label>Update Publisher number:</label>
    <input type="text" name="number" placeholder="Update your Publisher number" class="form-control" value = <?php echo "$row[2]"; ?> required>
    <br>    
    <label>Update Publisher address:</label>
    <input type="text" name="address" placeholder="Update your Publisher address" class="form-control" value = <?php echo "$row[3]"; ?> required>
    <br>    
    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
<?php
if(isset($_POST["btn"])){
    $name = $_POST["name"] ;
    $number =$_POST["number"];
    $address =$_POST["address"];

$q = "UPDATE `publisher` SET `name`='$name',`number`='$number',`address`='$address' WHERE 1";

if(mysqli_query($conn, $q)){
    echo "
    <script>
    alert('publisher updated successfully');
    window.location.href='showpublisher.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('publishey is not updated');
    window.location.href='showpublisher.php'
    </script>
    ";
}
}

?>