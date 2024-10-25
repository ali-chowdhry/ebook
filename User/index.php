<?php
include("header.php");
?>

<style>
	.row {
    display: flex;
    align-items: center; /* Aligns items vertically */
}

.products-thumb {
    max-width: 100%; /* Ensures the image does not overflow */
}

.single-image {
    width: 100%; /* Makes the image responsive */
    height: auto; /* Maintains aspect ratio */
}

</style>

<style>
	.slider{
    width: 1300px;
    max-width: 100vw;
    height: 700px;
    margin: auto;
    position: relative;
    overflow: hidden;
}
.slider .list{
    position: absolute;
    width: max-content;
    height: 100%;
    left: 0;
    top: 0;
    display: flex;
    transition: 1s;
}
.slider .list img{
    width: 1300px;
    max-width: 100vw;
    height: 100%;
    object-fit: cover;
}
.slider .buttons{
    position: absolute;
    top: 45%;
    left: 5%;
    width: 90%;
    display: flex;
    justify-content: space-between;
}
.slider .buttons button{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #fff5;
    color: #fff;
    border: none;
    font-family: monospace;
    font-weight: bold;
}
.slider .dots{
    position: absolute;
    bottom: 10px;
    left: 0;
    color: #fff;
    width: 100%;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
}
.slider .dots li{
    list-style: none;
    width: 10px;
    height: 10px;
    background-color: #fff;
    margin: 10px;
    border-radius: 20px;
    transition: 0.5s;
}
.slider .dots li.active{
    width: 30px;
}
@media screen and (max-width: 768px){
    .slider{
        height: 400px;
    }
}
</style>
<div class="slider">
        <div class="list">
            <div class="item">
                <img src="../Book Images\cover pic1.jfif" alt="">
            </div>
            <div class="item">
                <img src="../Book Images\cover pic2.png" alt="">
            </div>
            <div class="item">
                <img src="../Book Images\cover pic3.jpg" alt="">
            </div>
            <div class="item">
                <img src="../Book Images\cover pic4.jpg" alt="">
            </div>
            <div class="item">
                <img src="../Book Images\cover pic5.jpg" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

	<script>
		let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 3000);
function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 3000);

    
}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};
	</script>
    <br><br>

<style>
    .publisher-container {
    display: flex;
    flex-wrap: wrap; /* Allows items to wrap onto a new row if needed */
    gap: 20px; /* Space between publisher items */
    justify-content: center; /* Center-aligns all items in the container */
  }
  
  .team {
    text-align: center;
    width: 200px; /* Adjust width as needed */
  }
  
  .pic img {
    width: 100px; /* Image size */
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 10px;
  }
  
  .team h3, .team .position {
    margin: 0;
    padding: 5px 0;

  }

</style>

<h1 style="text-align: center; color: green;">Publisher</h1>
<div class="publisher-container">
  <?php
  $query = "SELECT * FROM publisher ORDER BY id DESC";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_array($result)) { ?>
    <div class="swiper-slide team">
      <div class="pic">
        <img src="../Publisher Images/pic1.jpg" alt="Image" class="img-fluid">
      </div>
      <h3>
        <a href="#"><span><?php echo $row[1]; ?></span></a>
      </h3>
      <a href="tel:<?php echo $row[2]; ?>" class="d-block position"><?php echo $row[2]; ?></a>
    </div>
  <?php } ?>
</div>



	<section id="best-selling" class="leaf-pattern-overlay">
    <div class="corner-pattern-overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row d-flex align-items-center"> <!-- Added flex properties -->
                    <div class="col-md-6">
                        <figure class="products-thumb">
                            <img src="../Book Images/great-expectations.png" alt="book" class="single-image">
                        </figure>
                    </div>

                    <div class="col-md-6">
                        <div class="product-entry">
                            <h2 class="section-title divider">Best Selling Book</h2>
                            <div class="products-content">
                                <div class="author-name">By Daud Kamal</div>
                                <h3 class="item-title">great-expectations</h3>
                                <p>"Great Expectations" is a novel by Charles Dickens, first published in 1860-1861. The story follows the life of an orphan named Pip, who dreams of becoming a gentleman and improving his social status. Set in early 19th-century England, the novel explores themes of ambition, social class, and personal growth.</p>
                                <div class="item-price">Rs: 500</div>
                                <div class="btn-wrap">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / row -->
            </div>
        </div>
    </div>
</section>

<section id="featured-books" class="py-5 my-5">
<h1 style="text-align: center; color: green;">Available Books</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
		<div class="container">
			<div class="row">
				
				<div class="col-md-12">

                <div class="product-list" data-aos="fade-up">
                    <div class="row">
                        <?php 
                        // Prepare the query based on search input
                        $search = isset($_GET['Search']) ? mysqli_real_escape_string($conn, $_GET['Search']) : '';
                        $fetch_query = "SELECT * FROM `book`" . ($search ? " WHERE Name LIKE '%$search%'" : "");
                        $result = mysqli_query($conn, $fetch_query);
                    ?>
                <div class="product-list" data-aos="fade-up">
                    <div class="row">
                        <?php 
                        // Prepare the query based on search input
                        $search = isset($_GET['Search']) ? mysqli_real_escape_string($conn, $_GET['Search']) : '';
                        $fetch_query = "SELECT * FROM `book`" . ($search ? " WHERE Name LIKE '%$search%'" : "");
                        $result = mysqli_query($conn, $fetch_query);

                        if ($result) {
                            while ($row = mysqli_fetch_array($result)) { ?>
                                <div class="mt-4 col-md-4">
                                <div class="card" style="width: 18rem;">
  <img src="<?php echo $row[4]; ?>" class="card-img-top" alt="..." height="250px">
  <div class="card-body">
    <h5 class="card-title"><?php echo $row[1]; ?></h5>
    <p class="card-text"> Rs. <?php echo $row[5]; ?></p>
    <a href="bookdescription.php?b=<?php echo $row[0]; ?>" class="btn btn-primary">Add to cart </a>
  </div>
</div>
                                </div>
                            <?php } 
                        }
                        

                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="btn-wrap align-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- 
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

							<?php } ?> -->



			<!-- <div class="row">
				<div class="col-md-12">

					<div class="btn-wrap align-right">
						<a href="#" class="btn-accent-arrow">View all products <i
								class="icon icon-ns-arrow-right"></i></a>
					</div>

				</div>
			</div> -->
		</div>
	</section>




	<section id="subscribe">
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">
					<div class="row">

						<div class="col-md-6">

							<div class="title-element">
								<h2 class="section-title divider">Subscribe to our newsletter</h2>
							</div>

						</div>
						<div class="col-md-6">

							<div class="subscribe-content" data-aos="fade-up">
								<p>Sed eu feugiat amet, libero ipsum enim pharetra hac dolor sit amet, consectetur. Elit
									adipiscing enim pharetra hac.</p>
								<form id="form">
									<input type="text" name="email" placeholder="Enter your email addresss here">
									<button class="btn-subscribe">
										<span>send</span>
										<i class="icon icon-send"></i>
									</button>
								</form>
							</div>

						</div>

					</div>
				</div>

			</div>
		</div>
	</section>

	
    <style>
/* Carousel styling */
.slider {
    border-radius: 15px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.2);
    position: relative;
    overflow: hidden;
    animation: fadeIn 2s ease-in-out;
}

.slider .list img {
    transition: transform 0.5s ease;
}

.slider .list img:hover {
    transform: scale(1.05); /* Image zoom on hover */
}

.slider .buttons button {
    background-color: rgba(0, 0, 0, 0.6);
    color: white;
    border: 2px solid white;
    transition: background-color 0.3s, transform 0.3s;
}

.slider .buttons button:hover {
    background-color: rgba(0, 0, 0, 0.8);
    transform: scale(1.1);
}

.slider .dots li {
    background-color: rgba(255, 255, 255, 0.7);
}

.slider .dots li.active {
    background-color: rgba(255, 255, 255, 1);
}

/* Fade-in animation for the slider */
@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

/* Publisher card styling */
.publisher-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
    padding: 20px 0;
}

.team {
    width: 200px;
    padding: 20px;
    text-align: center;
    background: #f5f5f5;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.team:hover {
    transform: translateY(-10px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.pic img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    object-fit: cover;
}

.team h3, .team .position {
    font-family: 'Arial', sans-serif;
    font-size: 1rem;
    color: #333;
}

/* Subscribe section styling */
#subscribe {
    background-color: #222;
    color: #fff;
    padding: 40px 0;
    text-align: center;
    animation: slideUp 1.5s ease-out;
}

#subscribe .section-title {
    color: #FFD700;
}

#subscribe .subscribe-content p {
    font-size: 1.1rem;
    color: #d3d3d3;
}

#subscribe form input[type="text"] {
    padding: 10px 15px;
    width: 70%;
    border: 2px solid #FFD700;
    border-radius: 5px 0 0 5px;
    outline: none;
}

#subscribe form button {
    padding: 10px 15px;
    background-color: #FFD700;
    border: none;
    border-radius: 0 5px 5px 0;
    color: #222;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s;
}

#subscribe form button:hover {
    background-color: #FFA500;
}

/* Slide-up animation for subscribe section */
@keyframes slideUp {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

</style>

<style>
/* Available Books Section */
#featured-books {
    background-color: #f9f9f9; /* Soft background */
    padding: 40px 20px; /* Spacing around the section */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Shadow for depth */
}

.product-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Space between books */
    justify-content: center; /* Center-align books */
}

.card {
    background-color: #fff; /* Card background */
    border: none; /* No border */
    border-radius: 10px; /* Rounded corners */
    overflow: hidden; /* Prevent overflow */
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animation effects */
    width: 100%; /* Full width */
    max-width: 300px; /* Max width for cards */
    text-align: center; /* Center text in cards */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Light shadow */
}

.card:hover {
    transform: scale(1.05); /* Slightly enlarge on hover */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Deeper shadow on hover */
}

.card img {
    height: 250px; /* Fixed height for images */
    width: 100%; /* Full width */
    object-fit: cover; /* Ensure images cover the card */
    transition: transform 0.3s ease; /* Image transition */
}

.card:hover img {
    transform: scale(1.1); /* Scale image on hover */
}

.card-body {
    padding: 15px; /* Padding inside card body */
}

.card-title {
    font-size: 1.25rem; /* Title size */
    font-weight: bold; /* Bold title */
    margin: 10px 0; /* Margin around title */
    color: #333; /* Title color */
}

.card-text {
    font-size: 1rem; /* Price size */
    margin: 10px 0; /* Margin around price */
    color: #666; /* Price color */
}

/* Button Styles */
.btn-primary {
    background-color: #28a745; /* Green button */
    color: #fff; /* White text */
    border: none; /* No border */
    border-radius: 5px; /* Rounded corners */
    padding: 10px 15px; /* Padding for buttons */
    transition: background-color 0.3s; /* Transition effect */
    margin-top: 10px; /* Space above button */
}

.btn-primary:hover {
    background-color: #218838; /* Darker green on hover */
}

/* Responsive Styles */
@media (max-width: 768px) {
    .card {
        max-width: 90%; /* Wider on smaller screens */
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const books = document.querySelectorAll('.card');
    books.forEach((book, index) => {
        book.style.opacity = 0; // Set initial opacity to 0
        setTimeout(() => {
            book.style.transition = "opacity 0.5s ease";
            book.style.opacity = 1; // Fade in effect
        }, index * 200); // Staggered fade in for each card
    });
});
</script>



	<?php 
	include("footer.php");
	?>
</body>

</html>