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
                        $id = $_GET['id']??"";
                        $fetch_query = "SELECT * FROM `book` WHERE Categoryid = $id" ;
                        $result = mysqli_query($conn, $fetch_query);
                    ?>
               
<?php
                        if (mysqli_num_rows($result)>0) {
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
                        } else {?>
<div class="alert alert-danger" role="alert">
 No book found in this category
</div>
                    <?php    }
                        

                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-wrap align-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>				
	</section>
    

<style>
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

</style>


<?php
include("footer.php");
?>
