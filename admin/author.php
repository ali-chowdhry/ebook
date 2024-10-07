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
<?php include "header.php"; ?>

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
        <?php

if(isset($_POST["btn"])){
  $NAME=$_POST["Aname"];
  $EMAIL=$_POST["email"]; 
  $GENDER=$_POST["gender"]; 
  $AGE=$_POST["age"];



$query= "INSERT INTO `author_info`( `Name`, `Email`, `Gender`, `Age`)
 VALUES (' $NAME',' $EMAIL','$GENDER','$AGE')";
 if(mysqli_query($conn,$query)){
  echo "<script>
    alert('data saved successfullly');
   
    </script>";
 }else{
  echo "<script>
    alert('data not saved unsuccessfullly');
    
    </script>";
   }

 }

 
?>

        

    
</body>
</html>