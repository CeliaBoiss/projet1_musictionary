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
            <p><img src="Images/rapMain.jpg" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Rapping is a musical form of vocal delivery that incorporates rhyme, rhythmic speech, and street vernacular which is performed or chanted in a variety of ways</p>
                <p>Rap originates from the ghetto and is strongly regional. Since Rap is more language oriented than other genres as well, its various subgenres are therefore often geographically demarcated.</p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">All Rap or Hip Hop music consists of two equally important parts: the beat and the rhyme. The beat used to be made by certain old Funk (or Disco) records which featured breakdowns: sections with only the drummer (and bass) playing. These sections were used to create a continuous (looped) breakbeat (see more at Breakbeat). Sampling, a technique of cutting and pasting small sounds from existing records, was used to complement the breakbeat with melody, bass and sound effects.</p>
                </div>
            </div>
        </section>
        <section title = "Few examples">
        <h3 class="fewExample">A few Examples</h3>
        <hr class="blockSeparator"/> 
            <div class="containExamples">
                <ul>
                    <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">The Sugar Hill Gang<br>-<br>Rapper's Delight</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">Eminem<br>-<br>Without Me</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">Missy Elliott<br>-<br>Work It</button></li>
                </ul>
            </div>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/rKTUAESacQM" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>
        <h2>Discover More</h2>
        <hr class="blockSeparator"/> 
        <section title = "discoverFirstBlock">
            <div class="discoverFirstBlock">
                <img src="Images/rapGangsta.png" alt="Discover Photo" class = "discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">GANGSTA RAP :</span><br><br> A subgenre of hip hop music that emerged on ths US West Coast in the mid to late 1980s as a distinct rap subgenre. 
                <a href="https://www.youtube.com/watch?v=ADdpLv3RDhA" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/ADdpLv3RDhA" allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>
        <hr class="blockSeparator"/> 
        <section title ="discoverSecondBlock">
            <div class= "discoverSecondBlock">
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/Fvbe-DEl7ko" allow="autoplay; encrypted-med" allowfullscreen></iframe>
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">POLITICAL RAP :</span><br><br>a subgenre of hip hop music that was developed in the 1980s as a way of turning rap music into a call for political and/or social action and a form of social activism. 
                <a href="https://www.youtube.com/watch?v=Fvbe-DEl7ko" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <img src="Images/rapConscient.png" alt="Discover Photo"  class = "discoverPicture">
            </div>
        </section>
        <hr class="blockSeparator"/> 
        <section title ="discoverThirdBlock">
            <div class="discoverThirdBlock">
                <img src="Images/rapMumble.png" alt="Discover Photo" class  ="discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">MUMBLE RAP :</span><br><br> Caracterized by a mumbling or unclear vocal delivery by artists. While the term has been widely criticized as inaccurate or as a derogatory term, some artists have reclaimed the it. 
                <a href="https://www.youtube.com/watch?v=Q10AqolSgQg" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <iframe class="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/Q10AqolSgQg" allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>


    <script src="rap.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
    <script src="footer.js"></script>
</body>
</html>