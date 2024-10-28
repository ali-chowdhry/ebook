<?php
include("header.php");
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
</div>

<div class="container">
    <?php
    // Alert messages
    if (isset($_SESSION["book_already_added"])) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            ' . $_SESSION["book_already_added"] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        unset($_SESSION["book_already_added"]);
    }

    if (isset($_SESSION["msg"])) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            ' . $_SESSION["msg"] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        unset($_SESSION["msg"]);
    }

    if (isset($_SESSION["order_placed"])) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            ' . $_SESSION["order_placed"] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        unset($_SESSION["order_placed"]);
    }
    ?>
</div>

<section id="featured-books" class="py-5 my-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
<<<<<<< HEAD
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
<<<<<<< HEAD
                5
=======
>>>>>>> 645a841c6e25683356b618d0feda7cf7fa909f6e
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">

=======
<<<<<<< HEAD
>>>>>>> 2dc21c1374a52d8671c75023dc177306b04d2f0e
=======
>>>>>>> 9297fce087122641c0d2d3a38ce8682e18707c06
>>>>>>> 645a841c6e25683356b618d0feda7cf7fa909f6e
                <div class="product-list" data-aos="fade-up">
                    <div class="row">
                        <?php 
                        // Prepare the query based on search input
                        $search = isset($_GET['Search']) ? mysqli_real_escape_string($conn, $_GET['Search']) : '';
                        $fetch_query = "SELECT * FROM `book`" . ($search ? " WHERE Name LIKE '%$search%'" : "") ;
                        $result = mysqli_query($conn, $fetch_query);
<<<<<<< HEAD
                    ?>
               
<?php
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
=======
                        
                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <div class="mt-4 col-md-4">
                                    <div class="card">
                                        <img src="<?php echo $row[4]; ?>" class="card-img-top" alt="..." height="250px">
                                        <div class="card-body">
                                            <h5 class="card-title"><?php echo $row[1]; ?></h5>
                                            <p class="card-text">Rs. <?php echo $row[5]; ?></p>
                                            <a href="bookdescription.php?b=<?php echo $row[0]; ?>" class="btn btn-primary">Add to cart</a>
                                        </div>
                                    </div>
>>>>>>> 9297fce087122641c0d2d3a38ce8682e18707c06
                                </div>
                            <?php } 
                        } else {
                            echo "<p>No books found.</p>";
                        }
                        ?>
                    </div>
                </div>
<<<<<<< HEAD
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
<<<<<<< HEAD
=======
=======
>>>>>>> 860d28faab50408ba3adbc46b6ac7b9735ec44c5
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

							<?php } ?>



			<div class="row">
				<div class="col-md-12">

					<div class="btn-wrap align-right">
						<a href="#" class="btn-accent-arrow">View all products <i
								class="icon icon-ns-arrow-right"></i></a>
					</div>

				</div>
			</div>
		</div>
	</section>
>>>>>>> 26b5ac32f33838b11ebd7a2aabbd2609eda2ed2b
    <?php
    include("footer.php");
    ?>
=======
            </div>
        </div>
<<<<<<< HEAD
    </section>

					
	</section>

    <?php
    include("footer.php");
    ?>
=======
    </div>
</section>

<style>
/* General Styles */
body {
    background-color: #f4f4f4; /* Light background for contrast */
    font-family: 'Arial', sans-serif; /* Font styling */
}

/* Container Styles */
.container {
    margin-top: 30px; /* Space above each container */
}

/* Search Input Styles */
.input-group {
    margin-bottom: 20px; /* Space below the search input */
}

.form-control {
    border-radius: 5px; /* Rounded corners */
    border: 1px solid #ced4da; /* Border color */
}

.btn-warning {
    border-radius: 5px; /* Rounded corners */
    transition: background-color 0.3s ease; /* Smooth background change */
}

.btn-warning:hover {
    background-color: #ffca2e; /* Lighter on hover */
}

/* Alert Styles */
.alert {
    border-radius: 5px; /* Rounded corners */
}

/* Featured Books Section */
#featured-books {
    padding: 40px 0; /* Vertical padding */
}

#featured-books {
    background-color: #f9f9f9; /* Soft background */
    padding: 40px 20px; /* Spacing around the section */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow for depth */
}

.product-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Space between books */
    justify-content: center; /* Center-align books */
}

.card {
    background-color: #fff; /* Card background */
    border: none; /* No border */
    border-radius: 10px; /* Rounded corners */
    overflow: hidden; /* Prevent overflow */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animation effects */
    width: 100%; /* Full width */
    max-width: 300px; /* Max width for cards */
    text-align: center; /* Center text in cards */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Light shadow */
}

.card:hover {
    transform: scale(1.05); /* Slightly enlarge on hover */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
}

.card img {
    height: 250px; /* Fixed height for images */
    width: 100%; /* Full width */
    object-fit: cover; /* Ensure images cover the card */
    transition: transform 0.3s ease; /* Image transition */
}

.card:hover img {
    transform: scale(1.1); /* Scale image on hover */
}

.card-body {
    padding: 15px; /* Padding inside card body */
}

.card-title {
    font-size: 1.25rem; /* Title size */
    font-weight: bold; /* Bold title */
    margin: 10px 0; /* Margin around title */
    color: #333; /* Title color */
}

.card-text {
    font-size: 1rem; /* Price size */
    margin: 10px 0; /* Margin around price */
    color: #666; /* Price color */
}

/* Button Styles */
.btn-primary {
    background-color: #28a745; /* Green button */
    color: #fff; /* White text */
    border: none; /* No border */
    border-radius: 5px; /* Rounded corners */
    padding: 10px 15px; /* Padding for buttons */
    transition: background-color 0.3s; /* Transition effect */
    margin-top: 10px; /* Space above button */
}

.btn-primary:hover {
    background-color: #218838; /* Darker green on hover */
}

/* Responsive Styles */
@media (max-width: 768px) {
    .card {
        max-width: 90%; /* Wider on smaller screens */
    }
}

/* Responsive Styles */
@media (max-width: 768px) {
    .col-md-4 {
        margin-bottom: 20px; /* Space between cards */
    }
}
</style>


<?php
include("footer.php");
?>
<<<<<<< HEAD
>>>>>>> 2dc21c1374a52d8671c75023dc177306b04d2f0e
=======
>>>>>>> 9297fce087122641c0d2d3a38ce8682e18707c06
>>>>>>> 645a841c6e25683356b618d0feda7cf7fa909f6e
