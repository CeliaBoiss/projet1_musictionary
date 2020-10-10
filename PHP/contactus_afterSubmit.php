<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../Style/mainStyle.css">
    <link rel = "stylesheet" href = "../Style/contactus_afterSubmitStyle.css">
    <link rel="stylesheet" href="../Style/menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MusicTionary</title>
</head>
<body>
    <?php header("refresh:10;url=../public/index.php");
        include "../PHP/header.php";?> 
    <main>
        <section>
            <h4>Merci <?php echo $_GET['name'] ?> pour ton message, nous revenons vers toi dans les plus brefs delais !</h4>
            <p id="timer">Tu seras redirigé vers l'accueil dans 10 seconde(s) ...</p>
            <a href="../public/index.php">Revenir tout de suite à l'accueil</a>
            <p>Récapitulatif de ton message :</p>
            <ul>
                <li>Your name : <?php echo $_GET['name'] ?></li>
                <li>Your email : <?php echo $_GET['email'] ?></li>
                <li>Your subject : <?php echo $_GET['subject'] ?></li>
                <li>Your message : <?php echo $_GET['message'] ?></li>
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