let displayedVideo = document.querySelector("#displayedVideo");

let firstVideo =  document.querySelector("#firstVideoToDisplay");
let secondVideo =  document.querySelector("#secondVideoToDisplay");
let thirdVideo =  document.querySelector("#thirdVideoToDisplay");

let urlFirst = "https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG";
let urlSecond = "https://www.youtube.com/embed/6yCIDkFI7ew";
let urlThird = "https://www.youtube.com/embed/N0zOkMBk7ik";

const moreInfo= document.querySelector('#moreInfo');

function showFirstVideo()
{
    displayedVideo.src = urlFirst;
    firstVideo.style.backgroundColor = "rgba(0 , 0 , 255 , 0.10)";
    secondVideo.style.backgroundColor = "inherit";
    thirdVideo.style.backgroundColor = "inherit";
}

function showSecondVideo()
{
    displayedVideo.src = urlSecond;
    firstVideo.style.backgroundColor = "inherit";
    secondVideo.style.backgroundColor = "rgba(0 , 0 , 255 , 0.10)";
    thirdVideo.style.backgroundColor = "inherit";
}

function showThirdVideo()
{
    displayedVideo.src = urlThird;
    firstVideo.style.backgroundColor = "inherit";
    secondVideo.style.backgroundColor = "inherit";
    thirdVideo.style.backgroundColor = "rgba(0 , 0 , 255 , 0.10)";
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