<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel = "stylesheet" href = "contactusStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>
    <main>
        <h2>Contact Us</h2>
        <form action="contactus_afterSubmit.php">
            <input class = "contactInput" type="text" placeholder="Your name" name="name">
            <input class = "contactInput" type="email" placeholder="Your email" name="email">
            <input class = "contactInput" type="text" placeholder="The subject of your message" name="subject">
            <textarea id = "contactMessage" placeholder="Your message" name="message"></textarea>
            <button id = "sendButton">Send !</button>
        </form>
    </main>    
    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>