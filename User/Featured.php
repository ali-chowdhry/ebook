<?php
include("header.php");
?>
<section id="featured-books" class="py-5 my-5">
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Some quality items</span>
						</div>
						<h2 class="section-title">Featured Books</h2>
					</div>

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
    <?php
include("footer.php");
?>