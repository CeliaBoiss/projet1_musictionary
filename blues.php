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
            <p><img src="Images/bluesMain.jpg" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Blues is almost as old as popular music itself. Its rich history streams through various genres, just like the Mississippi river carried musicians from Minneapolis to southern New Orleans. At first, Blues was dominantly associated with anything vice; it was regarded as the song of outlaws and criminals. But Blues must rather be seen as an outlet or cry for the people on the border of society: the poor, blind, unfortunate and particularly, the black.</p>
                <p>Blues music (also known as Blue Music) is characterized by use of guitar, single at first and later complemented by drums and bass. Songs are written in an AAB rhyme, in harmonic sequences and onto a 12 bar 4/4 rhythm.</p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">Most recognizable about Blues is a progression of chords, in a call and response manner. Chords also make use of blue notes: notes with an altered pitch. This gives Blues a typical melancholic, mournful sound, although for black musicians such connotation never existed.<br><br>Early blues artists include Robert Johnson, Son House, and Bessie Smith, and modern artists include Joe Bonamassa or Stevie Ray Vaughan.</p>
                </div>
            </div>
        </section>

        <section title = "A few examples">
            <h3>A few Examples</h3>
            <ul>
                <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">Robert Johnson<br>-<br>Stones in my Passway</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">Buddy Guy<br>-<br>Damn Right, I've got the Blues</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">Bessie Smith<br>-<br>St. Louis Blues</button></li>
            </ul>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/r4NK7bLnc6I" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>


        <h2>Discover More</h2>

        <section title = "discoverFirstBlock">
                <div class="discoverFirstBlock">
                    <img src="Images/bluesDelta.jpg" alt="Discover Photo" class = "discoverPicture">
                    <p class = "discoverBlockDisposition">Delta blues - One of the earliest-known styles of blues. It originated in the Mississippi Delta. Guitar and harmonica are its dominant instruments; slide guitar is a hallmark of the style. <a href="https://www.youtube.com/watch?v=NdgrQoZHnNY" target="_blank">Go further ...</a></p>
                </div>
            </section>

            <section title ="discoverSecondBlock">
                <div class= "discoverSecondBlock">
                    <p class = "discoverBlockDisposition">Chicago blues - A form of blues music developed in Chicago, Illinois. It is based on earlier blues idioms, such as Delta blues, but performed in an urban style. <a href="https://www.youtube.com/watch?v=bSfqNEvykv0" target="_blank">Go further ...</a></p>
                    <img src="Images/bluesChicago.jpg" alt="Discover Photo" class = "discoverPicture">
                </div>
            </section>

            <section title ="discoverThirdBlock">
                <div class="discoverThirdBlock">
                    <img src="Images/bluesGospel.jpg" alt="Discover Photo" class  ="discoverPicture">
                    <p class = "discoverBlockDisposition">Gospel - Gospel groups were very popular within the black community, but were virtually unknown to the white community, though some in the white community began to follow them. <a href="https://www.youtube.com/watch?v=xdzoeCuVs7w" target="_blank">Go further ...</a></p>
                </div>
            </section>


    <script src="blues.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>