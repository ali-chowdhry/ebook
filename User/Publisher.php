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
										<img src="" alt="post" class="post-image">
									</a>
								</figure>

								<div class="post-item">
									<div class="meta-date">Mar 30, 2021</div>
									<h3><a href="#">Reading books always makes the moments happy</a></h3>


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