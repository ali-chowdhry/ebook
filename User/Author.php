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
    $query = "SELECT * FROM author_info ORDER BY id DESC";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) { ?>
        <div class="swiper-slide">
            <div class="team">
                <div class="pic">
                    <img src="../Author Images/image (1).png" alt="Image" class="img-fluid">
                </div>
                <h3>
                    <a href="#"><span><i class="fas fa-user"></i> <?php echo $row["Name"]; ?></span></a>
                </h3>
                <h4>
                    <i class="fas fa-envelope icon"></i>
                    <a href="mailto:<?php echo $row["Email"]; ?>"><?php echo $row["Email"]; ?></a>
                </h4>
            </div>
        </div>
    <?php } ?>
</div>

</section><!-- /Team Section -->



<style>
/* General Styles */
body {
    background-color: #f4f7fa; /* Slightly darker light background for contrast */
    font-family: 'Arial', sans-serif;
}

/* Team Section Styles */
#team {
    padding: 60px 0; /* Padding around the section */
    background-color: #ffffff; /* White background for the team section */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Light shadow for depth */
}

.team {
    text-align: center; /* Center-align text within team members */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animation on hover */
    border-radius: 10px; /* Rounded corners for team cards */
    margin: 20px; /* Margin around team cards */
    padding: 20px; /* Padding inside team cards */
    background-color: #f8f9fa; /* Light grey background for team cards */
    border: 1px solid #e0e0e0; /* Light border */
}

.team:hover {
    transform: translateY(-5px); /* Lift effect on hover */
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2); /* Darker shadow on hover */
}

.pic {
    margin-bottom: 15px; /* Space below the image */
    overflow: hidden; /* Hide overflow */
}

.pic img {
    width: 100%; /* Full width of the container */
    height: auto; /* Maintain aspect ratio */
    transition: transform 0.3s ease; /* Smooth image zoom on hover */
}

.pic:hover img {
    transform: scale(1.1); /* Zoom in effect on hover */
}

h3, h4 {
    color: #343a40; /* Dark color for text */
}

h3 a, h4 a {
    text-decoration: none; /* Remove underline from links */
    color: inherit; /* Inherit color from parent */
    transition: color 0.3s ease; /* Smooth color change */
}

h3 a:hover, h4 a:hover {
    color: #007bff; /* Change color on hover */
}

/* Slider Navigation Styles */
.slider-nav a {
    color: #007bff; /* Color for navigation arrows */
    font-size: 24px; /* Size for arrows */
    margin: 0 10px; /* Space around arrows */
    transition: color 0.3s ease; /* Smooth color change */
}

.slider-nav a:hover {
    color: #0056b3; /* Darker blue on hover */
}

/* Swiper Styles */
.swiper-wrapper {
    margin: 0; /* Remove margin */
}

.swiper-slide {
    display: flex; /* Flexbox for centering content */
    justify-content: center; /* Center slide content */
    align-items: center; /* Center slide content vertically */
}

/* Responsive Styles */
@media (max-width: 768px) {
    .team {
        margin-bottom: 30px; /* Space between team members on smaller screens */
    }
}
</style>
<style>
/* Team Section Styles */
.team {
    text-align: center; /* Center-align text */
    margin: 20px 0; /* Margin around team items */
}

.team .pic {
    width: 200px; /* Fixed width for images */
    height: 250px; /* Fixed height for images */
    overflow: hidden; /* Hide overflow */
    margin: 0 auto; /* Center the image */
    position: relative; /* Relative position for child elements */
}

.team .pic img {
    width: 100%; /* Cover the container */
    height: 100%; /* Cover the container */
    object-fit: cover; /* Ensure aspect ratio is maintained */
    border-radius: 0; /* Remove circular border */
}

h3 {
    font-size: 1.5rem; /* Font size for names */
    margin: 10px 0; /* Margin around name */
}

h4 {
    display: flex; /* Flexbox for email alignment */
    align-items: center; /* Center vertically */
    justify-content: center; /* Center horizontally */
    color: #343a40; /* Dark color for text */
}

h4 a {
    text-decoration: none; /* Remove underline from links */
    color: inherit; /* Inherit color from parent */
    margin-left: 5px; /* Space between the icon and the text */
    transition: color 0.3s ease; /* Smooth color change */
}

h4 a:hover {
    color: #007bff; /* Change color on hover */
}

.icon {
    margin-right: 5px; /* Space between the icon and the email text */
}

.slider-nav a {
    color: #007bff; /* Color for navigation arrows */
    font-size: 24px; /* Font size for arrows */
}

.slider-nav a:hover {
    color: #0056b3; /* Darker color on hover */
}

/* Equal size for swiper-slide and spaces */
.swiper-slide {
    width: 220px; /* Fixed width for each slide */
    margin: 15px; /* Margin for gaps between boxes */
}

/* Responsive Design */
@media (max-width: 768px) {
    .team .pic {
        width: 100px; /* Smaller width on mobile */
        height: 130px; /* Smaller height on mobile */
    }

    h3 {
        font-size: 1.2rem; /* Smaller font size on mobile */
    }

    h4 {
        font-size: 0.9rem; /* Smaller font size on mobile */
    }

    .swiper-slide {
        width: 150px; /* Adjusted width for mobile screens */
        margin: 10px; /* Adjusted margin for mobile screens */
    }
}
</style>




<?php
include("footer.php");
?>
