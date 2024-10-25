<?php
include("header.php");
 // Ensure session is started

// Assuming $conn is already defined and connected to the database
?>
<br><br>
<div class="container">

            <div class="row">
                
                    <form action="" method="GET">
                        <div class="input-group">
                        <div class="col-md-9">
                            <input type="text" name="Search" class="form-control" placeholder="Enter your search" value="<?php echo isset($_GET['Search']) ? htmlspecialchars($_GET['Search']) : ''; ?>">
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-2">
                            <button type="submit" class="btn btn-warning">Search</button>
                            </div>
                        </div>
                    </form>
              
            </div>
  
</div><div class="container">
<?php
					if(isset($_SESSION["book_already_added"])){
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
							'. $_SESSION["book_already_added"] .'
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';

						unset($_SESSION["book_already_added"]);

					}

					if(isset($_SESSION["msg"])){
						echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
							'. $_SESSION["msg"] .'
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';

						unset($_SESSION["msg"]);
					}

					if(isset($_SESSION["order_placed"])){
						echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
							'. $_SESSION["order_placed"] .'
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>';

						unset($_SESSION["order_placed"]);
					}
				
				?></div>
<section id="featured-books" class="py-5 my-5">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">

                <div class="product-list" data-aos="fade-up">
                    <div class="row">
                        <?php 
                        // Prepare the query based on search input
                        $search = isset($_GET['Search']) ? mysqli_real_escape_string($conn, $_GET['Search']) : '';
                        $fetch_query = "SELECT * FROM `book`" . ($search ? " WHERE Name LIKE '%$search%'" : "");
                        $result = mysqli_query($conn, $fetch_query);
                    ?>
                <div class="product-list" data-aos="fade-up">
                    <div class="row">
                        <?php 
                        // Prepare the query based on search input
                        $search = isset($_GET['Search']) ? mysqli_real_escape_string($conn, $_GET['Search']) : '';
                        $fetch_query = "SELECT * FROM `book`" . ($search ? " WHERE Name LIKE '%$search%'" : "");
                        $result = mysqli_query($conn, $fetch_query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <div class="mt-4 col-md-4">
                                <div class="card" style="width: 18rem;">
  <img src="<?php echo $row[4]; ?>" class="card-img-top" alt="..." height="250px">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row[1]; ?></h5>
    <p class="card-text"> Rs. <?php echo $row[5]; ?></p>
    <a href="bookdescription.php?b=<?php echo $row[0]; ?>" class="btn btn-primary">Add to cart </a>
  </div>
</div>
                                </div>
                            <?php } 
                        }
                        

                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-wrap align-right">
                            <a href="#" class="btn-accent-arrow">View all products <i class="icon icon-ns-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- 
					<div class="product-list" data-aos="fade-up">
						<div class="row">
						<?php 
						$fetch_query = mysqli_query($conn, "SELECT * FROM `book`");
						while ($data = mysqli_fetch_array($fetch_query))
						{ ?>
						<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="<?php echo $data[4]; ?>" alt="Books" height="120px" width="120px" class="product-item">
										<button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to
											Cart</button>
									</figure>
									<figcaption>
										<h3 class="book-title"><?php echo $data[1] ?></h3>
										<div class="item-price">Rs.<?php echo  $data[5] ?></div>
									</figcaption>
								</div>
							</div> 

							<?php } ?> -->



			<!-- <div class="row">
				<div class="col-md-12">

					<div class="btn-wrap align-right">
						<a href="#" class="btn-accent-arrow">View all products <i
								class="icon icon-ns-arrow-right"></i></a>
					</div>

				</div>
			</div> -->
		</div>
	</section>

    <?php
    include("footer.php");
    ?>
