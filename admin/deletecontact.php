<?php
include("../connection.php");

$i = $_GET["delete"];

$q = "DELETE FROM `contact` WHERE ID = $i";

if(mysqli_query($conn, $q)){
    echo "
    <script>
    alert('Contact deleted successfully');
    window.location.href='showcontact.php'
    </script>
    ";
} else {
    echo "
    <script>
    alert('Contact is not deleted');
    window.location.href='showcontact.php'
    </script>
    ";
}
?>
