<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
</head>
<body>
<?php include ("header.php"); ?>

<div class="container">
    <form action="" method="post">
        <h1>Publisher Form</h1>
        <br>
        <p>Publisher Name</p>
        <input type="text" name="name" placeholder="enter publisher name" required class="form-control">
        <br>
        <p>Publisher number</p>
        <input type="number" name="number" placeholder="enter publisher number" required class="form-control">
        <br>
        <p>Publisher address</p>
        <input type="text" name="address" placeholder="enter publisher address" required class="form-control">
        <br>
        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
        

        <?php include ("footer.php"); ?>
    
</body>
</html>

<?php
if(isset($_POST["btn"])) {
    $name = $_POST["name"] ;
    $number =$_POST["number"];
    $address =$_POST["address"];

    $sql = "INSERT INTO `publisher`(`name`, `number`, `address`) VALUES ('$name','$number','$address')";


    if(mysqli_query($conn, $sql)) {
        echo "<script>
        alert('publisher data added successfully');
        window.location.href='showPublisher.php';
        </script>";
    }

    else{
        echo "<script>
        alert('publisher data can't be added');
        </script>";
    }
}
?>