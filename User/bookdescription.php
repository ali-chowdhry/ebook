<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 20px;
        }
        .product-item {
            max-width: 100%;
            height: 500px;
            border-radius: 5px;
            margin-left: 50px;
            height: auto;
            border-radius: 5px;
        }
        .item-price {
            font-size: 1.5em;
            font-weight: bold;
            color: #007BFF;
        }
        .book-title {
            font-size: 1.8em;
            margin-bottom: 0.5em;
        }
        .book-author {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
    <?php 
    include "header.php";

    // Start session if not already started
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

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
                        <div class="col-md-6">
                            <img src="<?php echo htmlspecialchars($a['Bookimage']); ?>" alt="Book Cover" class="product-item"> 
                        </div>
                        <div class="col-md-6">
                            <h3 class="book-title"><?php echo htmlspecialchars($a['Name']); ?></h3>
                            <span class="book-author"><h5>Author:</h5> <?php 
                            $author= mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `author_info` where id = $a[2]"));
                            echo $author[1];0?></span>

                
                            <br>    
                            <span class="book-publisher"><h5>Publisher:</h5> <?php 
                            $author= mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM `publisher` where id = $a[8]"));
                            echo $author[1];?></span>
                            <br>
                            <span class="book-description">
                                <h5>Book Description:</h5>
                            <?php echo htmlspecialchars($a['Description']); ?>
                            </span>
                            <br>
                            <span class="book-availability">
                                <h5>Availability:</h5>
                            <?php echo htmlspecialchars($a['Availability']); ?>
                            </span>
                            

                            <div class="item-price">Rs.<?php echo number_format($a['Bookprice'], 2); ?></div>
                            <form action="addtocart.php" method="POST" class="mt-4"> 
                                <input type="hidden" name="pro_id" value="<?php echo htmlspecialchars($a['BookID']); ?>">
                                <input type="number" name="qty" class="form-control" value="1" min="1" max="5" required>
                                <button type="submit" name="btn" class="mt-3 btn btn-primary btn-lg">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
                <br><br>
                <?php
            } else {
                echo "<div class='container'><p class='alert alert-warning'>Book not found.</p></div>";
            }
        } else {
            echo "<div class='container'><p class='alert alert-danger'>Error in query: " . mysqli_error($conn) . "</p></div>";
        }
    } else {
        echo "<div class='container'><p class='alert alert-danger'>No BookID provided.</p></div>";
    }
    
    include "footer.php"; 
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
