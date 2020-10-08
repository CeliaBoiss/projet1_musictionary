<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <link rel="stylesheet" type="text/css" href="templateGenreStyle.css"/>
    <link rel="stylesheet" href="templateBlueStyle.css">
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>
  
    <main>

        <section title = "Genre">
            <p><img src="Images/countryMain.jpg" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Country (also called country and western) is a genre of popular music that takes its roots from genres such as blues and old-time music, and various types of American folk music including Appalachian, Cajun, 
                and the cowboy Western music styles of Red Dirt, New Mexico, Texas country, and Tejano. </p>
                <p>Its popularized roots originate in the Southern United States of the early 1920s.</p>
                <p>The term country music is used today to describe many styles and subgenres. The origins of country 
                music are found in the folk music of working class Americans and blue-collar American life.</p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">Country music often consists of ballads and dance tunes with generally simple forms, 
                    folk lyrics, and harmonies mostly accompanied by string instruments such as banjos, electric and 
                    acoustic guitars, steel guitars (such as pedal steels and dobros), and fiddles as well as harmonicas. 
                    Blues modes have been used extensively throughout its recorded history.<br /><br /> Blues modes have 
                    been used extensively throughout its recorded history.</p>
                </div>
            </div>
        </section>
        <section title = "Few examples">
        <h3 class="fewExample">A few Examples</h3>
        <hr class="blockSeparator"/> 
            <div class="containExamples">
                <ul>
                    <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">Dolly Parton<br />-<br />Jolene</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">Emmylou Harris<br />-<br />C'est la vie</button></li>
                    <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">Willie Nelson<br />-<br />On The Road Again</button></li>
                </ul>
            </div>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/Ixrje2rXLMA" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>

        <h2>Discover More</h2>
        <hr class="blockSeparator"/> 
        <section title = "discoverFirstBlock">
            <div class="discoverFirstBlock">
                <img src="Images/countryFolk.jpg" alt="Discover Photo" class = "discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">FOLK : </span><br><br> Traditional folk music has been defined in several ways: 
                as music transmitted orally, music with unknown composers, or music performed by custom over a long 
                period of time. 
                <a href="https://www.youtube.com/watch?v=AI1rAyllOSU&list=PL-bvrZjsC284y8bvgjtYWonbW_a0P_i6h&index=2" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <iframe id="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/AI1rAyllOSU"  frameborder="0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>
        <hr class="blockSeparator" />
        <section title ="discoverSecondBlock">
            <div class= "discoverSecondBlock">
                <iframe id="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/eMqKv7BOg_s"  frameborder="0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">WESTERN MUSIC : </span><br><br> Western music celebrates the lifestyle of the 
                cowboy on the open ranges, Rocky Mountains, and prairies of Western North America. 
                <a href="https://www.youtube.com/watch?v=eMqKv7BOg_s" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <img src="Images/countryWestern.jpg" alt="Discover Photo" class = "discoverPicture">
            </div>
        </section>
        <hr class="blockSeparator" />
        <section title ="discoverThirdBlock">
            <div class="discoverThirdBlock">
                <img src="Images/countryBanjo.jpg" alt="Discover Photo" class  ="discoverPicture">
                <p class = "discoverBlockDisposition"><span class="subGenreTitle">BANJO MUSIC : </span><br><br> Banjo Country is a genre of music that consists 
                exclusively, or primarily of, the banjo. Banjo music can be played as a solo, or it can be played 
                with a band. 
                <a href="https://www.youtube.com/watch?v=B9FzVhw8_bY" class="hideGoFurther" target="_blank">Go further ...</a></p>
                <iframe id="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/B9FzVhw8_bY"frameborder="0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
            </div>
        </section>
        
    </main>
    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
    <script src="country.js"></script>
</body>
</html>