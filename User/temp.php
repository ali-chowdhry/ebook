<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    include "header.php";

    // Initialize cart session variables if they don't exist
    if (!isset($_SESSION["mycart"])) {
        $_SESSION["mycart"] = array();
        $_SESSION["qty"] = array();
    }

    // Check if the BookID is set
    if (isset($_GET["b"])) {
        $id = intval($_GET["b"]); // Sanitize input to prevent SQL injection

        // Fetch the book from the database
        $fetch_query = "SELECT * FROM `book` WHERE BookID = $id";
        $run = mysqli_query($conn, $fetch_query);

        if ($run) {
            $a = mysqli_fetch_array($run);
            if ($a) {
                // Display book information
                ?>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="<?php echo htmlspecialchars($a['Bookimage']); ?>" alt="Books" class="product-item"> 
                        </div>
                        <div class="col-md-3">
                            <figcaption>
                                <h3 class="book-title"><?php echo htmlspecialchars($a['Name']); ?></h3>
                                <span class="book-author"><?php echo htmlspecialchars($a['AuthorID']); ?></span>
                                <div class="item-price"><?php echo htmlspecialchars($a['Bookprice']); ?></div>
                            </figcaption>
                            <form action="addtocart.php" method="POST"> <!-- Changed to POST for better practice -->
                                <input type="hidden" name="pro_id" value="<?php echo htmlspecialchars($a['BookID']); ?>">
                                <input type="number" name="qty" class="form-control" value="1" min="1" max="5">
                                <button type="submit" name="btn" class="mt-4 btn btn-primary">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            } else {
                echo "Book not found.";
            }
        } else {
            echo "Error in query: " . mysqli_error($conn);
        }
    } else {
        echo "No BookID provided.";
    }
    
    include "footer.php"; 
    ?>
</body>
</html>
