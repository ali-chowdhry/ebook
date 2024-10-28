<?php
session_start();
if(!isset($_SESSION["username"])){
        header("location: ../login/index.php");
}

else{
if (isset($_POST["btn"])) {
    $id = $_POST["pro_id"];
    $quantity = intval($_POST["qty"]);

    if ($quantity <= 0) {
        $_SESSION["msg"] = "Please enter a valid quantity.";
        header("location: Featured.php");
        exit();
    }

    if (in_array($id, $_SESSION["mycart"])) {
        $_SESSION["book_already_added"] = "Book already added";
    } else {
        array_push($_SESSION["mycart"], $id);
        array_push($_SESSION["qty"], $quantity);
        $_SESSION["msg"] = "Book added successfully";
    }

    header("location: Featured.php");
    exit();
} else {
    header("location: Featured.php");
    exit();
}
}