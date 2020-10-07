<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="templateBlueStyle.css"/>
    <link rel="stylesheet" type="text/css" href="templateGenreStyle.css"/>
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>
  
    <main>

        <section title = "Genre">
            <p><img src="Images/skaMain.jpg" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Ska is a musical genre that originated in Jamaica in the late 1950s and was the forerunner of rocksteady and reggae.</p>
                <p>He combined elements of Caribbean mento and calypso with American jazz and rhythm and blues.</p>
                <p> The ska is characterized by a walking bass line accentuated by offbeat rhythms.</p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">It was developed in Jamaica in the 1960s when Stranger Cole, Prince Buster, Clement "Coxsone" Dodd, and Duke Reid formed sound systems for playing American rhythm and blues, and then began recording their own songs. <br> In the early 1960s, ska was the dominant musical genre in Jamaica and was popular with British mods.</p>
                </div>
            </div>
        </section>

        <section title = "Few exemples">
            <h3>Few Exemples</h3>
            <ul>
                <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">Stranger Cole<br>-<br>Everyday Tomorrow</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">Prince Buster<br>-<br>Enjoy Yourself</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">The skatalites<br>-<br>When I fall in love.wmv</button></li>
            </ul>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/6tFXl8KBeFM" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>


        <h2>Discover More</h2>

        <section title = "discoverFirstBlock">
                <div class="discoverFirstBlock">
                    <img src="Images/reggae.jpg" alt="Discover Photo" class = "discoverPicture">
                    <p class = "discoverBlockDisposition">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim. <a href="">Go further ...</a></p>
                </div>
            </section>

            <section title ="discoverSecondBlock">
                <div class= "discoverSecondBlock">
                    <p class = "discoverBlockDisposition">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim. <a href="">Go further ...</a></p>
                    <img src="Images/skapunk.jpg" alt="Discover Photo" class = "discoverPicture">
                </div>
            </section>

            <section title ="discoverThirdBlock">
                <div class="discoverThirdBlock">
                    <img src="Images/dub.jpeg" alt="Discover Photo" class  ="discoverPicture">
                    <p class = "discoverBlockDisposition">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim. 
                <a href="">Go further ...</a></p>	
                </div>
            </section>


    <script src="ska.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>