let displayedVideo = document.querySelector("#displayedVideo");

let firstVideo =  document.querySelector("#firstVideoToDisplay");
let secondVideo =  document.querySelector("#secondVideoToDisplay");
let thirdVideo =  document.querySelector("#thirdVideoToDisplay");

let urlFirst = "https://www.youtube.com/embed/T38v3-SSGcM";
let urlSecond = "https://www.youtube.com/embed/aJg4OJxp-co";
let urlThird = "https://www.youtube.com/embed/O4irXQhgMqg";

const moreInfo= document.querySelector('#moreInfo');

function showFirstVideo()
{
    displayedVideo.src = urlFirst;
    firstVideo.style.fontWeight = "bold";
    secondVideo.style.fontWeight = "normal";
    thirdVideo.style.fontWeight = "normal";
}

function showSecondVideo()
{
    displayedVideo.src = urlSecond;
    firstVideo.style.fontWeight = "normal";
    secondVideo.style.fontWeight = "bold";
    thirdVideo.style.fontWeight = "normal";
}

function showThirdVideo()
{
    displayedVideo.src = urlThird;
    firstVideo.style.fontWeight = "normal";
    secondVideo.style.fontWeight = "normal";
    thirdVideo.style.fontWeight = "bold";
}

function showMoreInfo()
{
    const myHiddenParagraph = document.querySelector('.hide');

    if (myHiddenParagraph.style.display === "block") {
        myHiddenParagraph.style.display = "none";
    } else {
        myHiddenParagraph.style.display = "block";
    }
}

moreInfo.addEventListener("click", showMoreInfo);

firstVideo.addEventListener("click", showFirstVideo);
secondVideo.addEventListener("click", showSecondVideo);
thirdVideo.addEventListener("click", showThirdVideo);