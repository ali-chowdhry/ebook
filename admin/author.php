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
        <input type="radio" value="gender" name="male" reqiured>Male 
        <input type="radio" value="gender" name="female" reqiured>Female
        <br><br>
        <p>Author Age</p>
        <input type="number" name="age" placeholder="enter author age" required class="form-control">
        <br>
        <p>Book Name</p>
        <input type="text" name="bname" placeholder="enter book name" required class="form-control">
        <br>
        <button type="submit" name="btn" class="btn btn-primary">Submit</button>
        

        <?php include "footer.php"; ?>
    
</body>
</html>