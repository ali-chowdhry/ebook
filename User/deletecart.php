<?php
include("../connection.php");



if (isset($_SESSION['mycart'])) {
    // Get the product ID to remove
    $productIdToRemove = $_GET['delete']; // or use $_POST if it's a form submission

    // Check if the product exists in the cart
    foreach ($_SESSION['mycart'] as $key => $product) {
        if ($product['id'] == $productIdToRemove) {
            // Remove the product from the cart
            unset($_SESSION['mycart'][$key]);
            break; // Exit the loop once we've found and removed the product
        }
    }
}

// Redirect back to the cart page or display a success message
header("Location: cart.php");
exit();
?>
