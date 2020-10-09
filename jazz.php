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

        <section title = "Few examples">
        <h3 class="fewExample">A few Examples</h3>
        <hr class="blockSeparator"/> 
            <div class="containExamples">
                <ul>
                    <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">Duke Ellington with Ella Fitzgerald<br>-<br>Caravan</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">Miles Davis<br>-<br>Tutu</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">Snarky Puppy<br>-<br>Bad Kids to the Back</button></li>
                </ul>
            </div>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/X3ADroVuFwM" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>
        <h2>Discover More</h2>
        <hr class="blockSeparator"/> 
        <section title = "discoverFirstBlock">
            <div class="discoverFirstBlock">
                <img src="Images/jazzBebop.jpg" alt="Discover Photo" class = "discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">BEBOP : </span><br><br>This style, which leaves room for interpretation, is characterized by an often very fast tempo, dynamic phrasing and by the fact that it is not necessarily linked to the dance.
                <a href="https://www.youtube.com/watch?v=okZYCS_TCO8&feature=emb_logo" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <iframe id="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/okZYCS_TCO8" frameborder="0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>
        <hr class="blockSeparator"/> 
        <section title ="discoverSecondBlock">
            <div class= "discoverSecondBlock">
                <iframe id="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/d0HB8ybKJzo" frameborder="0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">FREE JAZZ :</span><br><br>An experimental approach to jazz improvisation that developed in the late 1950s and early 1960s when musicians attempted to change or break down jazz conventions. 
                <a href="https://www.youtube.com/watch?v=d0HB8ybKJzo" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <img src="Images/jazzFree.jpg" alt="Discover Photo" class = "discoverPicture">
            </div>
        </section>
        <hr class="blockSeparator"/> 
        <section title ="discoverThirdBlock">
            <div class="discoverThirdBlock">
                <img src="Images/jazzFusion.jpg" alt="Discover Photo" class  ="discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">JAZZ FUSION :</span><br><br>A music genre that developed in the late 1960s when musicians combined jazz harmony and improvisation with rock music, funk, and rhythm and blues. 
                <a href="https://www.youtube.com/watch?v=R0oY_47pwJ8" class="hideGoFurther" target="_blank">Go further ...</a></p>	
                <iframe id="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/R0oY_47pwJ8"frameborder="0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>


    <script src="jazz.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
    <script src="footer.js"></script>
</body>
</html>