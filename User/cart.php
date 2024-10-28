<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4; /* Light background for contrast */
    }

    .hero {
        background: url('path/to/your/hero-image.jpg') no-repeat center center; /* Example background image */
        background-size: cover;
        padding: 60px 0;
        text-align: center;
        color: white;
    }

    .intro-excerpt h1 {
        font-size: 3rem;
        margin-bottom: 0;
    }

    .untree_co-section {
        padding: 40px 0;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        margin: 20px auto;
    }

    .table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background-color: #fff; /* White background for table */
        border-radius: 8px;
        overflow: hidden;
    }

    .table th, .table td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f8f8f8;
        color: #333;
        font-weight: bold;
    }

    .table tbody tr:hover {
        background-color: #f1f1f1; /* Hover effect for rows */
    }

    .btn {
        background-color: #007bff; /* Bootstrap primary color */
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        transition: background-color 0.3s, transform 0.2s;
    }

    .btn:hover {
        background-color: #0056b3; /* Darker shade on hover */
        transform: scale(1.05); /* Slightly increase size on hover */
    }

    .btn-success {
        background-color: #28a745; /* Green for continue shopping */
    }

    .btn-success:hover {
        background-color: #218838; /* Darker green on hover */
    }

    .btn-secondary {
        background-color: #6c757d; /* Gray for checkout */
    }

    .btn-secondary:hover {
        background-color: #5a6268; /* Darker gray on hover */
    }

    .text-black {
        color: #333;
    }

    .border-bottom {
        border-bottom: 2px solid #007bff; /* Blue border for emphasis */
    }

    @media (max-width: 768px) {
        .hero {
            padding: 30px 0;
        }

        .intro-excerpt h1 {
            font-size: 2rem;
        }
    }
</style>

	</head>

	<body>
	<?php include "header.php" ?>

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>Cart</h1>
							</div>
						</div>
						<div class="col-lg-7">
							
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		

		<div class="untree_co-section before-footer-section">
            <div class="container">

          


              <div class="row mb-5">
                <form class="col-md-12" method="post">
                  <div class="site-blocks-table">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="product-thumbnail">Image</th>
                          <th class="product-name">Product</th>
                          <th class="product-price">Price</th>
                          <th class="product-quantity">Quantity</th>
                          <th class="product-total">Total</th>
                          <th class="product-remove">Remove</th>
                        </tr>
                      </thead>
                      <tbody>

						<?php
							$i = 0;
							$total=0; 
              $_SESSION["total_price"] =0;
							if (!empty($_SESSION["mycart"])) {
								// Convert array to string

								$id_string = implode(",",$_SESSION["mycart"]);
								$run = mysqli_query($conn, "SELECT * FROM `book` WHERE BookID in ($id_string)");

								while ($data=mysqli_fetch_array($run)) { ?>
									<tr>
									<td class="product-thumbnail">
									  <img src="../Admin/<?php echo $data[4]; ?>" height="100px" width="150px" alt="Image" class="img-fluid">
									</td>
									<td class="product-name">
									  <h2 class="h5 text-black"><?php echo $data[1]; ?></h2>
									</td>
									<td> Rs. <?php echo $data[5]; ?></td>
									<td>
									  <?php echo $_SESSION ["qty"][$i]; ?>
				  
									</td>
									<td>Rs. <?php echo $data[5] * $_SESSION["qty"][$i] ?></td>
									<td><a href="deletecart.php?delete=<?php echo $data[0] ?>" class="btn btn-black btn-sm">X</a></td>
								  </tr>
								  
				  
						<?php	
						$total = 	$data[5] * $_SESSION["qty"][$i] + $total;		
           
						$i++;

            $_SESSION["total_price"] = $total;
					}
							} else { ?>
								<tr>
								<th>
									No Product Added in Cart
								</th>
								</tr>
						<?php	}					
						?>                  
                      </tbody>
                    </table>
                  </div>
                </form>
              </div>
        
              <div class="row">
                <div class="col-md-6">
                  <div class="row mb-5">
                    
                    <div class="col-md-6">
                      <a class="btn btn-success" href="Featured.php">Continue Shopping</a>
                    </div>
                  </div>            
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
                          <strong class="text-black">Rs. <?php echo $total;?></strong>
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
                           $_SESSION["total_price"]			= $total + 150;	
                          $total + 150?></strong>
                        </div>
                      </div>
        
                      <div class="row">
                        <div class="col-md-12">
                          <button class="btn btn-secondary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		<br> 
		  <?php include "footer.php" ?>

	</body>

</html>