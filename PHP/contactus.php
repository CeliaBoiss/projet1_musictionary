<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" href = "../Style/mainStyle.css">
        <link rel = "stylesheet" href = "../Style/contactusStyle.css">
        <link rel="stylesheet" href="../Style/menuBurger.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>MusicTionary</title>
    </head>
    <body>
        <?php include "../PHP/header.php"?>
        <main>
            <h2>Contact Us</h2>
            <form action="../PHP/contactus_afterSubmit.php">
                <label for = "name">What's your name?</label>
                <input class = "contactInput"  id = "name" type="text" placeholder="Mick Jagger" name="name" required>
                <label for = "email">What's your email adress?</label>
                <input class = "contactInput" id = "email" type="email" placeholder="micky@rollingstones.cocaine" name="email" required>
                <label for = "subject">Why do you contact us?</label>
                <input class = "contactInput" id = "subject" type="text" placeholder="I can't get no satisfaction :(" name="subject">
                <label for = "contactMessage">Enter your message here :</label>
                <textarea id = "contactMessage" placeholder="When I'm drivin' in my car, and the man come on the radio, he's tellin' me more and more about some useless information." name="message" required></textarea>
                <button id = "sendButton">Send !</button>
            </form>
        </main>    
        <?php include "../PHP/footer.php"?>
        <script src="../JavaScript/menuBurger.js"></script>
        <script src="../JavaScript/searchBar.js"></script>
        <script src="../JavaScript/headerFooter.js"></script>
    </body>
</html>