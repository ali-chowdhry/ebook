<?php
include("header.php");
?>
 

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section">

      <div class="container">
        <div class="row justify-content-center" data-aos="fade-up">
  
          <div class="col-md-12 col-lg-6 ps-lg-5">
            <div class="row">
            <?php
                $query = "SELECT * FROM `about_us`";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($result)) { ?>
 
             
              <div class="col-6 col-sm-6 col-md-6 col-lg-6">
                <div class="services-item" data-aos="fade-up" data-aos-delay="">
                  <div class="services-icon">
                    <i class="bi bi-search"></i>
                  </div>
                  <div>
                    <h3><?php echo $row[1]; ?></h3>
                    <p><?php echo $row[2]; ?></p>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Services 2 Section -->


<?php
include("footer.php");
?>