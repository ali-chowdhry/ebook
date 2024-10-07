<?php
include("../connection.php");

$i = $_GET["delete"];

$q = "DELETE FROM `category` WHERE CatID = $i";

if(mysqli_query($conn, $q)){
    echo "
    <script>
    alert('Category deleted successfully');
    window.location.href='showcategory.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('Category is not deleted');
    window.location.href='showcategory.php'
    </script>
    ";
}
?>
