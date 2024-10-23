<?php
include("header.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

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
        $query="SELECT * FROM Publisher order by id desc";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result))
        { ?>
          
              <div class="swiper-slide">
                <div class="team">
                  <div class="pic">
                    <img src="../Publisher Images\pic1.jpg" alt="Image" class="img-fluid">
                  </div>
                  <h2 class="meta-date"><i class="fas fa-user"></i> <?php echo $row["name"];?></h2>
				  <h4><a href="tel:<?php echo $data["number"];?>"><i class="fas fa-phone"></i> <?php echo $row["number"];?></a></h4>
                  <span class="d-block position"><a href="#"><i class="fas fa-map-marker-alt"></i> <?php echo $row["Address"];?></a></span>
                
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

<?php
include("footer.php")
?>