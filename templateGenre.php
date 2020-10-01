<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "mainStyle.css">
    <link rel="stylesheet" href="menuBurger.css">
    <title>MusicTionary</title>

    <link rel="stylesheet" type="text/css" href="templateGenreStyle.css"/>


</head>
<body>
    <?php include "header.php"?>
  
    <main>

      <section title = 'Genre'>
          <p><img src="https://via.placeholder.com/75" alt="Main Title Genre" class="mainTitleGenre"></p>
          <div class  = "mainTextePresentation">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
          </div>
      </section>

      <section title = 'Few exemples'>
          <h3>Few Exemples</h3>
              <ul>
                  <li>Lorem ipsum dolor sit amet, consec</li>
                  <li>Lorem ipsum dolor sit amet, consec</li>
                  <li>Lorem ipsum dolor sit amet, consec</li>
              </ul>
              <iframe width="350" height="200" CLASS = "video" src="https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </section>

      <section>
            <h2>Discover More</h2>
        <div class="discoverBlock">
                <img src="https://via.placeholder.com/75" alt="Discover Photo" class = "discoverBlockDisposition">
          <article>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
          </article>	
            </div>
        </section>

        <section>
        <div class="discoverBlock">
          <article>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
          </article>
                <img src="https://via.placeholder.com/75" alt="Discover Photo" class = "discoverBlockDisposition">
        </div>
        </section>

        <section>
        <div class="discoverBlock">
                <img src="https://via.placeholder.com/75" alt="Discover Photo" class  ="discoverBlockDisposition">
          <article>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Curabitur eget felis in ante consequat dignissim.</p>
          </article>	
            </div>
        </section>

    </main>

    <?php include "footer.php"?>
    <script src="menuBurger.js"></script>
</body>
</html>