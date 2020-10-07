<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <link rel="stylesheet" type="text/css" href="templateGenreStyle.css"/>
    <title>MusicTionary</title>
</head>
<body>
    <?php include "header.php"?>
  
    <main>

        <section title = "Genre">
            <p><img src="Images/rockMain.jpg" alt="Main Title Genre" class="mainTitleGenre"></p>
            <div class  = "mainTextePresentation">
                <p>Le rock est un genre musical apparu dans les années 1950 aux États-Unis et qui s'est développé en 
                différents sous-genres à partir des années 1960.</p>
                <p>Il prend ses racines dans le rock 'n' roll des années 1940 et 1950, lui-même grandement influencé 
                par le rhythm and blues et la country.</p>
                <p>Son influence culturelle est désormais prééminente dans l'industrie musicale, et se diffuse également 
                dans d'autres arts (cinéma, bande dessinée, mode vestimentaire). </p>
                <div id="moreInfo">
                    <span id="clickInfo">More info ...</span>
                    <p class="hide">Le rock est caractérisé par une mélodie vocale dominante, souvent accompagnée par une 
                    ou plusieurs guitares électriques, une guitare basse et une batterie ; il peut également être 
                    accompagné de synthétiseurs/piano, de cuivres ou d'autres instruments.<br /><br />
                    Les paroles, qui contiennent parfois des références à la sexualité et aux drogues, ont servi de 
                    vecteur à des mouvements sociaux et culturels, comme les mods en Angleterre ou la contre-culture 
                    hippie en Californie.</p>
                </div>
            </div>
        </section>

        <section title = "Few exemples">
            <h3>Few Exemples</h3>
            <ul>
                <li><button class = "chooseVideo" id = "firstVideoToDisplay"><p class = "artistName">Chuck Berry</p><p class = "songTitle">Johnny B. Goode</p></button></li>
                <li><button class = "chooseVideo" id = "secondVideoToDisplay"><p class = "artistName">Greta Van Fleet</p><p class = "songTitle">Highway Tune</p></button></li>
                <li><button class = "chooseVideo" id = "thirdVideoToDisplay"><p class = "artistName">The Rolling Stones</p><p class = "songTitle">Paint it, Black</p></button></li>
            </ul>
            <div id = "video">
                <iframe width="350" height="200" id = "displayedVideo" src="https://www.youtube.com/embed/T38v3-SSGcM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
        </section>

        <section title = "discoverFirstBlock">
                <h2>Discover More</h2>
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


    <script src="rock.js"></script>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
    <script src="searchBar.js"></script>
</body>
</html>