<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link rel="stylesheet" type="text/css" href="contact.css" />
    <title>Contact me! | Kayleigh Monaghan</title>
</head>
<body>
    <h1>Kayleigh Monaghan</h1>
    <h2>Contact me!</h2>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="contact.html">Contact me!</a></li>
        </ul>
    <div class="form-container">
        <form method="post" action="mail.php">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required>
        
            <label for="email"><b>Email</b></label>
            <input type="text" id="email" name="email" placeholder="Enter Email" required>

            <label for="subject"><b>Subject</b></label>
            <input type="text" id="subject" name="subject" placeholder="Enter Subject" required>
        
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." rows="5" cols="40" required></textarea>

            <br />

            <input type="submit" name="Submit">
        </form>
    </div>
</body>
</html>