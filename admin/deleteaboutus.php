<?php
include("../connection.php");

$i = $_GET["delete"];

$q = "DELETE FROM `about_us` WHERE AboutID = $i";

if(mysqli_query($conn, $q)){
    echo "
    <script>
    alert('About us deleted successfully');
    window.location.href='showaboutus.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('About us is not deleted');
    window.location.href='showaboutus.php'
    </script>
    ";
}
?>
