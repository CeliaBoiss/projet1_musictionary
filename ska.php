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
        <section title = "Few examples">
        <h3 class="fewExample">A few Examples</h3>
        <hr class="blockSeparator"/> 
            <div class="containExamples">
                <ul>
                    <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">Stranger Cole<br>-<br>Everyday Tomorrow</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">Prince Buster<br>-<br>Enjoy Yourself</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">The skatalites<br>-<br>When I fall in love.wmv</button></li>
                </ul>
            </div>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/6tFXl8KBeFM" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>
        <h2>Discover More</h2>
        <hr class="blockSeparator"/> 
        <section title = "discoverFirstBlock">
                <div class="discoverFirstBlock">
                    <img src="Images/reggae.jpg" alt="Discover Photo" class = "discoverPicture">
                    <p class = "discoverBlockDisposition"><span class="subGenreTitle">REGGAE : </span><br><br> is a music genre that originated in Jamaica in the late 1960s. The term also denotes the modern popular music of Jamaica and its diaspora.
                    <a href="https://www.youtube.com/watch?v=NUn3lj64oNw" class="hideGoFurther" target="_blank">Go further ...</a></p>
                    <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/NUn3lj64oNw" allow="autoplay; encrypted-med" allowfullscreen></iframe>
                </div>
        </section>
        <hr class="blockSeparator"/>
        <section title ="discoverSecondBlock">
            <div class= "discoverSecondBlock">
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/DhKHAopx7D0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">SKA PUNK : </span><br><br>(also spelled ska-punk) is a fusion genre that mixes ska music and punk rock music together.
                <a href="https://www.youtube.com/embed/DhKHAopx7D0"  class="hideGoFurther"  target="_blank">Go further ...</a></p>
                <img src="Images/skapunk.jpg" alt="Discover Photo" class = "discoverPicture">
            </div>
        </section>
        <hr class="blockSeparator"/>
        <section title ="discoverThirdBlock">
            <div class="discoverThirdBlock">
                <img src="Images/dub.jpeg" alt="Discover Photo" class  ="discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">DUB : </span><br><br> is a genre of electronic music that grew out of reggae in the late 1960s and early 1970s, and is commonly considered a subgenre, though it has developed to extend beyond the scope of reggae.
                <a href="https://www.youtube.com/watch?v=QTP5I4x1Yr0" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/QTP5I4x1Yr0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>

    <script src="ska.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>