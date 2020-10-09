<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">    
        <link rel = "stylesheet" href = "mainStyle.css">
        <link rel="stylesheet" href="indexStyle.css">
        <link rel="stylesheet" href="menuBurger.css">
        <title>MusicTionary</title>
    </head>
    <body>
        <?php include "header.php"?>
        <main>
            <section title="articles" id="containerArticles">
                <p id="desktopBorder">Welcome to MusicTionary, your online music genre dictionary! <br><br>"A music genre is a conventional category that identifies some pieces of music as belonging to a shared tradition or set of conventions."</p>
                <div class="articleBorder" id="themeColor1">
                    <div id="mobile1">
                        <h2 class="mobileTitle">Black American Music ⬇</h2>
                        <p id="hide1">The Black Amercian community has generated the foundations for basically every major modern musical genre you can think of!</p>
                    </div>
                    <article class="articleBlock">
                        <div class="descriptive">
                            <h2 class ="desktopTitle">Black American Music</h2>
                            <p>The Black Amercian community has generated the foundations for basically every major modern musical genre you can think of!</p>
                        </div>
                        <a class = "articleLink" href = "blues.php"><img id = "bluesImage" class="articleImg" src="Images/bluesBanner.jpg" alt=""></a>
                        <a class = "articleLink" href = "jazz.php"><img id = "jazzImage" class="articleImg" src="Images/jazzBanner.jpg" alt=""></a>
                        <a class = "articleLink" href = "rap.php"><img id = "rapImage" class="articleImg" src="Images/rapBanner.jpg" alt=""></a>
                    </article>
                </div>

                <div class="articleBorder"  id ="themeColor2">
                    <div id="mobile2">
                        <h2 class="mobileTitle">Children of the Blues ⬇</h2>
                        <p id="hide2">Birthed in the USA by the Black community in the 19th century, the Blues is the root of modern music.</p>
                    </div>
                    <article class="articleBlock">
                        <div class="descriptive">
                            <h2 class ="desktopTitle">Children of the Blues</h2>
                            <p>Birthed in the USA by the Black community in the 19th century, the Blues is the root of modern music.</p>
                        </div>
                        <a class = "articleLink" href = "rock.php"><img id = "rockImage" class="articleImg" src="Images/rockBanner.jpg" alt=""></a>
                        <a class = "articleLink" href = "country.php"><img id = "countryImage" class="articleImg" src="Images/countryBanner.jpg" alt=""></a>
                        <a class = "articleLink" href = "ska.php"><img id = "skaImage" class="articleImg" src="Images/skaBanner.jpg" alt=""></a>
                    </article>
                </div>

                <div class="articleBorder"  id ="themeColor3">
                    <div id="mobile3">
                        <h2 class="mobileTitle">"Pop" Music ⬇</h2>
                        <p id="hide3">Not quite a "genre" per say, Pop Music is an umbrella term for everything and anything that's playing on the radio or at the top of the charts.</p>
                    </div>
                    <article class="articleBlock">
                        <div class="descriptive">
                            <h2 class ="desktopTitle">"Pop" Music</h2>
                            <p>Not quite a "genre" per say, Pop Music is an umbrella term for everything and anything that's playing on the radio or at the top of the charts.</p>
                        </div>
                        <a class = "articleLink" href = "RNB.php"><img id = "rnbImage" class="articleImg" src="Images/rnbBanner.jpg" alt=""></a>
                        <a class = "articleLink" href = "electro.php"><img id = "electroImage" class="articleImg" src="Images/electroBanner.jpg" alt=""></a>
                        <a class = "articleLink" href = "disco.php"><img id = "discoImage" class="articleImg" src="Images/discoBanner.png" alt=""></a>
                    </article>
                </div>
            </section>
        </main>
        <?php include "footer.php"?>
        <script src="menuBurger.js"></script>
        <script src="searchBar.js"></script>
        <script src="index.js"></script>
        <script src="footer.js"></script>
    </body>
</html>