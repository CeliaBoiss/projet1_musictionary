<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel = "stylesheet" href = "mainStyle.css">
        <link rel="stylesheet" href="indexStyle.css">
        <link rel="stylesheet" href="menuBurger.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>MusicTionary</title>
    </head>
    <body>
        <?php include "header.php"?>
        <main>
            <section title="articles" id="containerArticles">
                <p id="desktopBorder">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                <div class="articleBorder">
                    <div id="mobile1">
                        <h2 class="mobileTitle">Thème</h2>
                        <p id="hide1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                    </div>
                    <article class="articleBlock">
                        <div class="descriptive">
                            <h2 class ="desktopTitle">Thème</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                        </div>
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                    </article>
                </div>
                <div class="articleBorder">
                    <div id="mobile2">
                        <h2 class="mobileTitle">Thème</h2>
                        <p id="hide2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                    </div>
                    <article class="articleBlock">
                        <div class="descriptive">
                            <h2 class ="desktopTitle">Thème</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                        </div>
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                    </article>
                </div>
                <div class="articleBorder">
                    <div id="mobile3">
                        <h2 class="mobileTitle">Thème</h2>
                        <p id="hide3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                    </div>
                    <article class="articleBlock">
                        <div class="descriptive">
                            <h2 class ="desktopTitle">Thème</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                        </div>
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                    </article>
                </div>
            </section>
        </main>
        <?php include "footer.php"?>
        <script src="menuBurger.js"></script>
        <script src="searchBar.js"></script>
        <script src="index.js"></script>
    </body>
</html>