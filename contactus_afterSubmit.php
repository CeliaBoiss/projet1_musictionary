<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php";       
        header("refresh:10;url=index.php");?> 
    <section>
        <h4>Merci <?php echo $_GET['name'] ?> pour ton message, nous revenons vers toi dans les plus brefs delais !</h4>
        <p id="timer">Tu seras redirigé vers l'accueil dans 10 seconde(s) ...</p>
        <p>Récapitulatif de ton message :</p>
        <ul>
            <li>Ton nom : <?php echo $_GET['name'] ?></li>
            <li>Ton email : <?php echo $_GET['email'] ?></li>
            <li>Le sujet : <?php echo $_GET['subject'] ?></li>
            <li>Ton message : <?php echo $_GET['message'] ?></li>
        </ul>
    </section>
    <script src="contactus_afterSubmit.js"></script>
    <?php include "footer.php";?>
</body>
</html>