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
    <form action="" method="post">
        <h1>Author Form</h1>
        <br>
        <p>Author Name</p>
        <input type="text" name="Aname" placeholder="enter author name" required class="form-control">
        <br>
        <p>Author Email</p>
        <input type="text" name="email" placeholder="enter author email" required class="form-control">
        <br>
        <p>Author gender</p>
        <input type="radio" value="male" name="gender" reqiured>Male 
        <input type="radio" value="female" name="gender" reqiured>Female
        <br><br>
        <p>Author Age</p>
        <input type="number" name="age" placeholder="enter author age" required class="form-control">
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