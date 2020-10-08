<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel = "stylesheet" href = "aboutStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>

    <main>

        <h2>About Us</h2>

        <article class = "member">
            <p class = "description right">
                Célia,<br>Patron Saint of Fully Functional Functionalities
            </p>
            <img class = "profileImage left" src="Images/celia.jpg" alt="célia">
        </article>

        <article class = "member">
            <p class = "description left">
                Achille,<br>His Holiness our Supreme Design Guru
            </p>
            <img class = "profileImage right" src="Images/achille.jpg" alt="achille">
        </article>

        <article class = "member">
            <p class = "description right">
                Yann,<br>Certified Genre Classification Expert 
            </p>
            <img class = "profileImage left" src="Images/yann.jpg" alt="yann">
        </article>

        <article class = "member">
            <p class = "description left">
                Lucy,<br>Professional Tea Drinker
            </p>
            <img class = "profileImage right" src="Images/lucy.jpg" alt="lucy">
        </article>
    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>