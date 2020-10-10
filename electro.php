<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="templateGenreStyle.css"/>
    <link rel="stylesheet" type="text/css" href="templateOrangeStyle.css"/>
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>
  
    <main>

        <section title = "Genre">
            <p><img src="Images/electroMain.jpg" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Electro (or electro-funk) is a genre of electronic music and early hip hop directly influenced by the use of the Roland TR-808 drum machines,and funk.</p>
                <p>Records in the genre typically feature drum machines and heavy electronic sounds, usually without vocals, although if vocals are present they are delivered in a deadpan manner, often through electronic distortion such as vocoding and talkboxing.</p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">The early 1980s were electro's mainstream peak. By the mid 1980s, the genre moved away from its electronic and funk influences, using harder edged beats and rock samples, exemplified by Run DMC. <br> Electro became popular again in the late 1990s with artists such as Anthony Rother and DJs such as Dave Clarke. <br> A third wave of popularity occurred in 2007. Electro has branched out into subgenres, including electrocore and skweee.</p>
                </div>
            </div>
        </section>

        <section title = "Few examples">
        <h3 class="fewExample">A few Examples</h3>
        <hr class="blockSeparator"/> 
            <div class="containExamples">
                <ul>
                    <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">Kraftwerk<br>-<br>Numbers</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">YMO<br>-<br>Riot in Lagos</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">Model 500<br>-<br>No Ufo's</button></li>
                </ul>
            </div>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/4YPiCeLwh5o" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>
        <h2>Discover More</h2>
        <hr class="blockSeparator"/> 
        <section title = "discoverFirstBlock">
            <div class="discoverFirstBlock">
                <img src="Images/house.png" alt="Discover Photo" class = "discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">HOUSE MUSIC : </span><br><br>The house is made up of a minimal rhythm, a bass line close to funk, to which are often added voices, sampled or not. 
                <a href="https://www.youtube.com/watch?v=OJ0WL4TJVCg"  class="hideGoFurther" target="_blank">Go further ...</a></p>
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/OJ0WL4TJVCg" allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>
        <hr class="blockSeparator"/>
        <section title ="discoverSecondBlock">
            <div class= "discoverSecondBlock">
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/Zk3Inus-yh4" allow="autoplay; encrypted-med" allowfullscreen></iframe>
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">TRANCE : </span><br><br>Trance is characterized by a tempo oscillating between 125 and 160 beats per minute (BPM), repetitive melodic phrases, and a rising and falling musical form. 
                <a href="https://www.youtube.com/watch?v=Zk3Inus-yh4"  class="hideGoFurther" target="_blank">Go further ...</a></p>
                <img src="Images/trance.jpg" alt="Discover Photo" class = "discoverPicture">
            </div>
        </section>
        <hr class="blockSeparator"/> 
        <section title ="discoverThirdBlock">
            <div class="discoverThirdBlock">
                <img src="Images/techno.jpg" alt="Discover Photo" class  ="discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">TECHNO : </span><br><br> Techno is a genre of electronic music that emerged in the United States in the mid-1980s. 
                <a href="https://www.youtube.com/watch?v=SbZDaD00UXk"  class="hideGoFurther" target="_blank">Go further ...</a></p>	
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/SbZDaD00UXk" allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>

    <script src="electro.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
    <script src="headerFooter.js"></script>
</body>
</html>