<?php
include("header.php");
?>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9; /* Light gray background for contrast */
        margin: 0; /* Remove default body margin */
        padding: 20px; /* Add padding around the body */
    }

    header {
        text-align: center;
        margin-bottom: 40px;
    }

    .container {
        padding: 40px;
        max-width: 800px; /* Limit the container width */
        margin: auto; /* Center the container */
        background-color: #ffffff; /* White background for the form */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
        animation: fadeIn 0.5s ease; /* Fade-in animation */
    }

    h1 {
        color: #333; /* Darker color for the heading */
        font-size: 2.5em; /* Larger font size */
        margin-bottom: 20px;
    }

    p {
        color: #555; /* Slightly lighter text color */
        line-height: 1.6; /* Better readability */
    }

    label {
        font-weight: bold; /* Bold labels for better visibility */
        margin-bottom: 5px; /* Space below labels */
        display: block; /* Ensure labels are on their own line */
    }

    input,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1em;
        margin-bottom: 20px; /* Space between inputs */
        transition: border-color 0.3s ease; /* Smooth border color transition */
    }

    input:focus,
    textarea:focus {
        border-color: #d35400; /* Change border color on focus */
        outline: none; /* Remove outline */
    }

    .btn {
        padding: 12px 30px;
        background-color: black;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 1.1em;
        border-radius: 5px;
        transition: background-color 0.3s ease, transform 0.3s ease; /* Add transform transition */
    }

    .btn:hover {
        background-color: #d35400;
        transform: scale(1.05); /* Slightly increase size on hover */
    }

    .contact-info {
        margin-top: 30px;
        padding: 20px;
        background-color: #ffffff; /* White background for contact info */
        border-radius: 10px; /* Rounded corners */
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Shadow for depth */
        animation: fadeIn 0.5s ease; /* Fade-in animation */
    }

    .contact-info h2 {
        margin-bottom: 15px; /* Space below heading */
        color: #333; /* Darker color for headings */
    }

    .contact-info p {
        margin: 5px 0; /* Margin for paragraphs */
    }

    .contact-info a {
        text-decoration: none; /* Remove underline from links */
        color: #007bff; /* Link color */
        transition: color 0.3s ease; /* Smooth color transition */
    }

    .contact-info a:hover {
        color: #0056b3; /* Darker link color on hover */
    }

    

    /* Fade-in animation */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-10px); /* Slide in from above */
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container {
            padding: 20px; /* Less padding on mobile */
        }

        h1 {
            font-size: 2em; /* Smaller heading on mobile */
        }
    }
</style>
<style>
    footer {
    width: 100%; /* Full width */
    background-color: #333; /* Background color */
    color: #fff; /* Text color */
    padding: 20px 0; /* Padding for spacing */
    text-align: center; /* Center text */
    position: relative; /* Stack content properly */
    bottom: 0; /* Align to the bottom of the page */
    left: 0; /* Align to the left */
    margin-top: 20px; /* Add space above the footer */
}

.container {
    max-width: 1200px; /* Maintain a max-width for content inside */
    margin: 0 auto; /* Center container */
}
</style>

<header>
    <h1>Contact Us</h1>
</header>

<div class="container">
    <h1>We'd love to hear from you!</h1>
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

        $sql = "INSERT INTO `contact`( `Name`, `Email`, `Message`)
         VALUES ('$Name','$Email','$Message')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('Message sent successfully!');</script>";
        } else {
            echo "<script>alert('Message could not be sent!');</script>";
        }
    }
    ?>

    <?php
    $query = "SELECT * FROM website_info ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_array($result)) {
    ?>
    <!-- Contact Info -->
    <div class="contact-info">
        <h2>Our Contact Information</h2>
        <p><a href="mailto:<?php echo $row[1]; ?>"><?php echo $row[2]; ?></a></p>
        <p><a href="tel:<?php echo $row[1]; ?>"><?php echo $row[5]; ?></a></p>
        <p><i class="fas fa-map-marker-alt"></i> <?php echo $row[4]; ?></p>
    </div>
    <?php } ?>
</div>

<?php
include("footer.php");
?>
