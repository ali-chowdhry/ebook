<?php
include("header.php");
?>
<<<<<<< HEAD
  <!-- Page Title -->
  <div class="page-title light-background">
      <div class="container">
        <h1>Team</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Team</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <div class="site-section slider-team-wrap">
        <div class="container">

          <div class="slider-nav d-flex justify-content-end mb-3">
            <a href="#" class="js-prev js-custom-prev"><i class="bi bi-arrow-left-short"></i></a>
            <a href="#" class="js-next js-custom-next"><i class="bi bi-arrow-right-short"></i></a>
          </div>

          <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "1",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".js-custom-next",
                  "prevEl": ".js-custom-prev"
                },
                "breakpoints": {
                  "640": {
                    "slidesPerView": 2,
                    "spaceBetween": 30
                  },
                  "768": {
                    "slidesPerView": 3,
                    "spaceBetween": 30
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 30
                  }
                }
              }
            </script> 
			 <div class="swiper-wrapper">
			<?php
        $query="SELECT * FROM publisher order by id desc";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result))
        { ?>
          
              <div class="swiper-slide">
                <div class="team">
                  <div class="pic">
                    <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid">
                  </div>
                  <h3 clas="">
                    <a href="#"><span class=""><?php echo $row[1]; ?></a>
                  </h3>
                  <a href="tel:<?php echo $row[2]; ?>" class="d-block position"><?php echo $row[2]; ?></a>
                 
                 
                </div>
              </div>
			
			
              <!-- <div class="swiper-slide"></div> -->
            <?php } ?>
			</div> 
          </div>
        </div>
        <!-- /.container -->
      </div>
    </section><!-- /Team Section -->

=======
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
										<img src="../Publisher Images\pic1.jpg" alt="post" class="post-image">
									</a>
								</figure>

								<div class="post-item">
									<h2 class="meta-date"><i class="fas fa-user"></i> <?php echo $data["name"];?></h2>
									<h4><a href="tel:<?php echo $data["number"];?>"><i class="fas fa-phone"></i> <?php echo $data["number"];?></a></h4>
									<h4><a href="#"><i class="fas fa-map-marker-alt"></i> <?php echo $data["address"];?></a></h4>



								</div>
							</Publisher>

					
					
							</div>
				

					<?php } ?>

				

				</div>
			</div>
		</div>
	</section>
>>>>>>> 26b5ac32f33838b11ebd7a2aabbd2609eda2ed2b

<?php
include("footer.php")
?>