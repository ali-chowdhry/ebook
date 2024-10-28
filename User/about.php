``<?php
include("header.php");
?>
<<<<<<< HEAD
 <div class="page-title light-background">

 <div class="page-title light-background" >

      <div class="container">
        <h1>About</h1>
      
      </div>
    </div><!-- End Page Title -->
=======
>>>>>>> 2dc21c1374a52d8671c75023dc177306b04d2f0e

<!-- Services 2 Section -->
<section id="services-2" class="services-2 section">

<<<<<<< HEAD
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
=======
  <div class="container">
    <div class="row justify-content-center" data-aos="fade-up">

      <div class="col-md-12 col-lg-6 ps-lg-5">
        <div class="row">
          <?php
          $query = "SELECT * FROM `about_us`";
          $result = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($result)) { ?>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6">
              <div class="services-item" data-aos="fade-up">
                <div class="services-icon">
                  <i class="bi bi-search"></i>
                </div>
                <div>
                  <h3><?php echo $row[1]; ?></h3>
                  <p><?php echo $row[2]; ?></p>
>>>>>>> 2dc21c1374a52d8671c75023dc177306b04d2f0e
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Services 2 Section -->

<style>
/* Services Section Styles */
#services-2 {
    background-color: #f8f9fa; /* Light background for contrast */
    padding: 40px 0; /* Top and bottom padding */
    border-radius: 8px; /* Rounded corners */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
}

.services-item {
    background-color: #ffffff; /* Card background */
    border-radius: 8px; /* Rounded corners */
    padding: 20px; /* Padding inside the card */
    margin: 10px; /* Margin around each card */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animation on hover */
    text-align: center; /* Center-align text */
    position: relative; /* Position relative for absolute positioning of icons */
    display: flex; /* Flexbox to align content */
    flex-direction: column; /* Stack items vertically */
    justify-content: flex-start; /* Start aligning items */
    height: auto; /* Allow height to adjust dynamically */
}

.services-item:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
}

.services-icon {
    font-size: 2rem; /* Icon size */
    color: #28a745; /* Icon color */
    margin-bottom: 15px; /* Space below icon */
}

h3 {
    font-size: 1.5rem; /* Title size */
    color: #333; /* Title color */
    margin: 10px 0; /* Margin around title */
}

p {
    color: #666; /* Description text color */
    font-size: 1rem; /* Font size for descriptions */
    margin-top: auto; /* Push the paragraph to take available space */
    line-height: 1.5; /* Improve readability */
    overflow-wrap: break-word; /* Ensure long words break to avoid overflow */
}

/* Responsive Styles */
@media (max-width: 768px) {
    .services-item {
        margin: 10px 0; /* Adjust margins for smaller screens */
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const servicesItems = document.querySelectorAll('.services-item');
    servicesItems.forEach((item, index) => {
        item.style.opacity = 0; // Set initial opacity to 0
        setTimeout(() => {
            item.style.transition = "opacity 0.5s ease";
            item.style.opacity = 1; // Fade in effect
        }, index * 200); // Staggered fade in for each card
    });
});
</script>

<?php
include("footer.php");
?>
