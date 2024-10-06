<?php
if(isset($_POST["btn"])){
  $NAME=$_POST["Aname"];
  $EMAIL=$_POST["email"]; 
  $GENDER=$_POST["gender"]; 
  $AGE=$_POST["age"];
  $BOOK=$_POST["bname"];

$con=mysqli_connect("localhost","root","","Ebook");
$query= "INSERT INTO `author_info`( `Name`, `Email`, `Gender`, `Age`, `Book`)
 VALUES (' $NAME',' $EMAIL','$GENDER','$AGE','$BOOK',)";

 if(mysqli_query($con,$query)){
  echo "<script>
    alert('data saved successfullly');
    window.location.href='student.html';
    </script>";
 }else{
  echo "<script>
    alert('data not saved unsuccessfullly');
    window.location.href='student.html';
    </script>";
   }

 }
?>