let displayedVideo = document.querySelector("#displayedVideo");

let firstVideo =  document.querySelector("#firstVideoToDisplay");
let secondVideo =  document.querySelector("#secondVideoToDisplay");
let thirdVideo =  document.querySelector("#thirdVideoToDisplay");

let urlFirst = "https://www.youtube.com/embed/sQgd6MccwZc";
let urlSecond = "https://www.youtube.com/embed/GIQn8pab8Vc";
let urlThird = "https://www.youtube.com/embed/90c9pEtZquw";

const moreInfo= document.querySelector('#moreInfo');
const clickInfo = document.querySelector('#clickInfo');

function showFirstVideo()
{
    displayedVideo.src = urlFirst;
    firstVideo.style.backgroundColor = "rgba(255 , 155 , 0 , 0.40)";
    secondVideo.style.backgroundColor = "inherit";
    thirdVideo.style.backgroundColor = "inherit";
}

function showSecondVideo()
{
    displayedVideo.src = urlSecond;
    firstVideo.style.backgroundColor = "inherit";
    secondVideo.style.backgroundColor = "rgba(255 , 155 , 0 , 0.40)";
    thirdVideo.style.backgroundColor = "inherit";
}

function showThirdVideo()
{
    displayedVideo.src = urlThird;
    firstVideo.style.backgroundColor = "inherit";
    secondVideo.style.backgroundColor = "inherit";
    thirdVideo.style.backgroundColor = "rgba(255, 155 , 0 , 0.40)";
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

clickInfo.addEventListener("click", showMoreInfo);

firstVideo.addEventListener("click", showFirstVideo);
secondVideo.addEventListener("click", showSecondVideo);
thirdVideo.addEventListener("click", showThirdVideo);