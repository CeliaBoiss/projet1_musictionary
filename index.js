let myTheme1 = document.querySelector('#mobile1');
let myTheme2 = document.querySelector('#mobile2');
let myTheme3 = document.querySelector('#mobile3');

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