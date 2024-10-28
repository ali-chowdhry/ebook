<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("header.php");
?>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h1>Checkout</h1>
        <form action="" method="POST">
        <label>Name:</label>
        <input type="text" name="name" placeholder="Enter your name" class="form-control" required>
        <br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
        <br>
        <label>Phone:</label>
        <input type="tel" name="phone" placeholder="Enter your phone" class="form-control" required>
        <br>
        <label>Address:</label>
        <input type="text" name="address" placeholder="Enter your address" class="form-control" required>
        <br>
        <button type="submit" name="btn" class="btn btn-success">Place Order</button>
        <br>
    </form>
        </div>

        <div class="col-md-6 pl-5">
                  <div class="row justify-content-end">
                    <div class="col-md-7">
                      <div class="row">
                        <div class="col-md-12 text-right border-bottom mb-5">
                          <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-md-6">
                          <span class="text-black">Subtotal</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">Rs. <?php echo $_SESSION["total_price"];?></strong>
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Shipping</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">Rs.150</strong>
                        </div>
                      </div>
					  <hr>
					  <div class="row mb-5">
                        <div class="col-md-6">
                          <span class="text-black">Total Amount</span>
                        </div>
                        <div class="col-md-6 text-right">
                          <strong class="text-black">Rs. <?php echo 
                          $_SESSION["total_price"]	=   (int)$_SESSION["total_price"] + 150;	
                          ?></strong>
                        </div>
                      </div>
        
                     
                    </div>
                  </div>
                </div>
        
    </div>
</div>

<br>
<?php
if(isset($_POST["btn"])){
$Name = $_POST["name"];
$Email = $_POST["email"];
$Phone = $_POST["phone"];
$Address = $_POST["address"];


echo "
<script>
    window.location.href='placeorder.php';
</script>
";

}
?>

<?php
include("footer.php");
?>
</body>
</html>