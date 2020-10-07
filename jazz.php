<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="templateGenreStyle.css"/>
    <link rel="stylesheet" type="text/css" href="templateGreenStyle.css"/>
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>
  
    <main>

        <section title = "Genre">
            <p><img src="Images/jazzMain.jpg" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Jazz is music performed by an ensemble of players, each (very) specialized and proficient in their respective instrument. The usual Jazz instruments are: trumpets, saxophones, clarinets, trombones, string-bass, and piano alongside drums and a jazz-guitar.</p>
                <p>The interaction between these players is crucial. Compared to Rock or Blues, Jazz musicians follow no completely predetermined scores. They have to “feel” what the others are about to play and how the music will evolve.</p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide"> The difficult aspect of improvisation probably explains why Jazz of all the super-genres is the most (if not always) instrumental, experiments the least with sound effects and plays more with structure, patterns and rhythms.</p>
                </div>
            </div>
        </section>

        <section title = "Few exemples">
            <h3>Few Exemples</h3>
            <ul>
                <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">Duke Ellington with Ella Fitzgerald<br>-<br>Caravan</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">Miles Davis<br>-<br>Tutu</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">Snarky Puppy<br>-<br>Bad Kids to the Back</button></li>
            </ul>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/X3ADroVuFwM" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>

        <section title = "discoverFirstBlock">
                <h2>Discover More</h2>
                <div class="discoverFirstBlock">
                    <img src="Images/jazzBebop.jpg" alt="Discover Photo" class = "discoverPicture">
                    <p class = "discoverBlockDisposition">Bebop - This style, which leaves room for interpretation, is characterized by an often very fast tempo, dynamic phrasing and by the fact that it is not necessarily linked to the dance.
                     <a href="https://www.youtube.com/watch?v=okZYCS_TCO8&feature=emb_logo"  target="_blank">Go further ...</a></p>
                </div>
            </section>

            <section title ="discoverSecondBlock">
                <div class= "discoverSecondBlock">
                    <p class = "discoverBlockDisposition">Free jazz - An experimental approach to jazz improvisation that developed in the late 1950s and early 1960s when musicians attempted to change or break down jazz conventions. <a href="https://www.youtube.com/watch?v=d0HB8ybKJzo" target="_blank">Go further ...</a></p>
                    <img src="Images/jazzFree.jpg" alt="Discover Photo" class = "discoverPicture">
                </div>
            </section>

            <section title ="discoverThirdBlock">
                <div class="discoverThirdBlock">
                    <img src="Images/jazzFusion.jpg" alt="Discover Photo" class  ="discoverPicture">
                    <p class = "discoverBlockDisposition">Jazz fusion - A music genre that developed in the late 1960s when musicians combined jazz harmony and improvisation with rock music, funk, and rhythm and blues. <a href="https://www.youtube.com/watch?v=R0oY_47pwJ8" target="_blank">Go further ...</a></p>	
                </div>
            </section>


    <script src="jazz.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>