const searchButton = document.querySelector('#searchButton');
const inputSearch = document.getElementById('searchBar');

//Open a page when user write a key word and trigger the search button
function findThePage () 
{
    let mySearch = document.querySelector('#searchBar').value; 
    mySearch=mySearch.toLowerCase(); 

    if (mySearch === "contact" || mySearch === "contact us" || mySearch === "contactus") {
        window.location.replace("../PHP/contactus.php");
    } else if (mySearch === "about" || mySearch === "about us" || mySearch === "aboutus") {
        window.location.replace("../PHP/about.php");
    } else if (mySearch === "index" || mySearch === "accueil" || mySearch === "home") {
        window.location.replace("../public/index.php");
    } else if (mySearch === "blues") {
        window.location.replace("../PHP/blues.php");
    } else if (mySearch === "jazz") {
        window.location.replace("../PHP/jazz.php");
    } else if (mySearch === "rap") {
        window.location.replace("../PHP/rap.php");
    } else if (mySearch === "rock") {
        window.location.replace("../PHP/rock.php");
    } else if (mySearch === "country") {
        window.location.replace("../PHP/country.php");
    } else if (mySearch === "ska") {
        window.location.replace("../PHP/ska.php");
    } else if (mySearch === "rnb") {
        window.location.replace("../PHP/RNB.php");
    } else if (mySearch === "electro") {
        window.location.replace("../PHP/electro.php");
    } else if (mySearch === "disco") {
        window.location.replace("../PHP/disco.php");
    }   else if (mySearch === "legal" || mySearch === "mentions" || mySearch === "legal mentions") {
        window.location.replace("../PHP/legalMentions.php");
    }
}

//Trigger the search when enter key is press on keyboard
function enterKeyboard(event) 
{
    if (event.keyCode === 13) {
        event.preventDefault();
        searchButton.click();
    }
}

searchButton.addEventListener('click',findThePage);
inputSearch.addEventListener('keyup', enterKeyboard);