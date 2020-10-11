<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../Style/mainStyle.css">
    <link rel = "stylesheet" href = "../Style/contactus_afterSubmitStyle.css">
    <link rel="stylesheet" href="../Style/menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Contact Us - MusicTionary</title>
</head>
<body>
    <?php header("refresh:10;url=../public/index.php");
        include "../PHP/header.php";?> 
    <main>
        <section>
            <h4>Than you <?php echo htmlentities($_GET['name']) ?> for your message, we will get back to you as soon as possible !</h4>
            <p id="timer">You will be redirected to our home page in 10 seconds(s) ...</p>
            <a href="../public/index.php">Get back to home page now.</a>
            <p>Recap of your message :</p>
            <ul>
                <li>Your name : <?php echo htmlentities($_GET['name']) ?></li>
                <li>Your email : <?php echo htmlentities($_GET['email']) ?></li>
                <li>Your subject : <?php echo htmlentities($_GET['subject']) ?></li>
                <li>Your message : <?php echo htmlentities($_GET['message']) ?></li>
            </ul>
        </section>
    </main>
    <?php include "../PHP/footer.php";?>
    <script src="../JavaScript/contactus_afterSubmit.js"></script>
    <script src="../JavaScript/menuBurger.js"></script>
    <script src="../JavaScript/searchBar.js"></script>
    <script src="../JavaScript/headerFooter.js"></script>
</body>
</html>