<?php
include("header.php");
?>

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
                    <img src="../Publisher Images\pic1.jpg" alt="Image" class="img-fluid">
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


<?php
include("footer.php")
?>