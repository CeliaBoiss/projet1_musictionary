

let displayedVideo = document.querySelector(".displayedVideo");
let chooseVideo = document.querySelector(".chooseVideo");

let firstVideo =  document.querySelector("firstVideoToDisplay");
let secondVideo =  document.querySelector("secondVideoToDisplay");
let thirdVideo =  document.querySelector("thirdVideoToDisplay");


function showVideo(){
    switch () {
        case "firstVideoToDisplay":
            chooseVideo.src = "https://youtu.be/Rtr92EENgAc";.
            break;
        case "secondVideoToDisplay":
            chooseVideo.src = "https://youtu.be/6yCIDkFI7ew";
            break;
        case "thirdVideoToDisplay":
            chooseVideo.src = "https://youtu.be/Rtr92EENgAc";
            break;
        default :
    }
}




chooseVideo.addEvenListener("click",showVideo);














