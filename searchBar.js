const searchButton = document.querySelector('#searchButton');

function findThePage () 
{
    let mySearch = document.querySelector('#searchBar').value; 
    mySearch=mySearch.toLowerCase(); 

    if (mySearch === "contact" || mySearch === "contact us" || mySearch === "contactus") {
        window.location.replace("contactus.php");
    } else if (mySearch === "about" || mySearch === "about us" || mySearch === "aboutus") {
        window.location.replace("about.php");
    } else if (mySearch === "index" || mySearch === "accueil" || mySearch === "home") {
        window.location.replace("index.php");
    } else if (mySearch === "blues") {
        window.location.replace("blues.php");
    } else if (mySearch === "jazz") {
        window.location.replace("jazz.php");
    } else if (mySearch === "rap") {
        window.location.replace("rap.php");
    } else if (mySearch === "rock") {
        window.location.replace("rock.php");
    } else if (mySearch === "country") {
        window.location.replace("country.php");
    } else if (mySearch === "ska") {
        window.location.replace("ska.php");
    } else if (mySearch === "rnb") {
        window.location.replace("rnb.php");
    } else if (mySearch === "electro") {
        window.location.replace("electro.php");
    } else if (mySearch === "disco") {
        window.location.replace("disco.php");
    }   else if (mySearch === "legal" || mySearch === "mentions" || mySearch === "legal mentions") {
        window.location.replace("legalMentions.php");
    }
}

searchButton.addEventListener('click',findThePage);