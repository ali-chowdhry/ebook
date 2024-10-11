<?php
include("../connection.php");

$i = $_GET["delete"];

$q = "DELETE FROM `publisher` WHERE id = $i";

if(mysqli_query($conn, $q)){
    echo "
    <script>
    alert('publisher deleted successfully');
    window.location.href='showpublisher.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('publisher is not deleted');
    window.location.href='showpublisher.php'
    </script>
    ";
}
?>
