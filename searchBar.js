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
    }
}

searchButton.addEventListener('click',findThePage);