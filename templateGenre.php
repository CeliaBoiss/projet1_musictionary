<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="templateGenreStyle.css"/>
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>
  
    <main>

        <section title = "Genre">
            <p><img src="https://via.placeholder.com/75" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                </div>
            </div>
        </section>

        <section title = "Few exemples">
            <h3>Few Exemples</h3>
            <ul>
                <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">artistArtist<br>-<br>titleTitle</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">artistArtist<br>-<br>titleTitle</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">artistArtist<br>-<br>titleTitle</button></li>
            </ul>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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


    <script src="templateGenreJS.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>