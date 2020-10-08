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
            <p><img src="Images/RNB.jpg" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Rhythm and blues, or R&B, is a genre of popular African-American music that emerged in the 1940s.
                As the name suggests, Rhythm 'n' Blues (“R&B” or “RnB”) is the powerful combination of two old musical genres. 
                Gospel (the rhythm) on the one hand, which offers a groovy tempo.Blues on the other hand, which delivers warm chords and rich bass.
                <p>Contemporary RnB gained momentum during the 1990s until it became predominant in the 2000s
                and combined influences from hip-hop, soul and pop. </p>
                <p></p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">It’s a musical style created above all to make people dance, although there are also many ballads there.
                    <br> The artists of the moment are: R Kelly, Mary J Blige,Boyz II Men, Destiny’s Child....</p>
                   
                </div>
            </div>
        </section>

        <section title = "Few examples">
            <h3 class="fewExample">A few Examples</h3>            

            <ul>
                <li class = "genreList"><button class = "chooseVideo" id = "firstVideoToDisplay">Destiny's Child<br>-<br>Say My Name...</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "secondVideoToDisplay">R.Kelly<br>-<br>I Believe I Can Fly</button></li>
                <li class = "genreList"><button class = "chooseVideo" id = "thirdVideoToDisplay">Mary J Blige<br>-<br>Real</button></li>
            </ul>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/sQgd6MccwZc" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>
                    
        <h2>Discover More</h2>

        <hr class="blockSeparator"/>            

        <section title = "discoverFirstBlock">

                <div class="discoverFirstBlock">
                    <img src="Images/soul.jpg" alt="Discover Photo" class = "discoverPicture">
                    <p class = "discoverBlockDisposition"><span class="subGenreTitle">SOUL : </span><br><br> music is a popular African-American music that emerged in the late 1950s in the United States. 
                        It is considered by some to be a return of rhythm and blues to its roots: gospel (church music). 
                        <a href="https://www.youtube.com/watch?v=6FOUqQt3Kg0" class="hideGoFurther" target="_blank">Go further ...</a></p>
                        <iframe id="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/6FOUqQt3Kg0" frameborder="0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
                       
                </div>
                    

            </section>

            <hr class="blockSeparator"/>

            <section title ="discoverSecondBlock">
                <div class= "discoverSecondBlock">
                    <iframe id="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/uY4cVhXxW64" frameborder="0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
                    <p class = "discoverBlockDisposition"><span class="subGenreTitle">FUNK : </span><br><br> that emerged in the mid-1960s in the United States, and that developed in the 1960s and 1970s, 
                        is characterized by the presence of rhythmic section (guitar, bass, drums), brass or saxophones on rhythmic punctuation (riffs) or solos. 
                        <a href="https://www.youtube.com/watch?v=uY4cVhXxW64" class="hideGoFurther" target="_blank">Go further ...</a></p>
                    <img src="Images/funk.png" alt="Discover Photo" class = "discoverPicture">
                </div>
                   
            </section>
            
            <hr class="blockSeparator"/>

            <section title ="discoverThirdBlock">
                <div class="discoverThirdBlock">
                    <img src="Images/hiphop.jpg" alt="Discover Photo" class  ="discoverPicture">
                    <p class = "discoverBlockDisposition"><span class="subGenreTitle">HIP-HOP : </span><br><br> is a cultural movement that first appeared in New York in the early 1970s. 
                     Deeply urban, hip-hop brings together graffiti, break-dancing, DJing, beat-boxing and rap.   
                     The subject of songs is often politics or society.
                     <a href="https://www.youtube.com/watch?v=PBwAxmrE194" class="hideGoFurther" target="_blank">Go further ...</a></p>
                     <iframe id="hideVideo" width="0" height="0" src="https://www.youtube.com/embed/PBwAxmrE194" frameborder="0" allow="autoplay; encrypted-med" allowfullscreen></iframe>
                </div>
                
            </section>

    <script src="RNB.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>
