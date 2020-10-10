let myTheme1 = document.querySelector('#mobile1');
let myTheme2 = document.querySelector('#mobile2');
let myTheme3 = document.querySelector('#mobile3');

let bluesImage = document.querySelector('#bluesImage');
let jazzImage = document.querySelector('#jazzImage');
let rapImage = document.querySelector('#rapImage');
let rockImage = document.querySelector('#rockImage');
let countryImage = document.querySelector('#countryImage');
let skaImage = document.querySelector('#skaImage');
let rnbImage = document.querySelector('#rnbImage');
let electroImage = document.querySelector('#electroImage');
let discoImage = document.querySelector('#discoImage');

// code to change image link in index so that it's of appropriate size in desktop version

if (window.matchMedia("(min-width: 812px)").matches) {
    bluesImage.src = "../Images/bluesBox.jpg";
    jazzImage.src = "../Images/jazzBox.jpg";
    rapImage.src = "../Images/rapBox.jpg";
    rockImage.src = "../Images/rockBox.jpg";
    countryImage.src = "../Images/countryBox.jpg";
    skaImage.src = "../Images/skaBox.jpg";
    rnbImage.src = "../Images/rnbBox.jpg";
    electroImage.src = "../Images/electroBox.jpg";
    discoImage.src = "../Images/discoBox.png";
}

function showOrHide(event)
{
    const myHiddenParagraph = event.target.nextElementSibling;

    if (myHiddenParagraph.style.display === "block") {
        myHiddenParagraph.style.display = "none";
    } else {
        myHiddenParagraph.style.display = "block";
    }
}

myTheme1.addEventListener("click", showOrHide);
myTheme2.addEventListener("click", showOrHide);
myTheme3.addEventListener("click", showOrHide);