<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <p>We're here to help! Feel free to reach out with any questions or concerns.</p>
    </header>

    <div class="contact-box">
        <section class="form-section">
            <h2>Send Us a Message</h2>
            <form action="contact-us.php" method="post">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Send Message</button>
            </form>
            <?php
                if (isset($_GET['status'])) {
                    $statusClass = $_GET['status'] == 'success' ? 'success' : 'error';
                    $statusMessage = $_GET['status'] == 'success'
                        ? "Your message has been sent successfully!"
                        : "There was an error sending your message. Please try again.";
                    echo "<p class='message $statusClass'>$statusMessage</p>";
                }
            ?>
        </section>

        <section class="faq">
            <h2>Frequently Asked Questions</h2>
            <p><strong>Q: How long does it take to get a response?</strong></p>
            <p>A: We usually respond within 24-48 hours.</p>

            <p><strong>Q: Can I track my message?</strong></p>
            <p>A: No, we don't offer message tracking. But you can follow up if you don’t hear back within the expected time.</p>

            <p><strong>Q: What if I don't get a confirmation email?</strong></p>
            <p>A: Check your spam or junk folder. If it's not there, contact us directly at Group6@maangas.com.</p>
        </section>
    </div>

    <footer>
        <p>&copy; 2024 Group6. All rights reserved.</p>
        <p><a href="privacy-policy.html" class="footer-link">Privacy Policy</a> | <a href="terms-of-service.html" class="footer-link">Terms of Service</a></p>
    </footer>
</body>
</html>
