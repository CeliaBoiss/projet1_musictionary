

let displayedVideo = document.querySelector("#displayedVideo");
let chooseVideo = document.querySelector(".chooseVideo");

let firstVideo =  document.querySelector("#firstVideoToDisplay");
let secondVideo =  document.querySelector("#secondVideoToDisplay");
let thirdVideo =  document.querySelector("#thirdVideoToDisplay");

let urlFirst = "https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG";
let urlSecond = "https://www.youtube.com/embed/6yCIDkFI7ew";
let urlThird = "https://youtu.be/Rtr92EENgAc";

function showVideo(){
    if (chooseVideo.value === firstVideo.value) {
        displayedVideo.src = urlFirst;

    } else if (chooseVideo.value === secondVideo.value) {          
        displayedVideo.src = urlSecond;
    } else if (chooseVideo.value === thirdVideo.value) {
        displayedVideo.src = urlThird ;
    }
}

chooseVideo.addEvenListener("click", showVideo);











/*

function showVideo(){
    if (chooseVideo.value === firstVideo.value) {
        displayedVideo.setAttribute("src" , "https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG");

    } else if (chooseVideo.value === secondVideo.value) {          
        displayedVideo.setAttribute("src" , "https://www.youtube.com/embed/6yCIDkFI7ew");
    } else if (chooseVideo.value === thirdVideo.value) {
        displayedVideo.setAttribute("src" , "https://youtu.be/Rtr92EENgAc");
    }
}

chooseVideo.addEvenListener("click", showVideo);


*/


/*function showVideo(){
    switch (chooseVideo) {
        case "firstVideoToDisplay":
            displayedVideo.src = "https://www.youtube.com/embed/videoseries?list=PLx0sYbCqOb8TBPRdmBHs5Iftvv9TPboYG";
            break;
        case "secondVideoToDisplay":
            displayedVideo.src = "https://youtu.be/6yCIDkFI7ew";
            break;
        case "thirdVideoToDisplay":
            displayedVideo.src = "https://youtu.be/Rtr92EENgAc";
            break;

    }
}

chooseVideo.addEvenListener("click", showVideo);


*/

















