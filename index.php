<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel = "stylesheet" href = "mainStyle.css">
        <link rel="stylesheet" href="indexStyle.css">
        <link rel="stylesheet" href="menuBurger.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
        <title>MusicTionary</title>
    </head>
    <body>
        <?php include "header.php"?>
        <main>
            <section title="articles" id="containerArticles">
                <p id="desktopBorder">Welcome to MusicTionary, your online music genre dictionary! <br><br>"A music genre is a conventional category that identifies some pieces of music as belonging to a shared tradition or set of conventions."</p>
                <div class="articleBorder" id="themeColor1">
                    <div id="mobile1">
                        <h2 class="mobileTitle">Black American Music</h2>
                        <p id="hide1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                    </div>
                    <article class="articleBlock">
                        <div class="descriptive">
                            <h2 class ="desktopTitle">Black American Music</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                        </div>
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                    </article>
                </div>

                <div class="articleBorder"  id ="themeColor2">
                    <div id="mobile2">
                        <h2 class="mobileTitle">Children of the Blues</h2>
                        <p id="hide2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                    </div>
                    <article class="articleBlock">
                        <div class="descriptive">
                            <h2 class ="desktopTitle">Children of the Blues</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                        </div>
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                        <img class="articleImg" src="https://via.placeholder.com/90" alt="">
                    </article>
                </div>

                <div class="articleBorder"  id ="themeColor3">
                    <div id="mobile3">
                        <h2 class="mobileTitle">"Pop" Music</h2>
                        <p id="hide3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                    </div>
                    <article class="articleBlock">
                        <div class="descriptive">
                            <h2 class ="desktopTitle">"Pop" Music</h2>
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