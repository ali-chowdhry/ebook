<?php
include("header.php");

?>

<style>
    header {
        text-align: center;
    }

    .container {
        padding: 40px;

    }


    input,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1em;
    }

    .btn {
        padding: 12px 30px;
        background-color: black;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 1.1em;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #d35400;
    }

    iframe {
        width: 100%;
        height: 300px;
        border: none;
        margin-top: 20px;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
</style>


<header>
    <h1>Contact Us</h1>
</header>

<div class="container">
    <h1>We'd love to hear from youkj</h1>
    <p>If you have any questions, suggestions, or issues, feel free to reach out to us by filling out the form below or using our contact details. We'll get back to you as soon as possible.</p>

    <form action="" method="POST">
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="email">Your Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="message">Your Message</label>
            <textarea id="message" name="message" required></textarea>
        </div>

        <button type="submit" class="btn" name="btn">Send Message</button>
    </form>

    <?php
if (isset($_POST["btn"])) {
    $Name = $_POST["name"];
    $Email = $_POST["email"];
    $Message = $_POST["message"];

    $sql = "INSERT INTO `contact` (`Name`, `Email`, `Message`)
     VALUES ('$Name', '$Email', '$Message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
        alert('message sent successfully!');
        </script>";
    } else {
        echo "<script>
        alert('message cannot be send!');
        </script>";
    }
}
?>
	<?php
        $query="SELECT * FROM website_info order by id desc limit 1";
        $result=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($result))
        { ?>
    <!-- Contact Info -->
    <div class="contact-info">
        <h2>Our Contact Information</h2>
        <p><a href="mailto:<?php echo $row[1]; ?>"><?php echo $row[2]; ?></a></p>

        <p><a href="tel:<?php echo $row[1]; ?>"><?php echo $row[5]; ?></a></p>

        <p><i class="fas fa-map-marker-alt"></i><?php echo $row[4]; ?>8</p>

 
    </div>
</div>
<?php } ?>

<?php
include("footer.php");
?>