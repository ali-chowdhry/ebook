<?php
include("header.php")
?>

<header>
    <h1>Book Product Page</h1>
</header>

<div class="container">
    <div class="product">
        <!-- Product Image -->
        <div class="product-image">
            <img src="images/main-banner1.jpg" alt="eBook Cover">
        </div>

        <!-- Product Details -->
        <div class="product-details">
            <h1>The Great Adventure</h1>
            <p class="price">$9.99</p>
            <p class="description">
                This is a thrilling eBook that takes you on a journey into the unknown. Filled with excitement and mystery, "The Great Adventure" is a perfect read for those looking to escape into a world of wonder.
            </p>
            <ul class="product-specs">
                <li><strong>Author:</strong> John Doe</li>
                <li><strong>Genre:</strong> Fiction, Adventure</li>
                <li><strong>Format:</strong> ePub, PDF, Kindle</li>
                <li><strong>Release Date:</strong> January 2024</li>
                <li><strong>Pages:</strong> 300</li>
            </ul>

            <!-- Add to Cart Button -->
            <button type="button" class="add-to-cart" data-product-tile="add-to-cart">Add to Cart</button>
        </div>
    </div>

    <!-- Reviews Section -->
    <div class="reviews">
        <h2>Customer Reviews</h2>
        <div class="review">
            <h3>Excellent Read! <span>★★★★★</span></h3>
            <p>
                I absolutely loved this book! The story kept me hooked from start to finish. A perfect blend of adventure and suspense.
            </p>
        </div>
        <div class="review">
            <h3>Engaging and Exciting <span>★★★★☆</span></h3>
            <p>
                This book was a great escape into an exciting world. The characters were well developed and the plot kept me on edge.
            </p>
        </div>
    </div>

    <!-- Related Products Section -->
    <div class="related-products">
        <h2>Related Books</h2>
        <div class="related-grid">
            <!-- Related Product 1 -->
            <div class="related-item">
                <img src="images/product-item1.jpg" alt="Related eBook 1">
                <h3>Another Great Adventure</h3>
                <p>A must-read for adventure lovers.</p>
                <p class="price">$8.99</p>
                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">View Product</button>
            </div>

            <!-- Related Product 2 -->
            <div class="related-item">
                <img src="images/product-item2.jpg" alt="Related eBook 2">
                <h3>Mystery in the Wild</h3>
                <p>An intriguing story that will captivate you.</p>
                <p class="price">$7.99</p>
                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">View Product</button>
            </div>

            <!-- Related Product 3 -->
            <div class="related-item">
                <img src="images/product-item3.jpg" alt="Related eBook 3">
                <h3>The Hidden Path</h3>
                <p>A journey of discovery and adventure.</p>
                <p class="price">$10.99</p>
                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">View Product</button>
            </div>

                    <!-- Related Product 4 -->
                    <div class="related-item">
                <img src="images/product-item4.jpg" alt="Related eBook 2">
                <h3>Once upon a time</h3>
                <p>An intriguing story that will captivate you.</p>
                <p class="price">$ 35.00</p>
                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">View Product</button>
            </div>

                    <!-- Related Product 5 -->
                    <div class="related-item">
                <img src="images/product-item5.jpg" alt="Related eBook 2">
                <h3>Simple way of piece life</h3>
                <p>An intriguing story that will captivate you.</p>
                <p class="price">$ 40.00</p>
                <button type="button" class="add-to-cart" data-product-tile="add-to-cart">View Product</button>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php")
?>
