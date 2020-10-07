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
            <p><img src="https://via.placeholder.com/75" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Rapping is a musical form of vocal delivery that incorporates rhyme, rhythmic speech, and street vernacular which is performed or chanted in a variety of ways</p>
                <p>Rap originates from the ghetto and is strongly regional. Since Rap is more language oriented than other genres as well, its various subgenres are therefore often geographically demarcated.</p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">All Rap or Hip Hop music consists of two equally important parts: the beat and the rhyme. The beat used to be made by certain old Funk (or Disco) records which featured breakdowns: sections with only the drummer (and bass) playing. These sections were used to create a continuous (looped) breakbeat (see more at Breakbeat). Sampling, a technique of cutting and pasting small sounds from existing records, was used to complement the breakbeat with melody, bass and sound effects.</p>
                </div>
            </div>
        </section>

        <section title = "Few exemples">
            <h3>Few Exemples</h3>
            <ul>
                <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">The Sugar Hill Gang<br>-<br>Rapper's Delight</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">Eminem<br>-<br>Without Me</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">Missy Elliott<br>-<br>Work It</button></li>
            </ul>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/rKTUAESacQM" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>


        <h2>Discover More</h2>

        <section title = "discoverFirstBlock">
                <div class="discoverFirstBlock">
                    <img src="https://via.placeholder.com/75" alt="Discover Photo" class = "discoverPicture">
                    <p class = "discoverBlockDisposition">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim. <a href="">Go further ...</a></p>
                </div>
            </section>

            <section title ="discoverSecondBlock">
                <div class= "discoverSecondBlock">
                    <p class = "discoverBlockDisposition">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim. <a href="">Go further ...</a></p>
                    <img src="https://via.placeholder.com/75" alt="Discover Photo" class = "discoverPicture">
                </div>
            </section>

            <section title ="discoverThirdBlock">
                <div class="discoverThirdBlock">
                    <img src="https://via.placeholder.com/75" alt="Discover Photo" class  ="discoverPicture">
                    <p class = "discoverBlockDisposition">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim. 
                <a href="">Go further ...</a></p>	
                </div>
            </section>


    <script src="rap.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>