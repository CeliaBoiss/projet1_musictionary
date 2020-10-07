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
            <p><img src="Images/rockMain.jpg" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Rock music is a broad genre of popular music that originated as "rock and roll" in the United States 
                in the late 1940s and early 1950s, and developed into a range of different styles in the mid-1960s and 
                later, particularly in the United States and the United Kingdom.</p>
                <p>It has its roots in 1940s and 1950s rock and roll, a style which drew heavily from the genres of blues, 
                rhythm and blues, and from country music.</p>
                <p>Rock music also drew strongly from a number of other genres such as electric blues and folk, and 
                incorporated influences from jazz, classical and other musical styles. </p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">For instrumentation, rock has centered on the electric guitar, usually as part of a 
                    rock group with electric bass, drums, and one or more singers. Usually, rock is song-based music with 
                    a 4/4 time signature using a verse–chorus form, but the genre has become extremely diverse.</p>
                </div>
            </div>
        </section>

        <section title = "Few exemples">
            <h3>Few Exemples</h3>
            <ul>
                <li><button class = "chooseVideo" id = "firstVideoToDisplay">Chuck Berry<br />-<br />Johnny B. Goode</button></li>
                <li><button class = "chooseVideo" id = "secondVideoToDisplay">Greta Van Fleet<br />-<br />Highway Tune</button></li>
                <li><button class = "chooseVideo" id = "thirdVideoToDisplay">The Rolling Stones<br />-<br />Paint it, Black</button></li>
            </ul>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/T38v3-SSGcM" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>

        <section title = "discoverFirstBlock">
            <h2>Discover More</h2>
            <div class="discoverFirstBlock">
                <img src="Images/rockMetal.jpg" alt="Discover Photo" class = "discoverPicture">
                <p class = "discoverBlockDisposition">Metal - bands developed a thick, massive sound, characterized 
                by distortion, extended guitar solos, emphatic beats, and loudness. The lyrics and performances are 
                sometimes associated with aggression. 
                <a href="https://www.youtube.com/watch?v=W3q8Od5qJio" target="_blank">Go further ...</a></p>
            </div>
        </section>
        <hr class="blockSeparator" />
        <section title ="discoverSecondBlock">
            <div class= "discoverSecondBlock">
                <p class = "discoverBlockDisposition">Punk - They typically produced short, fast-paced songs with 
                hard-edged melodies and singing styles, stripped-down instrumentation, and often political, 
                anti-establishment lyrics. <a href="https://www.youtube.com/watch?v=wvu2-xQUNQI" target="_blank">Go further ...</a></p>
                <img src="Images/rockPunk.jpg" alt="Discover Photo" class = "discoverPicture">
            </div>
        </section>
        <hr class="blockSeparator" />
        <section title ="discoverThirdBlock">
            <div class="discoverThirdBlock">
                <img src="Images/rockPostRock.jpg" alt="Discover Photo" class  ="discoverPicture">
                <p class = "discoverBlockDisposition">Post Rock - Post-rock is a form of experimental rock characterized by a 
                focus on exploring textures and timbre over traditional rock song structures, chords, or riffs. 
                <a href="https://www.youtube.com/watch?v=mZTb8WxEW78" target="_blank">Go further ...</a></p>	
            </div>
        </section>
        
    </main>
    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
    <script src="rock.js"></script>
</body>
</html>