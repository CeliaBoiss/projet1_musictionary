<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <title>MusicTionary</title>

    <link rel="stylesheet" type="text/css" href="templateGenreStyle.css"/>


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
          </div>
      </section>

      <section title = "Few exemples">
          <h3>Few Exemples</h3>
              <ul>
                  <li class = "chooseVideo" id = "firstVideoToDisplay">Lorem ipsum dolor sit amet, consec</li>
                  <li class = "chooseVideo" id = "secondVideoToDisplay">Lorem ipsum dolor sit amet, consec</li>
                  <li class = "chooseVideo" id = "thirdVideoToDisplay">Lorem ipsum dolor sit amet, consec</li>
              </ul>
              <iframe width="350" height="200" class = "displayedVideo" src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </section>

      <section title = "discoverFirstBlock">
            <h2>Discover More</h2>
            <div class="discoverFirstBlock">
                <img src="https://via.placeholder.com/75" alt="Discover Photo" class = "discoverPicture">
                <p class = "discoverBlockDisposition">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
            </div>
        </section>

        <section title ="discoverSecondBlock">
            <div class= "discoverSecondBlock">
                <p class = "discoverBlockDisposition">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
                <img src="https://via.placeholder.com/75" alt="Discover Photo" class = "discoverPicture">
            </div>
        </section>

        <section title ="discoverThirdBlock">
            <div class="discoverThirdBlock">
                <img src="https://via.placeholder.com/75" alt="Discover Photo" class  ="discoverPicture">
                <p class = "discoverBlockDisposition">Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>	
            </div>
        </section>


    <script src="templateGenreJS.js"></script>

    </main>

    <?php include "footer.php"?>
</body>
</html>