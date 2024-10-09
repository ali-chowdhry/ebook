<?php
include("header.php");
$q = ""
?>

<style>
        
        
        header {
            text-align: center;
        }
        .container {
            padding: 40px;
 
        }
 
      
        input, textarea {
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
    <h1>We'd love to hear from you</h1>
    <p>If you have any questions, suggestions, or issues, feel free to reach out to us by filling out the form below or using our contact details. We'll get back to you as soon as possible.</p>

    <form action="your-backend-url" method="POST">
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

        <button type="submit" class="btn">Send Message</button>
    </form>

    <!-- Contact Info -->
    <div class="contact-info">
        <h2>Our Contact Information</h2>
        <p><strong>Email:</strong><a href="mailto:alichowdhryaptech@gmail.com">alichowdhryaptech@gmail.com</a></p>

        <p><strong>Phone:</strong><a href="tel:+92 03312345814">+92 03312345814</a></p>

        <p><strong>Address:</strong><i class="fas fa-map-marker-alt"></i>123 eBook St, Knowledge City, Bookland, BL 45678</p>

        <!-- Google Maps Iframe (Replace src with your location) -->
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509487!2d144.95592831542215!3d-37.81720997975157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577c4da37f1a7b9!2sKnowledge%20City!5e0!3m2!1sen!2s!4v1644447842731!5m2!1sen!2s"
            allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<?php
include("footer.php");
?>