<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "header.php"; ?>
    <h1>Thankyou for your order <?php echo $_SESSION["username"]; 
    unset($_SESSION["mycart"]);
    ?></h1>


    <?php include "footer.php"; ?>
</body>
</html>