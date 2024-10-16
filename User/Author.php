<?php
include("header.php");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<section id="latest-blog" class="py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Author</span>
						</div>
						<h2 class="section-title">Latest Author</h2>
					</div>

					<div class="row">

					<?php 
						$fetch_query = mysqli_query($conn, "SELECT * FROM `author_info`");
						while ($data = mysqli_fetch_array($fetch_query))
						{ ?>

		<div class="col-md-4">

							<Publisher class="column" data-aos="fade-up">

								<figure>
									<a href="#" class="image-hvr-effect">
										<img src="../Author Images\image (1).png" alt="post" class="post-image">
									</a>
								</figure>

								<div class="post-item">
									<h2 class="meta-date"><i class="fas fa-user"></i> <?php echo $data["Name"];?></h2>
									<h4><a href="mailto:<?php echo $data["Email"];?>">  <i class="fas fa-envelope icon"></i> <?php echo $data["Email"];?></a></h4>



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