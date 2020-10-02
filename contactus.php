<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>
    <main>
        <form action="contactus_afterSubmit.php">
            <input type="text" placeholder="Your name" name="name">
            <input type="email" placeholder="Your email" name="email">
            <input type="text" placeholder="The subject of your message" name="subject">
            <textarea placeholder="Your message" name="message"></textarea>
            <button>Send !</button>
        </form>
    </main>    
    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>