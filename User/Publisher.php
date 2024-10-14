<?php
include("header.php");
?>

<section id="latest-blog" class="py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Publisher</span>
						</div>
						<h2 class="section-title">Latest Publisher</h2>
					</div>

					<div class="row">

					<?php 
						$fetch_query = mysqli_query($conn, "SELECT * FROM `publisher`");
						while ($data = mysqli_fetch_array($fetch_query))
						{ ?>

		<div class="col-md-4">

							<Publisher class="column" data-aos="fade-up">

								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="Name: <?php echo $data['image'];?>" alt="post" class="post-image">
									</a>
								</figure>

								<div class="post-item">
									<h2 class="meta-date">Name: <?php echo $data["name"];?></h2>
									<h4><a href="#">Number:<?php echo $data["number"];?></a></h4>
									<h4><a href="#">Address: <?php echo $data["address"];?></a></h4>



								</div>
							</Publisher>

					
					
							</div>
				

					<?php } ?>

				

				</div>
			</div>
		</div>
	</section>

<?php
include("footer.php")
?>