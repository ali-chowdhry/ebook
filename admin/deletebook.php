<?php
include("../connection.php");

$i = $_GET["delete"];

$q = "DELETE FROM `book` WHERE BookID = $i";

if(mysqli_query($conn, $q)){
    echo "
    <script>
    alert('Book deleted successfully');
    window.location.href='showbook.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('Book is not deleted');
    window.location.href='showbook.php'
    </script>
    ";
}
?>
