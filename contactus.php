<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>
    <form action="contactus_afterSubmit.php">
        <input type="text" placeholder="Your name" name="name">
        <input type="email" placeholder="Your email" name="email">
        <input type="text" placeholder="The subject of your message" name="subject">
        <textarea placeholder="Your message" name="message"></textarea>
        <button>Send !</button>
    </form>
    <?php include "footer.php"?>
</body>
</html>