let myTimer = document.querySelector('#timer');
let seconds = 15;

function countDown(seconds)
{
    if (seconds >= 0) {
        myTimer.innerHTML = seconds;
    }
    seconds--;
}


//const myInterval = setInterval(countDown, 1000);

//myTimer.innerHTML = seconds;

document.body.addEventListener('onload')